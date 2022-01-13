<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata Ku</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/buttons.dataTables.min.css" rel="stylesheet">
  </head>

  <body class="bg-dark" id="home">
      <div class="container-fluid">
            <!--Header With Jumbotron-->
            <div class="row bg-light text-white mt-3 border">
                <nav class="navbar navbar-expand-sm navbar-light bg-info">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">Biodata</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#header">Header</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#widget">Widget</a>
                            </li>

                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Menu Lainnya</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#profil">Profil</a></li>
                                <li><a class="dropdown-item" href="#rightmenu">Right Menu</a></li>
                                <li><a class="dropdown-item" href="#form">Form</a></li>
                                <li><a class="dropdown-item" href="#table">Table</a></li>
                                <li><a class="dropdown-item" href="#footer">Footer</a></li>
                            </ul>
                            </li>
                        </ul>
                            
                        <form class="d-flex">
                            <input class="form-control me-2 btn-sm" type="text" placeholder="Search">
                            <button class="btn btn-primary me-2" type="button">Search</button>
                        </form>
                        
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    Notifikasi <span class="badge bg-danger">3</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item badge bg-danger" href="#">Ema Logout</a></li>
                                    <li><a class="dropdown-item badge bg-success" href="#">Apriliani Login</a></li>
                                    <li><a class="dropdown-item badge bg-success" href="#">Prima Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </nav>

            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/1.jpg" alt="Pemandangan 1" class="d-block w-100">
                        <div class="carousel-caption shadow">
                            <h3>Lukisan 1</h3>
                            <p>Lukisan indah dari ananda XY dan berhasil mendapatkan Juara 1.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/2.jpg" alt="Pemandangan 1" class="d-block w-100">
                        <div class="carousel-caption shadow">
                            <h3>Lukisan 1</h3>
                            <p>Lukisan indah dari ananda XY dan berhasil mendapatkan Juara 1.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/3.jpg" alt="Pemandangan 1" class="d-block w-100">
                        <div class="carousel-caption shadow">
                            <h3>Lukisan 1</h3>
                            <p>Lukisan indah dari ananda XY dan berhasil mendapatkan Juara 1.</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
        </div>

        <div class="container-fluid">
            <div class="row mb-3">
                <!--Pembagi 3 4 & 5-->
                <div class="col-sm-12 col-md-12 col-lg-8 themed-grid-col">
                    <div class="row">
                        <!--03 Widget-->
                        <div class="col-sm-12 col-md-12 col-lg-6 bg-light border themed-grid-col" id="widget">
                            <!--Breadcrumbs-->
                            <ul class="breadcrumb pt-3">
                                <li class="breadcrumb-item"><a href="#home">Home</a></li>
                                <li class="breadcrumb-item"><a href="#widget">Widget</a></li>
                                <li class="breadcrumb-item active">Lihat Widget</li>
                            </ul>
                            <h1 class="text-center">Widget</h1>
                                <!--Accordion Collapse Chart-->
                                <div id="accordion" class="pb-3">
                                    <div class="card mb-1">
                                        <div class="card-header">
                                            <div class="card-title btn" data-bs-toggle="collapse" href="#collapseOne">Chart Status Hubungan Keluarga</div>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <div class="chart-container">
                                                <canvas id="doughnutChart"></canvas>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Collapse-->
                                <div id="accordion" class="pb-3"> 
                                    <div class="card">
                                        <div class="card-header">
                                        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                            Visi dan Misi
                                        </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body text-wrap">
                                            Hai Teman-Teman.
                                        </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                        Visi
                                        </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <code>- Menjadi Manusia Yang Bermanfaat Untuk Diri sendiri maupun Orang Lain.</code>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                            Misi
                                        </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                        <code>- Membantu Sesama Manusia</code><br>
                                            <code>- Pemaaf</code>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            
                        </div>

                        <!--04 Profil-->
                        <div class="col-sm-12 col-md-12 col-lg-6 bg-light border themed-grid-col" id="profil">
                            <!--Breadcrumbs-->
                            <ul class="breadcrumb pt-3">
                                <li class="breadcrumb-item"><a href="#home">Home</a></li>
                                <li class="breadcrumb-item"><a href="#profil">Profil</a></li>
                                <li class="breadcrumb-item active">Lihat Profil</li>
                            </ul>
                            <h1 class="text-center">Profil</h1>
                                <!--Card Image-->
                                <div class="card" style="width:100%">
                                        <img class="card-img-top mx-auto d-block img-fluid" src="image/profil.jpg" alt="Card image">
                                        <div class="card-body text-dark">
                                            <h4 class="card-title">MiawChihuaHua</h4>
                                            <p class="card-text">Some example text.</p>
                                            <a href="#" class="btn btn-primary">See Profile</a>
                                        </div>
                                </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 bg-light border themed-grid-col">
                            <!--Form-->
                            <h3>Tambah Data Mahasiswa</h3>
                            <p>Silahkan menambahkan data pada form dibawah ini...!</p>
                            <form action="" method="$_POST" class="was-validated">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="nama" placeholder="Isi nama lengkap dengan title" name="nama" required>
                                    <label for="nama">Nama:</label>
                                    <div class="valid-feedback">Data Oke.</div>
                                    <div class="invalid-feedback">Nama wajib diisi...!</div>
                                </div>

                                <div class="mb-3 mt-3">
                                    Jenis Kelamin:
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio1" name="jk" value="Laki-Laki">
                                        <label class="form-check-label" for="radio1">Laki-Laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" name="jk" value="Perempuan">
                                        <label class="form-check-label" for="radio2">Perempuan</label>
                                    </div>
                                    
                                </div>

                                <div class="form-floating mb-3 mt-3">
                                    <textarea class="form-control" rows="3" id="alamat" name="text" placeholder="Alamat lengkap dengan RT, No, Kel, Kec" required></textarea>
                                    <label for="alamat">Alamat:</label>
                                    <div class="valid-feedback">Data Oke.</div>
                                    <div class="invalid-feedback">Alamat wajib diisi...!</div>
                                </div>

                                <div class="form-floating">
                                    <select class="form-select" id="kabkota" name="kabkota" required>
                                        <option value="">-- Kabupaten/Kota --</option>
                                        <option value="Banjarmasin">Banjarmasin</option>
                                        <option value="Banjarbaru">Banjarbaru</option>
                                        <option value="Banjar">Banjar</option>
                                    </select>
                                    <label for="kabkota">Kabupaten/Kota:</label>
                                    <div class="valid-feedback">Data Oke.</div>
                                    <div class="invalid-feedback">Kabupaten/Kota wajib diisi...!</div>
                                </div>

                                <div class="mb-3 mt-3">
                                    Hobi:
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="check1" name="hobi" value="Ngoding">
                                        <label class="form-check-label" for="check1">Ngoding</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="check2" name="hobi" value="Animasi">
                                        <label class="form-check-label" for="check2">Animasi</label>
                                    </div>
                                    

                                </div>

                                <div class="mb-3 mt-3">
                                    
                                </div>

                                <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
                            </form>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 bg-light border themed-grid-col" id="table">
                            <!--Mencoba Datatables-->
                            <h3>Data Keluarga</h3>
                            
                            <!--Modal-->
                            <!-- Button to Open the Modal Tambah Data-->
                            <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#myModal" title="Tambah Data Mahassiwa!">
                            Tambah Data
                            </button>

                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Data Mahasiswa Keluarga</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="" method="$_POST" class="was-validated">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" id="nama" placeholder="Isi nama lengkap dengan title" name="nama" required>
                                                <label for="nama">Nama:</label>
                                                <div class="valid-feedback">Data Oke.</div>
                                                <div class="invalid-feedback">Nama wajib diisi...!</div>
                                            </div>

                                            <div class="mb-3 mt-3">
                                                Jenis Kelamin:
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="rd1" name="jk" value="Laki-Laki">
                                                    <label class="form-check-label" for="rd1">Laki-Laki</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="rd2" name="jk" value="Perempuan">
                                                    <label class="form-check-label" for="rd2">Perempuan</label>
                                                </div>
                                                
                                            </div>

                                            <div class="form-floating mb-3 mt-3">
                                                <textarea class="form-control" rows="3" id="alamat" name="text" placeholder="Alamat lengkap dengan RT, No, Kel, Kec" required></textarea>
                                                <label for="alamat">Alamat:</label>
                                                <div class="valid-feedback">Data Oke.</div>
                                                <div class="invalid-feedback">Alamat wajib diisi...!</div>
                                            </div>

                                            <div class="form-floating">
                                                <select class="form-select" id="kabkota" name="kabkota" required>
                                                    <option value="">-- Kabupaten/Kota --</option>
                                                    <option value="Banjarmasin">Banjarmasin</option>
                                                    <option value="Banjarbaru">Banjarbaru</option>
                                                    <option value="Banjar">Banjar</option>
                                                </select>
                                                <label for="kabkota">Kabupaten/Kota:</label>
                                                <div class="valid-feedback">Data Oke.</div>
                                                <div class="invalid-feedback">Kabupaten/Kota wajib diisi...!</div>
                                            </div>

                                            <div class="mb-3 mt-3">
                                                Status Hidup:
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="ck1" name="hobi" value="Nikah">
                                                    <label class="form-check-label" for="ck1">Nikah</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="ck2" name="hobi" value="Jomblo">
                                                    <label class="form-check-label" for="ck2">Jomblo</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="ck3" name="hobi" value="Galau">
                                                    <label class="form-check-label" for="ck3">Galau</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                                    </div>

                                    </div>
                                </div>
                            </div>
                            <!--Alert-->
                            <div class="alert alert-warning alert-dismissible fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>Peringatan!</strong> Harap diperiksa data yang akan dimasukkan ke system.
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover display" id="example2">
                                    <thead class="table-info text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Action</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Kabupaten/Kota</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">
                                                <a href="#table" type="button" class="btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit Data Mahassiwa!">Edit</a> | 
                                                <a href="#table" type="button" class="btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Hapus Data Mahassiwa!">Hapus</a>
                                            <td>Ema Apriliani</td>
                                            <td>Perempuan</td>
                                            <td>Garden Mawar City</td>
                                            <td>Banjarmasin</td>
                                            <td><span class="badge bg-success">Nikah</span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">                                                
                                                <a href="#table" type="button" class="btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit Data Mahassiwa!">Edit</a> | 
                                                <a href="#table" type="button" class="btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Hapus Data Mahassiwa!">Hapus</a>
                                            </td>
                                            <td>Muhammad Alwi</td>
                                            <td>Laki-Laki</td>
                                            <td>Garden Mawar City</td>
                                            <td>Banjarmasin</td>
                                            <td><span class="badge bg-info">Jomblo</span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">
                                                <a href="#table" type="button" class="btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit Data Mahassiwa!">Edit</a> | 
                                                <a href="#table" type="button" class="btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Hapus Data Mahassiwa!">Hapus</a>
                                            </td>
                                            <td>Akhmad Fauzan</td>
                                            <td>Laki-Laki</td>
                                            <td>Garden Mawar City</td>
                                            <td>Banjarmasin</td>
                                            <td><span class="badge bg-danger">Galau</span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">
                                                <a href="#table" type="button" class="btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit Data Mahassiwa!">Edit</a> | 
                                                <a href="#table" type="button" class="btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Hapus Data Mahassiwa!">Hapus</a>                                                
                                            </td>
                                            <td>Ersandy Saputra</td>
                                            <td>Laki-Laki</td>
                                            <td>Garden Mawar City</td>
                                            <td>Banjarmasin</td>
                                            <td><span class="badge bg-info">Jomblo</span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">
                                                <a href="#table" type="button" class="btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit Data Mahassiwa!">Edit</a> | 
                                                <a href="#table" type="button" class="btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Hapus Data Mahassiwa!">Hapus</a>                                                
                                            </td>
                                            <td>Muhammad Taufiq</td>
                                            <td>Laki-Laki</td>
                                            <td>Garden Mawar City</td>
                                            <td>Banjarmasin</td>
                                            <td><span class="badge bg-info">Jomblo</span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">
                                                <a href="#table" type="button" class="btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Edit Data Mahassiwa!">Edit</a> | 
                                                <a href="#table" type="button" class="btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Hapus Data Mahassiwa!">Hapus</a>                                                
                                            </td>
                                            <td>Joko Susanto</td>
                                            <td>Laki-Laki</td>
                                            <td>Garden Mawar City</td>
                                            <td>Banjarmasin</td>
                                            <td><span class="badge bg-success">Nikah</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Pembagi 05-->
                <div class="col-sm-12 col-md-12 col-lg-4 themed-grid-col border bg-light" id="rightmenu">
                    <!--Breadcrumbs-->
                    <ul class="breadcrumb pt-3">
                                <li class="breadcrumb-item"><a href="#home">Home</a></li>
                                <li class="breadcrumb-item"><a href="#rightmenu">Right Menu</a></li>
                                <li class="breadcrumb-item active">Lihat Daftar Menu</li>
                            </ul>
                    <h1 class="text-center">Right Menu</h1>
                        <!--List Group-->
                        <div class="list-group pb-3">
                                <a href="#rightmenu" class="list-group-item list-group-item-action active disabled">Pendidikan Formal</a>
                                <a href="#rightmenu" class="list-group-item list-group-item-action">SDN</a>
                                <a href="#rightmenu" class="list-group-item list-group-item-action">SMP</a>
                                <a href="#rightmenu" class="list-group-item list-group-item-action">SMK</a>
                        </div>

                        <!--Toast-->
                        <div class="toast show text-dark">
                            <div class="toast-header">
                                Toast Header
                                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                            </div>

                            <div class="toast-body">
                                Some text inside the toast body
                            </div>
                        </div>

                        <!-- Nav tabs (Toggleable / Dynamic Tabs) -->
                        <ul class="nav nav-tabs mt-3">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home1">Favorite</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu1">Paling Sering Dicari</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu2">Trending</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane container active" id="home1">
                                <code>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus delectus est reiciendis. Voluptate nihil et earum quos, mollitia praesentium nisi expedita quisquam excepturi aspernatur autem quia nulla culpa est natus?
                                </code>
                            </div>

                            <div class="tab-pane container fade" id="menu1">
                                <code>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eum consequuntur corrupti error, fuga rerum voluptatem alias minima impedit, eligendi quaerat quibusdam repellendus fugiat ea unde eos harum ipsum itaque.
                                </code>
                            </div>

                            <div class="tab-pane container fade" id="menu2">
                                <code>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque in aliquam eligendi vero? Possimus iure praesentium eius voluptatibus magni, beatae architecto quam nesciunt aut nihil modi sapiente asperiores exercitationem dicta?
                                </code>
                            </div>
                        </div>
                        <hr>

                        <!--Card Image-->
                        <div class="card mt-3" style="width:100%">
                            <img class="card-img-top mx-auto d-block img-fluid" src="image/image.jpg" alt="Card image">
                            <div class="card-body text-dark">
                                <h4 class="card-title">MiawChihuaHua</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>

                </div>

                <!--08 Footer-->
                <div class="col py-2 bg-primary text-center text-white" id="footer">
                    <p>Copyright &copy; <small><mark>Andhika</mark> 2022</small></p>
                </div>
            </div>
        </div>

        <!--Script-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            /*Script Tooltip*/
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })

            /*Script Popovers*/
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
            })

            /*Script Toast*/
            document.getElementById("toastbtn").onclick = function() {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl)
            })
            toastList.forEach(toast => toast.show())
            }
        </script>

        <script src="js/jquery-3.5.1.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.buttons.min.js"></script>
        <script src="js/jszip.min.js"></script>
        <script src="js/pdfmake.min.js"></script>
        <script src="js/vfs_fonts.js"></script>
        <script src="js/buttons.html5.min.js"></script>
        <script src="js/buttons.print.min.js"></script>
        <script src="js/chart.min.js"></script>
        <!--Data Tables Sort Data-->
        <script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    "order": [[ 3, "desc" ]]
                } );
            } );
        </script>

        <!--Data Tables File Export-->
        <script>
            $(document).ready(function() {
                $('#example2').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
        </script>

        <script>
            doughnutChart = document.getElementById('doughnutChart').getContext('2d');
                var myDoughnutChart = new Chart(doughnutChart, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [1, 2, 3],
                        backgroundColor: ['#f3545d','#00b300','#1d7af3']
                    }],

                    labels: [
                    'Galau',
                    'Nikah',
                    'Jomblo'
                    ]
                },
                options: {
                    responsive: true, 
                    maintainAspectRatio: false,
                    legend : {
                        position: 'bottom'
                    },
                    layout: {
                        padding: {
                            left: 20,
                            right: 20,
                            top: 20,
                            bottom: 20
                        }
                    }
                }
                });
        </script>

    </body>
</html>