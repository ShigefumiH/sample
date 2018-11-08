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
use App\MyTable;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HelloController extends Controller {
    public function getIndex(Request $request) {
//        $res = 'URL : ' . $request->url()
//            . '<br>Long URL : ' . $request->fullURL()
//            . '<br>PATH : ' . $request->path();
//        return view('helloWorld', ['message' => $res]);
//        $data = DB::select('select * from MyTable');
        $data = MyTable::all();
//        $id = $request->id;
//        $data = MyTable::where('id', $id)->get();
        return view('helloWorld', ['message' => 'MyTable List', 'data' => $data]);
    }

    public function postIndex(Request $request) {
        $res = "you typed: " . $request->input('str');
//        $data = DB::select('select * from MyTable');
        $data = MyTable::where('name', 'like', $request->input('str') . '%')->get();
        return view('helloWorld', ['message' => $res, 'data' => $data]);
    }

    public function getNew(Request $req) {
        return view('new', ['message' => 'MyTable Create']);
    }

    public function postNew(Request $req) {
        $name = $req->input('name');
        $mail = $req->input('mail');
        $age = $req->input('age');
        $data = array(
            'name' => $name,
            'mail' => $mail,
            'age' => $age
        );
        MyTable::create($data);
        return redirect()->action('HelloController@getIndex');
    }
}