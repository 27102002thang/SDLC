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
                ->               paginate(1);
            $categories = DB::table('categories')->get();
        }else{
            $listProduct =DB::table('cars')->paginate(1);
            $categories = DB::table('categories')->get();
        }
        return view("/customer.content", compact('listProduct','categories'));
    }

}
