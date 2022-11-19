
<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('partials.navbar')
  <!-- /.navbar -->

  <!-- Sidebar -->
  @include('partials.sidebar')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Create Data Mahasiswa</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-body">
          <form action="{{ route('Mahasiswa.store') }}" method="POST">
            @csrf
              <div class="form-group">
                <input type="text" id="nrp" name="nrp" placeholder="NRP" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control">
              </div>
              <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  <!--Footer -->
  <footer class="main-footer">
    @include('partials.footer')
  </footer>
</div>
<!-- REQUIRED SCRIPTS -->
@include('partials.script')
</body>
</html>
