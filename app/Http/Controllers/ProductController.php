<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller{
    public function getAll(){
        $listProduct = DB::table('cars')->get();

        return view("/admin.product", [
            "listProduct" => $listProduct
        ]);
    }

    public function add(){
        return view('/admin.product_add');
    }

    public function save( Request $request){
        $validate = $request->validate(
            ["productName" => "required"],
            ["productName.required" => "Product Name is not empty"]
        );
//        $id = $request -> get('id');
        $productName = $request -> get('productName');
        $price = $request ->get('price');
        $description = $request ->get('description');
        $fuel_type = $request ->get('fuel_type');
        $seats = $request ->get('seats');
        $license_plates = $request ->get('license_plates');
        $transmission = $request ->get('transmission');
        $brand = $request ->get('brand');

        $image = "";
        if ($request->image != null) {
            $image = $request->image->getClientOriginalName();
            $request->image->move(public_path("image"), $image);
        };

        DB::table("cars")-> insert([
            'name' => $productName,
            'price'=> $price,
            'description'=> $description,
            'brand' => $brand,
            'fuel_type' => $fuel_type,
            'seats' => $seats,
            'license_plates'=> $license_plates,
            'transmission' => $transmission,
            'image' => $image
        ]);
        return redirect("/admin/product");
    }

    public function update($id){
        $product =DB::table('cars')
            ->where('id','=',$id)
            -> first();
        return view('/admin.product_update',[
            "product" => $product
        ]);

    }
    public function saveUpdate(Request $request ){
        $id = $request ->id;
        $productName = $request ->productName;
        $price = $request ->price;
        $description = $request ->description;
        $fuel_type = $request ->fuel_type;
        $seats = $request ->seats;
        $fuel_consumption=$request ->fuel_consumption;
        $license_plates = $request ->liscense_plates;
        $transmission = $request ->transmission;
        $brand = $request ->brand;

        $image = "";
        if ($request->image != null) {
            $image = $request->image->getClientOriginalName();
            $request->image->move(public_path("image"), $image);
        };

        DB::table("cars")
            ->where ('id','=',$id)
            ->update([
                'name' => $productName,
                'price' => $price,
                'description' => $description,
                'brand' => $brand,
                'fuel_type' => $fuel_type,
                'seats' => $seats,
                'fuel_consumption' => $fuel_consumption,
                'license_plates'=> $license_plates,
                'transmission' => $transmission,
                'image'=>$image
            ]);
        return redirect('/admin/product');
    }
    public function delete($id){
        DB::table('cars')
            ->where ("id",$id)
            ->delete();
        return redirect("/admin/product");
    }

    public function viewContract(){
        return view('admin/contract');
    }
}
