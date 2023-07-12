@extends('layout.main')
@section('content')

<h1>Master Transaksi</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('mahasiswaferdi/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>Nama Mahasiswa</td>
    <td>Alamat</td>
    <td>Prodi</td>
    <td>Email</td>
   
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($mahasiswaferdi as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->nama_ferdi }}</td>
    <td>{{ $rows->alamat_ferdi }}</td>
    <td>{{ $rows->prodi_ferdi }}</td>
    <td>{{ $rows->email_ferdi }}</td>
   
    
    <td>
        <a href="{{ asset('mahasiswaferdi/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('mahasiswaferdi/delete/'.$rows->id ) }}">Del</a>
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