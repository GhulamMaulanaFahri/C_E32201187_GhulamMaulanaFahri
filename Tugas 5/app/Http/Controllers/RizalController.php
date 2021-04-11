<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RizalController extends Controller
{
    public function index(){
    	//return "Halo Nama Saya Rizal, dan Saya lagi Belajar Laravel Menggunakan Controller";
    	$nama = "Rizal Achmad Pahlevi";

    	$pelajaran = ["MVC","Laravel","Pemrograman Lanjut"];

    	return view('meong', compact('nama', 'pelajaran')); 
    }

    public function create(){
    	return "Metode ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }

    public function store(request $request){
    	return "Metode ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }

    public function show($id){
    	return "Metode ini nantinya akan digunakan untuk mengambil satu data uuser dengan id-".$id;
    }

    public function edit($id){
    	return "Metode ini nantinya akan digunakan untuk menampulkan form untuk mengubah data edit dengan id-".$id;
    }

    public function update(request $request, $id){
    	return "Metode ini nantinya akan digunakan untuk mengubah data user dengan id-".$id;
    }

    public function destroy($id){
    	return "Metode ini nantinya digunakan untuk menghapus data user dengan id-".$id;
    } 
}
