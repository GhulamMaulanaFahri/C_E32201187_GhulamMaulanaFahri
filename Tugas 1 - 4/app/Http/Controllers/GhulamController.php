<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GhulamController extends Controller
//{
//	public function index(){
//		return "Hai Nama Saya Ghulam,
//	 	Saya Sedang Belajar Laravel";
//	}

{
	public function index(){
		//return "Metode ini akan digunakan untuk mengambil semua user";
		$nama = "Ghulam Maulana Fahri";

		$pelajaran = ["MVC","Laravel","Pemrograman Lanjut"];

		return view('Foxee', compact('nama','pelajaran'));
	}


	public function create(){
		return "Methode ini nantinya akan digunakan untuk menampilkan form untuk data user";
	}

	public function show($id){
		return "Metode ini digunakan untuk mengambil satu data user dengan id=";
	}


	public function edit($id){
		return "Metode ini digunakan untuk menampilkan form untuk mengubah data edit dengan id=";
	}

	public function update(Request $request, $id){
		return "Metode ini digunakan untuk mengubah data iser dengan id=";
	}

	public function destroy($id){
		return "Metode ini nantinya digunakan untuk menghapus data user dengan id=";
	}


}
