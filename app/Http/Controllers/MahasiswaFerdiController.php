<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswaferdi_model;

class MahasiswaFerdiController extends Controller
{
    public function index(){
        $mymahasiswa = new Mahasiswaferdi_model();
        $mahasiswaferdi = $mymahasiswa->tampil_mahasiswaferdi();
        
        $data = array('mahasiswaferdi' => $mahasiswaferdi);
        return view('mahasiswaferdi/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('mahasiswaferdi/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('mahasiswaferdi')
         ->insert([
             'nama_ferdi'  =>  $request->nama_ferdi,
             'alamat_ferdi'  =>  $request->alamat_ferdi,
             'prodi_ferdi'  =>  $request->prodi_ferdi,
             'email_ferdi'  =>  $request->email_ferdi,
             
         ]);
         return redirect('mahasiswaferdi');
     }
 
     public function edit($id){
         // return ('Testing');
         $mahasiswaferdi = \DB::table('mahasiswaferdi')->where('id', $id)->first();
         //dd($akun);
         $data = array('mahasiswaferdi' => $mahasiswaferdi);
         return view('mahasiswaferdi/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('mahasiswaferdi')->where('id',$request->id)
         ->update([
            'nama_ferdi'  =>  $request->nama_ferdi,
            'alamat_ferdi'  =>  $request->alamat_ferdi,
            'prodi_ferdi'  =>  $request->prodi_ferdi,
            'email_ferdi'  =>  $request->email_ferdi,
            
         ]);
         return redirect('mahasiswaferdi');
     }
 
     public function delete ($id){
         $query = \DB::table('mahasiswaferdi')->where('id',$id)->delete();
         return redirect('mahasiswaferdi');
     }
}
