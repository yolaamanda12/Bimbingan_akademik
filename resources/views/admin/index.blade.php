
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
            <h1>Dashboard</h1>
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
          <h3 class="card-title">Admin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <table class="table table-bordered text-center">
  <thead>
    <tr>
      <th colspan="5"><h2>Biodata</h2></th>
    </tr>
    <tr>
      <th><h4>NAMA</h4></th>
      <th><h4>UMUR</h4></th>
      <th><h4>EMAIL</h4></th>
      <th><h4>NIM</h4></th>
      <th><h4>ALAMAT</h4></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><h4>{{$nama}}</h4></td>
      <td><h4>{{$umur}}</h4></td>
      <td><h4>{{$email}}</h4></td>
      <td><h4>{{$nim}}</h4></td>
      <td><h4>{{$alamat}}</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>Rina Harahap</h4></td>
      <td><h4>20</h4></td>
      <td><h4>rina@gmail.com</h4></td>
      <td><h4>0110123122</h4></td>
      <td><h4>Depok</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>Aulia Maharani</h4></td>
      <td><h4>20</h4></td>
      <td><h4>aul@gmail.com</h4></td>
      <td><h4>0110123148</h4></td>
      <td><h4>Bogor</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>Hadaina Hayati</h4></td>
      <td><h4>19</h4></td>
      <td><h4>hayati@gmail.com</h4></td>
      <td><h4>0110123117</h4></td>
      <td><h4>Bogor</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>Monica Azzahra</h4></td>
      <td><h4>19</h4></td>
      <td><h4>monic4@gmail.com</h4></td>
      <td><h4>0110123105</h4></td>
      <td><h4>Citayam</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>Amanda Aprilia</h4></td>
      <td><h4>19</h4></td>
      <td><h4>manduy@gmail.com</h4></td>
      <td><h4>0110123092</h4></td>
      <td><h4>Bojong gede</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>Syarifani Fauziah</h4></td>
      <td><h4>19</h4></td>
      <td><h4>fani@gmail.com</h4></td>
      <td><h4>0110123288</h4></td>
      <td><h4>Kelapa dua</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>Iren Anastasyah</h4></td>
      <td><h4>19</h4></td>
      <td><h4>ayrin@gmail.com</h4></td>
      <td><h4>0110123276</h4></td>
      <td><h4>Jakarta</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>Annisa Safitri</h4></td>
      <td><h4>19</h4></td>
      <td><h4>nisaaa@gmail.com</h4></td>
      <td><h4>0110123111</h4></td>
      <td><h4>Kelapa dua</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>Yola Amanda</h4></td>
      <td><h4>20</h4></td>
      <td><h4>yoyola@gmail.com</h4></td>
      <td><h4>0110123133</h4></td>
      <td><h4>Pondok Cina</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>Susi Yanti</h4></td>
      <td><h4>20</h4></td>
      <td><h4>ssynt@gmail.com</h4></td>
      <td><h4>0110123144</h4></td>
      <td><h4>Pondok Cina</h4></td>
    </tr>
  </tbody>
</table>
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
  {{-- tutup footer --}}


 