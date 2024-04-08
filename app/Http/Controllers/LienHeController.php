<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LienHeController extends Controller {
    public function showData(){
            $listProduct = DB::table('products')->get();

            return view("home", [
                "listProduct" => $listProduct
            ]);
        }

}
