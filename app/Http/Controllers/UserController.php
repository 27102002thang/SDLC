<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showdata(Request $request){
        $keyword = $request->input('keyword');
        if ($keyword) {
            $keyword = '%' . trim($keyword) . '%';
            $listProduct = DB::table('cars')
                ->where('name', 'like', $keyword)
                ->               paginate(8);
            $totalResults = DB::table('cars')
                ->where('name', 'like', $keyword)
                ->count();
        }else{
            $listProduct =DB::table('cars')->paginate(8);
            $totalResults = DB::table('cars')->count();
        }
        return view("/customer.content", compact('listProduct','totalResults'));
    }
    public function detail($id){
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
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);


        DB::table('orders')->insert([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'order_date' => $request->start_date,
            'return_date' => $request->end_date,
//            'created_at' => now(),
//            'updated_at' => now(),
        ]);

        return redirect()->route('customer.content')->with('message', 'Thuê xe thành công!');
    }


}
