<?php
namespace App\Http\Controllers;
use \App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function showAcc(){
        $listAcc = DB::table('users')->get();

        return view("/admin.account", [
            "listAcc" => $listAcc
        ]);
    }

    public function addAcc()
    {
        return view('/admin.addAccount');
    }

    public function save( Request $request){
//        $validate = $request->validate(
//            [
//                "fullName" => "required"
//            ],
//            [
//                "fullName.required" => "Full Name is not empty"
//            ]
//        );
//        $id = $request -> get('id');
        $name = $request -> get('name');
        $password = $request ->get('password');
        $email = $request ->get('email');
        $phone = $request ->get('phone');
        $role = $request ->get('role');

        DB::table("users")-> insert([
            'name' => $name,
            'password'=> $password,
            'email' => $email,
            'phone' => $phone,
            'role' => $role
        ]);
        return redirect("/admin/account");
    }

    public function update($id){
        $account =DB::table('users')
            ->where('id','=',$id)
            -> first();
        return view('/admin.account_update',[
            "account" => $account
        ]);
    }
    public function saveUpdate(Request $request ){
        $id = $request ->id;
        $name = $request ->name;
        $password = $request ->password;
        $email = $request ->email;
        $phone = $request ->phone;
        $role = $request ->role;

        DB::table("users")
            ->where ('id','=',$id)
            ->update([
                'name' => $name,
                'password' => $password,
                'email' => $email,
                'phone' => $phone,
                'role' => $role
            ]);
        return redirect('/admin/account');
    }
    public function delete($id){
        DB::table('users')
            ->where ("id",$id)
            ->delete();
        return redirect("/admin/account");
    }
}
