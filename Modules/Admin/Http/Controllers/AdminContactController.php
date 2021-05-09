<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $contacts = Contact::paginate(10);

        $viewData = [ 'contacts'=>$contacts];

        return view('admin::contact.index', $viewData);
    }
    /* public function action($action, $id)
    {
        if($action)
        {
            $product = Product::find($id);
            switch($action)
            {
                case 'delete':
                    $product->delete();
                break;
                case 'active':
                    $product->pro_active = $product->pro_active ? 0 : 1 ;
                    $product->save();
                break;
                case 'hot':
                    $product->pro_hot = $product->pro_hot ? 0 : 1;
                    $product->save();
                break;
            }
        }
        return redirect()->back();
    } */
    public function action($action, $id)
    {
        if($action)
        {
            $contact = Contact::find($id);
            switch($action)
            {
                case 'status':
                    $contact->c_status = $contact->c_status ? 0 : 1;
                    $contact->save();
                    break;
            }
        }
        return redirect()->back();
    }

    
}
