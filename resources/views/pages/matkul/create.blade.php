@extends('layouts.admin')
@section('title', 'Create SIA-UNIV')
    
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Create Mata Kuliah</h1>
      </div>

      <div class="section-body">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('matkul-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="kd_mkul">
                            Kode Matkul
                        </label>
                        <input 
                            name="kd_mkul" 
                            type="text" 
                            class="form-control" 
                            id="kd_mkul" 
                            maxlength="5" 
                            placeholder="Masukan Kode Matkul"
                        >
                    </div>

                    <div class="form-group">
                        <label for="nama_mkul">
                            Nama Mata Kuliah
                        </label>
                        <input 
                            name="nama_mkul" 
                            type="text" 
                            class="form-control" 
                            id="nama_mkul" 
                            placeholder="Masukan Nama Mata Kuliah"
                            >
                    </div>

                    <div class="form-group">
                        <label for="kd_dosen">
                            Kode Dosen
                        </label>
                        <input 
                            name="kd_dosen" 
                            type="text" 
                            class="form-control" 
                            id="kd_dosen" 
                            maxlength="5" 
                            placeholder="Masukan Kode Dosen"
                        >
                    </div>

                      <div class="form-group">
                        <label for="jam">
                            Waktu
                        </label>
                        <input 
                            name="jam" 
                            type="time" 
                            class="form-control" 
                            id="jam" 
                            placeholder="Masukan Jam"
                        >
                      </div>

                      <div class="form-group">
                        <label for="ruang_kelas">
                            Ruang Kelas
                        </label>
                        <input 
                            name="ruang_kelas" 
                            type="text" 
                            maxlength="7"
                            class="form-control" 
                            id="ruang_kelas" 
                            placeholder="Masukan Ruang Kelas"
                        >
                      </div>

                      <div class="form-group">
                        <label for="jumlah_mhs">
                            Jumlah Mahasiswa
                        </label>
                        <input 
                            name="jumlah_mhs" 
                            type="text" 
                            class="form-control"   
                            id="jumlah_mhs" 
                            placeholder="Masukan Jumlah Mahasiswa"
                        >
                      </div>

                      <div class="form-group">
                        <label for="tanggal_mulai">
                            Tanggal Mulai
                        </label>
                        <input 
                            name="tanggal_mulai" 
                            type="date" 
                            class="form-control" 
                            id="tanggal_mulai" 
                            placeholder="Masukan Tanggal Mulai"
                        >
                      </div>

                      <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
      </div>

    
@endsection