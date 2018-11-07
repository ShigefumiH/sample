<?php
/**
 * Created by PhpStorm.
 * User: hayata
 * Date: 2018/10/22
 * Time: 17:36
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HelloController extends Controller {
    public function getIndex(Request $request) {
//        $res = 'URL : ' . $request->url()
//            . '<br>Long URL : ' . $request->fullURL()
//            . '<br>PATH : ' . $request->path();
//        return view('helloWorld', ['message' => $res]);
        $data = DB::select('select * from MyTable');
        return view('helloWorld', ['message' => 'MyTable List', 'data' => $data]);
    }

    public function postIndex(Request $request) {
        $res = "you typed: " . $request->input('str');
        return view('helloWorld', ['message' => $res]);
    }
}