<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showdata(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword) {
            $keyword = '%' . trim($keyword) . '%';
            $listProduct = DB::table('cars')
                ->where('name', 'like', $keyword)
                ->paginate(8);
            $totalResults = DB::table('cars')
                ->where('name', 'like', $keyword)
                ->count();
        } else {
            $listProduct = DB::table('cars')->paginate(8);
            $totalResults = DB::table('cars')->count();
        }
        return view("/customer.content", compact('listProduct', 'totalResults'));
    }

    public function detail($id)
    {
        $detail = DB::table('cars')->where('id', $id)->first();

        return view("/customer.detail", [
            "detail" => $detail
        ]);

    }

    public function showForm($id)
    {
        return view('/customer.order', ['id' => $id]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'order_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:start_date',
            'note' => 'required|string|max:255',
        ]);


        DB::table('orders')->insert([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'order_date' => $request->start_date,
            'return_date' => $request->end_date,
            'address' => $request->address,
            'note' => $request->note,
//            'created_at' => now(),
//            'updated_at' => now(),
        ]);

        $script = "<scrip>
        alert('Đã xác nhận thông tin của quý khác! Xin vui lòng đợi phản hồi từ chúng tôi!');
        </scrip>";

        return $script . redirect()->route('customer.content')->with('message', 'Thuê xe thành công!');
    }


}
