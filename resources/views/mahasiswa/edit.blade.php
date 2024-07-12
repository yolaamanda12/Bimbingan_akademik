Mahasiswa edit.blade.php

<!-- Navbar -->
@include('layouts.header');
<!-- /.navbar -->
<!-- Main Sidebar Container -->
@include('layouts.sidebar');
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Mahasiswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">mahasiswa</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        @foreach($data_mahasiswa as $mahasiswa)
        <form action="{{url('mahasiswa/update/'.$mahasiswa->id)}}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="nim">NIM Mahasiswa </label>
            <input type="text" class="form-control" value="{{ $mahasiswa->nim }}" id="nim" name="nim" required>
          </div>
          <div class="form-group">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" class="form-control" value="{{ $mahasiswa->nama }}" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="tmp_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" value="{{ $mahasiswa->tmp_lahir }}" id="tmp_lahir" name="tmp_lahir" required>
          </div>
          <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" value="{{ $mahasiswa->tgl_lahir }}" id="tgl_lahir" name="tgl_lahir" required>
          </div>
          <div class="form-group">
            <label for="ipk">IPK Mahasiswa</label>
            <input type="text" class="form-control" value="{{ $mahasiswa->ipk }}" id="ipk" name="ipk" required>
          </div>
          <div class="form-group">
            <label for="prodi_id">Prodi</label>
            <select id="select" name="prodi_id" class="form-control">
              @foreach ($prodis as $prodi)
              <option value="{{$prodi->id}}">{{$prodi->nama}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="rombel_id">Rombel</label>
            <select id="select" name="rombel_id" class="form-control">
              @foreach ($rombels as $rombel)
              <option value="{{$rombel->id}}">{{$rombel->kode}}</option>
              @endforeach
            </select>
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-block" style="box-shadow: 0 8px 15px rgba(247, 147, 29, 0.4);">Simpan</button>
        </form>
        @endforeach
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
{{-- footer --}}
@include('layouts.footer');
{{-- tutup footer --}}
