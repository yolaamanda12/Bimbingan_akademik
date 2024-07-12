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
          <h1>Edit Rombel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Rombel</li>
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
        <h3 class="card-title">Edit Rombel
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
        @foreach ($data_rombel as $rombel)
        <form action="{{ url('rombel/update/' . $rombel->id) }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
             <label for="kode">kode</label>
             <input type="text" class="form-control" id="kode" name="kode" required>
          </div>
          <div class="form-group">
             <label for="thn_masuk">Tahun Masuk</label>
             <input type="text" class="form-control" id="thn_masuk" name="thn_masuk" required>
           </div>
           <div class="form-group">
                    <label for="dosen_id">dosen</label>
                    <select id="select" name="dosen_id" class="form-control">
                      @foreach ($dosens as $dosen)
                      <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>
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
