<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class testController extends Controller
{
	public function DBindex()
	{
		return view('index');
	}

	public function DBInsert(Request $request)
	{
		$name = $request -> get('name');
		$id = md5(microtime(true).$name);
		$age = $request -> get('age');
		$email = $request -> get('email');
		DB::insert('insert into test(id, name, age, email) values(?, ?, ?, ?);', [$id, $name, $age, $email]);
		return redirect() -> route('list');
	}

	public function DBSelect()
	{
		$data = DB::select('select * from test');
		return view('list', ['data' => $data]);
	}

	public function DBDelete(Request $request)
	{
		$id = $request -> get('id');
		DB::delete('delete from test where id = ?;', [$id]);
		return redirect() -> route('list');
	}	
}
