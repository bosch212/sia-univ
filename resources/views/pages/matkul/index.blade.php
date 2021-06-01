@extends('layouts.admin')
@section('title', 'List Mata Kuliah SIA-UNIV')
    
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>List Mata Kuliah</h1>
      </div>

      <div class="section-body">
          <div class="card">
              <div class="card-body">
                <table class="table table-bordered data-table table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">KD-MKUL</th>
                            <th class="text-center">NAMA MKUL</th>
                            <th class="text-center">KD-DOSEN</th>
                            <th class="text-center">JAM</th>
                            <th class="text-center">RUANG KELAS</th>
                            <th class="text-center">JUMLAH MHS</th>
                            <th class="text-center">TANGGAL MULAI</th>
                            <th class="text-center">AKSI</th>
                        </tr>
                    </thead>

                    @foreach ($data_matkul as $matkul)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $matkul->kd_mkul }}</td>
                            <td>{{ $matkul->nama_mkul }}</td>
                            <td>{{ $matkul->kd_dosen }}</td>
                            <td>{{ $matkul->jam }}</td>
                            <td>{{ $matkul->ruang_kelas }}</td>
                            <td>{{ $matkul->jumlah_mhs }}</td>
                            <td>{{ $matkul->tanggal_mulai }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('matkul-edit', $matkul->id) }}" class="btn btn-success btn-icon mr-2"><i class="fas fa-edit"></i></a>
    
                                    <form action="{{ route('matkul-delete', $matkul->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-icon" onclick="return confirm('Anda Yakin Ingin Menghapus?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    
                </table>
              </div>
          </div>
      </div>
    </section>
</div>
@endsection