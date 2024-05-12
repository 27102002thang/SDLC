<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function detail($id){
        $detail = DB::table('cars')->where('id', $id)->first();

        return view("/customer.detail", [
            "detail" => $detail
        ]);

    }

}

