<?php

namespace Modules\Admin\Http\Controllers;

use App\HelpersClass\Date;
use App\Models\Contact;
use App\Models\Rating;
use App\Models\Transaction;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

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


        //Thống kê trạng thái đơn hàng
        //Đơn chưa xử lý
        $transDefault = Transaction::where('tr_status', Transaction::STATUS_DEFAULT)->select('id')->count();
        //Đơn đã hoàn thành
        $transDone = Transaction::where('tr_status', Transaction::STATUS_DONE)->select('id')->count();
        //Đơn đang vận chuyển
        $transShipping = Transaction::where('tr_status', Transaction::STATUS_SHIPPING)->select('id')->count();

        
        $statusTrans = [
            [
                'Hoàn thành', $transDone, false
            ],
            [
                'Đang vận chuyển', $transShipping, false
            ],
            [
                'Đang chờ', $transDefault, false
            ]
        ];
        /* dd($statusTrans); */

        //Ngày trong tháng
        $listDate = Date::getListDayInMonth();
        /* $month = Date::getMonth();
        dd($month); */
        //Doanh thu các ngày trong tháng
        $moneyDaily = Transaction::whereMonth('updated_at', date('m'))->where('tr_status', Transaction::STATUS_DONE)
            ->select(\DB::raw('sum(tr_total) as totalMoney'), \DB::raw('DATE(updated_at) day'))->groupBy('day')->get()->toArray();
        $arrDailyMoney = [];
        foreach ($listDate as $day) {
            $total = 0;
            foreach ($moneyDaily as $key => $revenue) {
                if ($revenue['day'] == $day) {
                    $total = $revenue['totalMoney'];
                    break;
                }
            }
            $arrDailyMoney[] = (int)$total;
        }
        //dd($arrDailyMoney);
        $viewData = [
            'ratings' => $ratings,
            'contacts' => $contacts,
            'moneyDay' => $moneyDay,
            'moneyMonth' => $moneyMonth,
            'notdoneTrans' => $notdoneTrans,
            'notdoneCont' => $notdoneCont,
            'statusTrans' => json_encode($statusTrans),
            'listDate'  => json_encode($listDate),
            'arrDailyMoney' => json_encode($arrDailyMoney),
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
            array_push($days_array, $transDate->format('d'));
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
}
