@extends('layout.main')
@section('content')
<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('prodifathul/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $prodifathul->id ?>">
ID PRODI <input type="text" name="prodi_id" value="<?php echo $prodifathul->prodi_id ?>"><br>
NAMA PRODI <input type="text" name="nama_prodi" value="<?php echo $prodifathul->nama_prodi ?>"><br>
NAMA JABATAN <input type="text" name="pejabat" value="<?php echo $prodifathul->pejabat ?>"><br>
<input type="submit" value="Simpan">
</form> 
@endsection    