<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function showOrder(Request $request){

        $orders = DB::table('order_detail')
            ->join('cars', 'order_detail.product_id', '=', 'cars.id')
            ->join('orders', 'order_detail.order_id', '=', 'orders.id')
            ->select(
                'cars.name as ten_xe',
                'cars.price as gia_xe',
                'orders.name as ten_khach_hang',
                'orders.phone as so_dien_thoai_khach_hang',
                'orders.address as dia_chi_khach_hang',
                'orders.order_date as ngay_dat',
                'orders.return_date as ngay_tra',
                DB::raw('DATEDIFF(orders.return_date, orders.order_date) as so_ngay_thue'),
                DB::raw('(DATEDIFF(orders.return_date, orders.order_date) * cars.price) as tong_so_tien')
            )
            ->get();

        return view('/admin.orderDetail', ["orders"=>$orders]);
    }

}
