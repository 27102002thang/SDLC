<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class OrderController extends Controller
{
    public function showOrder(Request $request){

        $orders = DB::table('orders')
            ->join('cars', 'orders.car_id', '=', 'cars.id')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('status', 'orders.status_id', '=', 'status.id')
            ->select(
                'cars.name as car_name',
                'cars.price as car_price',
                'orders.name',
                'orders.phone',
                'orders.address',
                'orders.order_date',
                'orders.return_date',
                DB::raw('DATEDIFF(orders.return_date, orders.order_date) as rental_days'),
                DB::raw('DATEDIFF(orders.return_date, orders.order_date) * cars.price as total_price'),
                'orders.id',
                'orders.note',
                'status.stt_value'
            )
            ->get();

        $status = DB::table("status")->get();

        return view('/admin.orderDetail', ["orders"=>$orders],["status"=>$status]);
    }
    public function delete($id){
        DB::table('orders')
            ->where ("id",$id)
            ->delete();
        return redirect("/admin/orderDetail");
    }

    public function formUpdate($id){
        $orders = DB::table('orders')
            ->join('cars', 'orders.car_id', '=', 'cars.id')
            ->join('users', 'orders.user_id', '=', 'users.id')

            ->select(
                'cars.name as car_name',
                'cars.price as car_price',
                'orders.name',
                'orders.phone',
                'orders.address',
                'orders.order_date',
                'orders.return_date',
                DB::raw('DATEDIFF(orders.return_date, orders.order_date) as rental_days'),
                DB::raw('DATEDIFF(orders.return_date, orders.order_date) * cars.price as total_price'),
                'orders.id',
                'orders.status_id'
            )
            ->where('orders.id', $id)
            ->first();
        if ($orders) {
            $orders->order_date = Carbon::parse($orders->order_date)->format('Y-m-d');
            $orders->return_date = Carbon::parse($orders->return_date)->format('Y-m-d');
        }
        return view('/admin.orderUpdate',[
            "order" => $orders]);

    }
    public function saveUpdate(Request $request ){
        $id = $request ->id;
        $name = $request ->name;
        $address = $request ->address;
        $phone = $request ->phone;
        $order_date = $request ->order_date;
        $return_date = $request ->return_date;
        $total_price =  $request ->total_price;
        $status = $request ->status_id;


        DB::table("orders")
            ->where ('id','=',$id)
            ->update([
                'name' => $name,
                'address' => $address,
                'phone' => $phone,
                'order_date' => $order_date,
                'return_date' => $return_date,
                'total_price' => $total_price,
                'status_id'=> $status
            ]);

        return redirect('/admin/orderDetail');


    }


}
