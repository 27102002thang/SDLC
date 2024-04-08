<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showdata(){
        if(isset($_GET['keyword'])) {
            $kw = trim($_GET['keyword']);
            $listProduct=DB::table("SELECT * FROM 'products' WHERE 'name' LIKE '%". '$kw' ."%' ");
        }else{
            $listProduct =DB::table('products')->get();
//        dd($listProduct)
        }
        return view("/customer.index", compact('listProduct'));
    }

}
