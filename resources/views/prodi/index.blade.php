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
            <h1>Dashboard Prodi</h1>
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
          <h3 class="card-title">Prodi</h3>

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
                  <th>Nama Prodi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_prodi as $prodi)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $prodi->kode }}</td>
                  <td>{{ $prodi->nama }}</td>
                  <td>
                    <a href="{{url('prodi/edit/'. $prodi->id)}}"><button class="btn btn-warning">Edit</button></a> 
                    <a href="{{url('prodi/delete/'. $prodi->id)}}">
                    <button class="btn btn-danger" onclick="return confirm('Hapus Prodi {{ $prodi->nama }}')">Hapus</button></a></td>
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
                      <form action="{{url('prodi/store')}}" method="POST">
                          {{csrf_field()}}
                        <div class="form-group">
                          <label for="nama">Kode</label>
                          <input type="text" class="form-control" id="kode" name="kode" required>
                      </div>
                      <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="nama" name="nama" required>
                      </div>
                      <div class="form-group">
                          <br>
                          <button type="submit" class="btn btn-primary btn-block" style="box-shadow: 0 8px 15px rgba(247, 147, 29, 0.4);">Simpan</button>
                      </form>
                  </div>
                  <br>
              </div>
              <br>
          </div>
          
      </div>
      <br>
        </div>
        <br>
        <!-- /.card-body -->
        <div class="card-footer">
        
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
