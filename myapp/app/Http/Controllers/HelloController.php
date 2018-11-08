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

    public function getUpdate(Request $req) {
        $id = $req->id;
        $data = MyTable::find($id);
        $msg = 'MyTable update [id = ' . $id .']';
        return view('update', ['message' => $msg, 'data' => $data]);
    }

    public function postUpdate(Request $req) {
        $id = $req->input('id');
        $data = MyTable::find($id);
        $data->name = $req->input('name');
        $data->mail = $req->input('mail');
        $data->age = $req->input('age');
        $data->save();
        return redirect()->action('HelloController@getIndex');
    }

    public function postDelete(Request $req) {
        $id = $req->input('id');
        $data = MyTable::find($id);
        $data->delete();
        return redirect()->action('HelloController@getIndex');
    }
}