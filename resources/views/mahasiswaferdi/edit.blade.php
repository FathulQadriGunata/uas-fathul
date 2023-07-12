@extends('layout.main')
@section('content')
<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('mahasiswaferdi/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $mahasiswaferdi->id ?>">
Nama Mahasiswa <input type="text" name="nama_ferdi" value="<?php echo $mahasiswaferdi->nama_ferdi ?>"><br>
Alamat <input type="text" name="alamat_ferdi" value="<?php echo $mahasiswaferdi->alamat_ferdi ?>"><br>
Prodi <input type="text" name="prodi_ferdi" value="<?php echo $mahasiswaferdi->prodi_ferdi ?>"><br>
Email <input type="text" name="email_ferdi" value="<?php echo $mahasiswaferdi->email_ferdi ?>"><br>
<input type="submit" value="Simpan">
</form> 
@endsection    