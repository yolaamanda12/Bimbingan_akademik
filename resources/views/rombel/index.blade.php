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
          <h1>Dashboard Rombel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard Rombel</li>
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
        <h3 class="card-title">Rombel</h3>
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
                  <th>Kode</th>
                  <th>Tahun Masuk</th>
                  <th>Dosen</th>
                  <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_rombel as $rombel)
              <tr>
                <td>{{ $loop->iteration }}</td>
                  <td>{{ $rombel->kode }}</td>
                  <td>{{ $rombel->thn_masuk }}</td>
                  <td>{{ $rombel->nama_dosen }}</td>
                  <td>
                  <a href="{{ url('rombel/edit/' . $rombel->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ url('rombel/delete/' . $rombel->id) }}" class="btn btn-danger" onclick="return confirm('Hapus rombel {{ $rombel->kode }}?')">Hapus</a>
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
                      <h5 class="modal-title" id="inputModalLabel">Tambah Rombel</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body">
                <form action="{{ url('rombel/store') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" required>
                  </div>
                  <div class="form-group">
                    <label for="thn_masuk">Tahun Masuk</label>
                    <input type="text" class="form-control" id="thn_masuk" name="thn_masuk" required>
                  </div>
                  <div class="form-group">
                    <label for="dosen_id">Dosen</label>
                    <select id="dosen_id" name="dosen_id" class="form-control">
                      @foreach ($dosens as $dosen)
                      <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>
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
