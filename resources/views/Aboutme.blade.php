
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
            <h1 class="m-0">About Me</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
          <img src="{{ asset('img/desti.jpg') }}" width="200" class="img-circle" alt="Desti Image">
          <h5 class="display-4">Desti Fitrotun Nisa</h5>
          <p class="lead">Teknik Informatika</p>
        </div>
      </div>
      <div class="card text-justify">
        <div class="card-body">
          <h5 class="card-title">Background</h5>
          <p class="card-text">Nama saya Desti Fitrotun Nisa, 
            Saya lahir di Bangkalan pada Tanggal 13 Desember 2003. Saya anak Terakhir dari 4 bersaudara. 
            Saya sekarang tinggal di Dusun Jatrebung, kecamatan Tanjungbumi, kabupaten Bangkalan.
            Disini saya akan menceritakan diri saya dari sejak sekolah dasar sampai menjadi mahasiswa di Universitas Trunojoyo Madura. <br>
            Saya sekolah dasar di SDN Tanjungbumi 1 yang mana dapat ditempuh dalam 3 menit dengan berjalan kaki. Kemudian saya melanjutkan pendidikan sekolah Menengah pertama di Mts Saiful Ulum Tanjungbumi. 
            Dan setelah itu saya melanjutkan pendidikan di SMAN 1 Tanjungbumi. Setelah 12 tahun menempuh pendidikan saya melanjutkan untuk Berkuliah di salah satu kampus yang ada di Madura yaitu Universitas Trunojoyo Madura. 
            <br>Saya memang ingin melanjutkan pendidikan didunia perkuliahan tapi tidak di prodi Teknik informatika melainkan saya ingin mengambil salah satu prodi yang ada pada fakultas Ilmu Pendidikan yaitu PGSD namun sayangnya saat pengumuman SNMPTN saya tidak mendapatkan kata selamat dari pihak LTMPT.
            Akhirnya saya harus berjuang di SBMPTN disinilah saya kesulitan mengambil prodi apa karena sesuai dengan jurusan yang saya ambil di bangku SMA saya merupakan anak IPA sedangkan PGSD termasuk ke dalam Soshum, jika saya memaksakan linjur saya takut kejadian saat SNMPTN terulang apalagi saya tidak ada persiapan apapun untuk UTBK.
            Disinilah akhirnya saya memutuskan melepaskan PGSD dan mencari prodi di jurusan SAINTEK dimana pilihan pertama saya Teknik Informatika dan pilihan kedua saya Pendidikan IPA. 
            Dan saat pengumuman SBMPTN Alhamdulillah saya mendapat kata SELAMAT dari pihak LTMPT karena keterima di pilihan pertama Teknik Informatika di Universitas Trunojoyo Madura. 
            Jadi disinilah saya sekarang menuliskan kisah saya bagaimana bisa di Teknik Informatika dikarenakan adanya tugas praktikum PAW.
           </p>
        </div>
        <div class="card-body">
          <h5 class="card-title">Suka Duka Praktikum PAW</h5>
          <p class="card-text">Selama Praktikum PAW banyak suka duka yang udah di lewati meskipun bagi saya sendiri banyak dukanya.
            Tapi Untuk awal-awal praktikum masih syukur Alhamdulillah tidak terlalu memberatkan
            karena masih bisa memahami namun jika sudah menuju akhir tugas-tugas yang diberikan cukup amat sangat membingungkan apalagi jika sudah bertemu dengan error.
            Meskipun memang tidak dapat dihindari jika Coding sangat erat kaitannya dengan per-ERROR-an namun tidak apa selagi errornya masih bisa diketahui dan diperbaiki tidak ada masalah,
            yang jadi permasalahan saya jika errornya saja saya tidak paham letaknya dimana dan ini baru saja kejadian saat saya mengerjakan tugas praktikum PAW yang ini sudah cukup lelah saya berkutat dengan per-Error-an yang tak kunjung selesai.
            sedangkan untuk suka nya hanya satu saat Modul ini adalah modul praktikum PAW yang terakhir setidaknya beban saya berkurang satu meskipun beban yang lainnya masih cukup banyak tapi tidak apa-apa tetap semangat demi bisa segera lulus dan menyandang gelar S.Kom nantinya.
          </p>
        </div>
        <div class="card-body">
          <h5 class="card-title">Kritik Dan Saran</h5>
          <p class="card-text">Sebelumnya Terimakasih kepada kakak-kakak Asprak sudah membimbing para Praktikan,tapi dimohon nantinya saat menjelaskan jangan terlalu cepat 
            dikarenakan saat saya ingin mengikuti codingannya saya sering ketinggalan dan saran saya hasil coding yang dipraktikkan nantinya bisa di share
            kepada para praktikan agar nantinya dapat dijadikan referensi atau bisa dikembangkan lagi. <br> Sekian dari saya dan Terimakasih.
          </p>
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
