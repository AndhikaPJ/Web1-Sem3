<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/buttons.dataTables.min.css" rel="stylesheet">
    
    <title>Belajar Bootstrap</title>
  </head>

  <body class="bg-dark">
    <!--Wadah Layout Utama-->
    <div class="container">
        <!--Header With Jumbotron-->
        <div class="row bg-primary text-white mt-3 rounded">
            <nav class="navbar navbar-expand-sm navbar-light bg-info">
                <div class="container">
                    <a class="navbar-brand" href="javascript:void(0)">Aplikasi Data Mahasiswa</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Widget</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Profil</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button">Search</button>
                    </form>
                    </div>
                </div>
            </nav>
            <!--
            <div class="col py-5 text-center">
                <h1 class="display-1">Website Pertama Saya</h1>
            </div>
            -->
            
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
                        <img src="image/1.jpg" alt="Pemandangan 1" class="d-block mx-auto img-fluid">
                        <div class="carousel-caption shadow">
                            <h3>Lukisan 1</h3>
                            <p>Lukisan indah dari ananda XY dan berhasil mendapatkan Juara 1.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/2.jpg" alt="Pemandangan 1" class="d-block mx-auto img-fluid">
                        <div class="carousel-caption shadow">
                            <h3>Lukisan 1</h3>
                            <p>Lukisan indah dari ananda XY dan berhasil mendapatkan Juara 1.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/3.jpg" alt="Pemandangan 1" class="d-block mx-auto img-fluid">
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

        <!--Menu Kiri-->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 bg-secondary text-light">
                <div class="costume-class-wrapper">
                    <h1>Menu Kiri</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime obcaecati eius delectus aut iusto molestiae blanditiis voluptatem dolorem quos? Quae obcaecati magnam est sed consequuntur, eligendi quisquam recusandae! Facere, labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam non, ad a repudiandae dicta cum, eligendi ab harum, labore sequi commodi quisquam consequatur omnis optio accusantium deleniti doloribus magni? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos iure fugit explicabo repellendus quisquam perspiciatis harum et reprehenderit modi sequi accusantium fugiat error vero facilis, quos nisi minus quas eius.</p>
                </div>
            </div>

        <!--Menu Tengah -->
            <div class="col-sm-12 col-md-12 col-lg-6 bg-white">

            <!--Breadcrumbs-->
            <ul class="breadcrumb pt-3">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ul>
 
            <!--Button Group With Dropdown-->
                <p>
                <div class="btn-group">
                        <button type="button" class="btn btn-primary">Apple</button>
                        <button type="button" class="btn btn-primary">Samsung</button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Sony</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Tablet</a>
                                <a class="dropdown-item" href="#">Smartphone</a>
                            </div>
                    </div>
                </div>
                </p>

            
                <h1>Belajar Bootstrap</h1>
                <!--Alert Button With ANimasi-->
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Maaf...!</strong> Akun anda belum aktif, silahkan melengkapi <a href="#navProfile" class="alert-link">Profile.</a>
                    </div>

                <!--Progress Bar-->
                <div class="progress">
                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width:45%"></div>
                </div>
                <br>
 
                <!--Spinner Button-->
                <p>
                    <button class="btn btn-primary">
                        <span class="spinner-border spinner-border-sm"></span>
                        Loading..
                    </button>
                <br>
                </p>

                <!--Modal-->
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#myModal">
                Open Modal
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Informasi Tambahan</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati similique natus ex. Deleniti ipsa, magni sunt iusto, modi id aut, dolore esse tempore nam commodi voluptatibus? Voluptatem doloremque qui laudantium.
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                        </div>
                    </div>
                </div>

                <!--Collapse-->
                <div id="accordion" class="pb-3"> 

                    <div class="card">
                        <div class="card-header">
                        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                            Berita #1
                        </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body text-wrap">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aut recusandae nisi esse sapiente quam hic voluptatem alias sequi, ab expedita? Atque nobis eum ipsum illum placeat, quam nam iusto?
                        </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                            Berita #2
                        </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias vero nisi repellat, aliquam repudiandae totam quam iste veniam quibusdam perspiciatis nihil autem neque consequuntur excepturi accusamus provident quo tempora rerum.
                        </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                            Berita #3
                        </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis atque fugit optio vitae provident, repudiandae voluptates minus fugiat dolorum. Cum exercitationem provident at, quaerat unde sed rerum omnis veritatis eaque!
                        </div>
                        </div>
                    </div>

                </div>

                <!--Image Kartun-->
                <p><img src="image/image.jpg" class="img-thumbnail mx-auto d-block img-fluid" alt="Kartun"></p>

                <!--Btn Tambah Data-->
                <p><a href="tambah.php" type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Tambah Data Mahassiwa!">Tambah Data</a></p>

                <!--Tabel-->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-info text-center">
                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>Nama</th>
                                <th>NPM</th>
                                <th>Kelas</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Edit | Hapus</td>
                                <td>Ema</td>
                                <td>18631234</td>
                                <td>3E TI</td>
                                <td><span class="badge bg-primary">Hadir</span></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Edit | Hapus</td>
                                <td>Riyadi</td>
                                <td>18631234</td>
                                <td>3E TI</td>
                                <td><span class="badge bg-success">Izin</span></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Edit | Hapus</td>
                                <td>Ahmad</td>
                                <td>18631234</td>
                                <td>3E TI</td>
                                <td><span class="badge bg-warning">Sakit</span></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Edit | Hapus</td>
                                <td>Apri</td>
                                <td>18631234</td>
                                <td>3E TI</td>
                                <td><span class="badge bg-danger">Alpa</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                    <!--Pagination-->
                    <ul class="pagination justify-content-end" style="margin:20px 0">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                    <!--Popover-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="right" title="Belajar Popovers" data-bs-content="Belajar Popovers dengan Bootstrap.">Toggle popover</button>
                    <hr>

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
                    <!--Mencoba Datatables-->
                        <h3>Data Table</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover display" id="example2">
                                <thead class="table-info text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Action</th>
                                        <th>Nama</th>
                                        <th>NPM</th>
                                        <th>Kelas</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Edit | Hapus</td>
                                        <td>Ema</td>
                                        <td>18631234</td>
                                        <td>3E TI</td>
                                        <td><span class="badge bg-primary">Hadir</span></td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Edit | Hapus</td>
                                        <td>Riyadi</td>
                                        <td>18631235</td>
                                        <td>3E TI</td>
                                        <td><span class="badge bg-success">Izin</span></td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Edit | Hapus</td>
                                        <td>Ahmad</td>
                                        <td>18631236</td>
                                        <td>3E TI</td>
                                        <td><span class="badge bg-warning">Sakit</span></td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Edit | Hapus</td>
                                        <td>Apri</td>
                                        <td>18631237</td>
                                        <td>3E TI</td>
                                        <td><span class="badge bg-danger">Alpa</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    <hr> 

                <p><abbr title="Fungsi untuk membuat text acak">Lorem ipsum</abbr> dolor sit amet <blockquote class="blockquote">consectetur adipisicing elit</blockquote>. Magnam labore sit laborum <code>temporibus ab soluta </code>eaque, <kbd>Alt+A</kbd>quae voluptates error ut vitae. <pre>Dignissimos cumque totam ea porro aliquid perferendis, laboriosam voluptatem.</pre>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas delectus quibusdam hic nobis dolore beatae quae dicta eaque, rerum totam officiis qui similique enim, perspiciatis id harum esse aut ad.</p>
            </div>

            <!--Menu Kanan-->
            <div class="col-sm-12 col-md-12 col-lg-3 bg-secondary text-light">
                <div class="costume-class-wrapper">
                    <h1>Menu Kanan</h1>
                        <!--List Group-->
                        <div class="list-group pb-3">
                            <a href="#" class="list-group-item list-group-item-action active disabled">Kelas</a>
                            <a href="#" class="list-group-item list-group-item-action">3E Reg TI</a>
                            <a href="#" class="list-group-item list-group-item-action">3M Reg TI</a>
                        </div>

                        <!--Card Image-->
                        <div class="card" style="width:100%">
                            <img class="card-img-top mx-auto d-block img-fluid" src="image/profil.jpg" alt="Card image">
                            <div class="card-body text-dark">
                                <h4 class="card-title">MiawChihuaHua</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime obcaecati eius delectus aut iusto molestiae blanditiis voluptatem dolorem quos? Quae obcaecati magnam est sed consequuntur, eligendi quisquam recusandae! Facere, labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam non, ad a repudiandae dicta cum, eligendi ab harum, labore sequi commodi quisquam consequatur omnis optio accusantium deleniti doloribus magni? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos iure fugit explicabo repellendus quisquam perspiciatis harum et reprehenderit modi sequi accusantium fugiat error vero facilis, quos nisi minus quas eius.</p>
                    
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
                </div>
            </div>
        
        </div>

        <!--Footer-->
        <div class="row mb-3">
            <div class="col py-2 bg-info text-center text-white">
                <p>Copyright &copy; <small><mark>Andhika 2022</mark></small></p>
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
  </body>
</html>