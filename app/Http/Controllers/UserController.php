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

        }else{
            $listProduct =DB::table('cars')->paginate(8);

        }
        return view("/customer.content", compact('listProduct'));
    }
    public function detail($id){
        $detail = DB::table('cars')->where('id', $id)->first();

        return view("/customer.detail", [
            "detail" => $detail
        ]);

    }


}
