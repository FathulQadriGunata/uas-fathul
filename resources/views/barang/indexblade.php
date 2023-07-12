@extends('layout.main')
@section('content')

<h1>Tabel Barang</h1>
<div class="card">
<div class="card-header">
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
    <td>No</td>
    <td>Kode Barang</td>
    <td>Nama Barang</td>
    <td>Harga Barang</td>
    <td>Jumlah Barang</td>
    
    
 </tr>  
 </thead>

<tbody> 
<?php 
$no=0;
foreach ($barang as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    td>{{ $rows->kodebarang }}</td>
    <td>{{ $rows->namabarang }}</td>
    <td>{{ $rows->harga }}</td>
    <td>{{ $rows->jumlah }}</td>

    
    
    <td>{{ $rows->tipe }}</td>
    
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection