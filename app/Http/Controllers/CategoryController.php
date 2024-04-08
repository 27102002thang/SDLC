<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category()
    {
        $cars = DB::table('cars')
            ->join('categories', 'cars.category_id', '=', 'categories.category_id')
            ->select('cars.*', 'categories.category_name as category_name')
            ->get();

        $categories = DB::table('categories')->get();

        return view('/customer.index', ["car" => $cars,"category" => $categories]);
    }
}
