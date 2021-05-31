<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;/* 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\Session\Session; */
use Socialite, Auth, Redirect, Session, URL;
use App\Models\User;


class SocialAuthController extends Controller
{
    /**
     * Chuyển hướng người dùng sang OAuth Provider.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        
        return /* Session::get('pre_url'); */Socialite::driver($provider)->stateless()->redirect();
    }

    /**
     * Lấy thông tin từ Provider, kiểm tra nếu người dùng đã tồn tại trong CSDL
     * thì đăng nhập, ngược lại nếu chưa thì tạo người dùng mới trong SCDL.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();

        /* $authUser = User::where('provider_id', $user->id)->first();
        $emailAuthUser = User::where('email', $user->email)->first();
        if ($authUser) {
            dd($user);
        }
        else if($emailAuthUser)
        {
            dd($emailAuthUser);                                           
        }  
        $nUser = User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
        dd($nUser); */
        $authUser = $this->findOrCreateUser($user, $provider);
        /* dd($authUser); */
        Auth::login($authUser);
        return Redirect::to(Session::get('pre_url'));
    }

    public function findOrCreateUser($user, $provider)
    {
        
        $authUser = User::where('provider_id', $user->id)->first();
        $emailAuthUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }
        else if($emailAuthUser)
        {
            $emailAuthUser->update(['provider' => $provider, 'provider_id' => $user->id]);
            return  $emailAuthUser;                                           
        } 
        /* dd($user->email); */
        $nUser = User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'password' => ' ',
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
        /* $newUser = new User();
        $newUser->name = $user->name;
        $newUser->email = $user->email;
        $newUser->provider = $provider;
        $newUser->provider_id = $user->id;
        $newUser->save(); */
        return $nUser;
    }
}
