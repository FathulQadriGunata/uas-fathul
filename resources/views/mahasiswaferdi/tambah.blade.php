@extends('layout.main')
@section('content')

<h1>Master data akun</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Mahasiswa</h1>
<form action="{{ asset('mahasiswaferdi/tambah_proses') }}" method="POST">
@csrf
Nama Mahasiswa <input type="text" name="nama_ferdi"><br>
Alamat <input type="text" name="alamat_ferdi"><br>
Prodi <input type="text" name="prodi_ferdi"><br>
Email <input type="text" name="email_ferdi"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection