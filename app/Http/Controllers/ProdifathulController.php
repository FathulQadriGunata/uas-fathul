<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodifathul_model;

class ProdifathulController extends Controller
{
    public function index(){
        $myprodi = new Prodifathul_model();
        $prodifathul = $myprodi->tampil_prodifathul();
        
        $data = array('prodifathul' => $prodifathul);
        return view('prodifathul/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('prodifathul/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('prodifathul')
         ->insert([
            'prodi_id'  =>  $request->prodi_id,
            'nama_prodi'  =>  $request->nama_prodi,
            'pejabat'  =>  $request->pejabat,
             
         ]);
         return redirect('prodifathul');
     }
 
     public function edit($id){
         // return ('Testing');
         $prodifathul = \DB::table('prodifathul')->where('id', $id)->first();
         //dd($akun);
         $data = array('prodifathul' => $prodifathul);
         return view('prodifathul/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('prodifathul')->where('id',$request->id)
         ->update([
            'prodi_id'  =>  $request->prodi_id,
            'nama_prodi'  =>  $request->nama_prodi,
            'pejabat'  =>  $request->pejabat,
            
         ]);
         return redirect('prodifathul');
     }
 
     public function delete ($id){
         $query = \DB::table('prodifathul')->where('id',$id)->delete();
         return redirect('prodifathul');
     }
}
