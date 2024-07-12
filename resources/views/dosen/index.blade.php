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
          <h1>Dashboard Dosen</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard Dosen</li>
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
        <h3 class="card-title">Dosen</h3>
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
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Prodi</th>
                  <th>Action</th>

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
                  <td>{{ $dosen->nama_prodi }}</td>
                <td>
                  <a href="{{ url('dosen/edit/' . $dosen->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ url('dosen/delete/' . $dosen->id) }}" class="btn btn-danger" onclick="return confirm('Hapus dosen {{ $dosen->nama }}')">Hapus</a>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <div class="btn-group-vertical">
          <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#inputModal">Tambah</button>
          <!-- Modal -->
        <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="inputModalLabel">Tambah Prodi</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body">
                <form action="{{ url('dosen/store') }}" method="POST">
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
                  <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.modal -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer -->
@include('layouts.footer')
<!-- /.footer -->
