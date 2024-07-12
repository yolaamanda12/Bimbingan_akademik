<!-- Navbar -->
@include('layouts.header')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('layouts.sidebar')
<!-- /.sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Dosen</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Dosen</li>
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
        <h3 class="card-title">Edit Dosen</h3>

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
        <!-- Content -->
        @foreach ($data_dosen as $dosen)
        <form action="{{ url('dosen/update/' . $dosen->id) }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
             <label for="nama">Nama</label>
             <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="form-group">
             <label for="tmp_lahir">Tempat Lahir</label>
             <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
          </div>
          <div class="form-group">
             <label for="tgl_lahir">Tanggal Lahir</label>
             <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
          </div>
          <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <input type="text" class="form-control" id="jk" name="jk" required>
           </div>
           <div class="form-group">
                    <label for="prodi_id">Prodi</label>
                    <select id="select" name="prodi_id" class="form-control">
                      @foreach ($prodis as $prodi)
                      <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                      @endforeach
                    </select>
                  </div>
          <button type="submit" class="btn btn-primary btn-block" style="box-shadow: 0 8px 15px rgba(247, 147, 29, 0.4);">Save</button>
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

<!-- Footer -->
@include('layouts.footer')
<!-- /.footer -->
