<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Table;

class IndexController extends Controller
{

	// protected $message;
	// protected $header;

	public function __construct(){
   //  $this -> message = 'Hello Word!!!';
	  // $this -> header = 'ok';
	}

	public function index(){
		$tables = Table::all();
		// dump($tables);
		return view('bookPhone') -> with([
			// 'message'=>$this->message,
			// 'header'=>$this -> header,
			'tables'=>$tables]);
	}
 
public function add(Request $request) {
	// dump($request -> all());

	if (isset($request['name']) and isset($request['number'])){


	// $this->validate($request,[
	// 	'name'=> 'required',
	// 	'number' => 'required']);

	
	$data = $request ->all(['name', 'number']);
	// var_dump($data);
	$table = new Table;
	// dump($table);
	$table -> fill($data);
	// dump($table);
	$table ->save();
	echo 'Контакт добавлен в БД';
	return redirect('/');
}
	else { return view('addNumber'); }
  
		
}

public function store(Request $request)
{

	if (isset($request['name']) and isset($request['number']) and isset($request['id'])){
	  $data = $request -> all();
    var_dump($data['id']);
	  $table = Table::find($data['id']);
	  var_dump($table);
    $table->name= $request['name'];
    $table->number= $request['number'];
    $table->save();
    return redirect('/');

	  }
	  else {
	  return view('editNumber'); }
    // $table->name="В свободное время я люблю танцевать";
    // $table->save();
}






}


