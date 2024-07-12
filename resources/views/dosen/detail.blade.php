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
            <h1>Dashboard Dosen</h1>
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
          <h3 class="card-title">Detail Dosen</h3>

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
          <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>tmp_lahir</th>
                  <th>tgl_lahir</th>
                  <th>jk</th>
                  <th>prodi_id</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_dosen as $dosen)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $dosen->nama }}</td>
                  <td>{{ $dosen->tmp_lahir }}</td>
                  <td>{{ $dosen->tgl_lahir }}</td>
                  <td>{{ $dosen->jk }}</td>
                  <td>{{ $dosen->prodi_id }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
