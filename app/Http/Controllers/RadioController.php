<?php

namespace App\Http\Controllers;

use App\Radio;
use Illuminate\Http\Request;

class RadioController extends Controller{

	/**llama a index */
	public function index(){
		$radio = Radio::latest()->get();
		return view('index');
	}

	/**
	*Retorna todos los radios
	*@return object
	*/
	public function all(){
		$radio = Radio::all();
		return response()->json($radio);
	}

	/**
	*crea una radio nueva
	*@param array $request Datos de la radio
	*@return object
	*/
	public function store(Request $request){
		$radio = Radio::create($request->all());
		return response()->json($radio, 201);
	}

	/**
	*retorna una radio
	*@param int $id identificador de una radio
	*@return object
	*/
	public function show($id){
		$radio = Radio::find($id);
		return response()->json($radio);
	}

	/**
	*actualizar datos de una radio
	*@param int $id identificador unico de radio
	*@param array $request datos de la radio
	*@return object
	*/
	public function update(Request $request, $id){
		$radio = Radio::find($id);
		$radio->name 		=$request->name;
		$radio->streaming =$request->streaming;
		$radio->save();
		return response()->json($radio);
	}

	/**
	*Elimina una radio
	*@param int $id identificador de una radio
	*@return object
	*/
	public function destroy($id){
		$radio = Radio::find($id);
		$radio->delete();
		return response()->json(['deleted'], 204);
	}
}