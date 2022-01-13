<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Belajar Bootstrap</title>
  </head>

  <body class="bg-dark">
    <div class="container">
        <div class="row bg-primary text-white mt-3 rounded">
            <div class="col py-5 text-center">
                <h1 class="display-1">Website Pertama Saya</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 bg-secondary text-light">
                <div class="costume-class-wrapper">
                    <h1>Menu Kiri</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime obcaecati eius delectus aut iusto molestiae blanditiis voluptatem dolorem quos? Quae obcaecati magnam est sed consequuntur, eligendi quisquam recusandae! Facere, labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam non, ad a repudiandae dicta cum, eligendi ab harum, labore sequi commodi quisquam consequatur omnis optio accusantium deleniti doloribus magni? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos iure fugit explicabo repellendus quisquam perspiciatis harum et reprehenderit modi sequi accusantium fugiat error vero facilis, quos nisi minus quas eius.</p>
                </div>
            </div>
        
            <div class="col-sm-12 col-md-12 col-lg-6 bg-white">
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
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Maaf...!</strong> Akun anda belum aktif, silahkan melengkapi <a href="#navProfile" class="alert-link">Profile.</a>
                    </div>

                <p><img src="image/image.jpg" class="img-thumbnail mx-auto d-block img-fluid" alt="Kartun"></p>
                <p><a href="#" type="button" class="btn btn-primary">Tambah Data</a></p>
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
                                <td>Hadir</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Edit | Hapus</td>
                                <td>Riyadi</td>
                                <td>18631234</td>
                                <td>3E TI</td>
                                <td>Hadir</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Edit | Hapus</td>
                                <td>Ahmad</td>
                                <td>18631234</td>
                                <td>3E TI</td>
                                <td>Hadir</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Edit | Hapus</td>
                                <td>Apri</td>
                                <td>18631234</td>
                                <td>3E TI</td>
                                <td>Hadir</td>
                            </tr>
                        </tbody>
                    </table>
                </div>  

                <p><abbr title="Fungsi untuk membuat text acak">Lorem ipsum</abbr> dolor sit amet <blockquote class="blockquote">consectetur adipisicing elit</blockquote>. Magnam labore sit laborum <code>temporibus ab soluta </code>eaque, <kbd>Alt+A</kbd>quae voluptates error ut vitae. <pre>Dignissimos cumque totam ea porro aliquid perferendis, laboriosam voluptatem.</pre>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas delectus quibusdam hic nobis dolore beatae quae dicta eaque, rerum totam officiis qui similique enim, perspiciatis id harum esse aut ad.</p>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-3 bg-secondary text-light">
                <div class="costume-class-wrapper">
                    <h1>Menu Kanan</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime obcaecati eius delectus aut iusto molestiae blanditiis voluptatem dolorem quos? Quae obcaecati magnam est sed consequuntur, eligendi quisquam recusandae! Facere, labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam non, ad a repudiandae dicta cum, eligendi ab harum, labore sequi commodi quisquam consequatur omnis optio accusantium deleniti doloribus magni? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos iure fugit explicabo repellendus quisquam perspiciatis harum et reprehenderit modi sequi accusantium fugiat error vero facilis, quos nisi minus quas eius.</p>
                </div>
            </div>
        
        </div>

        <div class="row mb-3">
            <div class="col py-2 bg-info text-center text-white">
                <p>Copyright &copy; <small><mark>Andhika 2022</mark></small></p>
            </div>
        </div>
    </div>





    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>