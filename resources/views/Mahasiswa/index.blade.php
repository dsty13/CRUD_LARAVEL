
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
            <h1 class="m-0">DATA MAHASISWA</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <div class="card-tools">
            <a href="{{ route('Mahasiswa.create') }}" class="btn btn-success">Tambah Data <i class="fa fa-plus-square"></i></a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($mahasiswa as $no => $data)
              <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nrp }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->alamat }}</td>
                <td>
                  <form action="{{ route('Mahasiswa.destroy',$data->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('Mahasiswa.edit',$data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
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
