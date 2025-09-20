<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {

        // $insertResult = DB::connection('mysql')->insert("insert into users (id,email,name,password) values (null, '123mail@gmail.com', 'name1', 'password1')");
        // $insertResult = DB::connection('mysql')->insert("insert into users (id,email,name,password) values (null, '456mail@gmail.com', 'name2', 'password2')");
        // $insertResult = DB::connection('mysql')->insert("insert into users (id,email,name,password) values (null, '789mail@gmail.com', 'name3', 'password3')");

        $deleteResult = DB::connection("mysql")->delete("delete from users where email = '789mail@gmail.com'");

        return view("sample");
    }
}