@extends('layout.main')
@section('content')

<h1>Master Transaksi</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('prodifathul/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>ID PRODI</td>
    <td>NAMA PRODI</td>
    <td>NAMA JABATAN</td>
   
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($prodifathul as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->prodi_id }}</td>
    <td>{{ $rows->nama_prodi }}</td>
    <td>{{ $rows->pejabat }}</td>
   
    
    <td>
        <a href="{{ asset('prodifathul/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('prodifathul/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection