<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Contact;
use App\Models\Rating;
use App\Models\Transaction;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        /* Đánh giá mới nhất */
        $ratings = Rating::with('user:id,name', 'product:id,pro_name')->orderBy('created_at', 'desc')->limit(10)->get();

        /* Đơn hàng chưa xử lý */

        /* Liên hệ */
        $contacts = Contact::limit(10)->get();

        //Doanh thu ngày
        $moneyDay = Transaction::whereDay('updated_at', date('d'))->where('tr_status', Transaction::STATUS_DONE)->sum('tr_total');
        //Doanh thu tháng
        $moneyMonth = Transaction::whereMonth('updated_at', date('m'))->where('tr_status', Transaction::STATUS_DONE)->sum('tr_total');
        //Đơn hàng chưa xử lý
        $notdoneTrans = Transaction::where('tr_status', Transaction::STATUS_DEFAULT)->get()->count();
        //Tin nhắn đang chờ
        $notdoneCont = Contact::where('c_status', Contact::STATUS_DEFAULT)->get()->count();
        
        
        $viewData = [
            'ratings'=>$ratings, 
            'contacts'=>$contacts,
            'moneyDay'=>$moneyDay,
            'moneyMonth'=>$moneyMonth,
            'notdoneTrans'=>$notdoneTrans,
            'notdoneCont'=>$notdoneCont,
        ]; 
        
        
        
        return view('admin::index', $viewData);
    }

    public function ChartCreate()
    {
       //Ngày
       $transDates = Transaction::orderBy('updated_at', 'ASC')/* ->pluck('updated_at') */;
       $days_array = array();
        foreach ($transDates as $transDate) {
            /* $day_array[$i] = $transDate->format('d'); */
            array_push ( $days_array , $transDate->format('d'));
        } 
        
    }
    
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
