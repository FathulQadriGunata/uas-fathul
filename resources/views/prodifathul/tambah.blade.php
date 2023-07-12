@extends('layout.main')
@section('content')

<h1>Master data akun</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Mahasiswa</h1>
<form action="{{ asset('prodifathul/tambah_proses') }}" method="POST">
@csrf
ID PRODI <input type="text" name="prodi_id"><br>
NAMA PRODI <input type="text" name="nama_prodi"><br>
NAMA JABATAN<input type="text" name="pejabat"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection