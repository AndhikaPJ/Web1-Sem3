<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>


  <body class="bg-dark">
    <div class="container-fluid">
        <div class="row bg-primary text-white">
            <div class="col-sm-12 col-md-12 col-lg-12 py-5 border text-center"> <!--1 Navbar-->
                <h1>1 Navbar</h1>
            </div>
        </div>

        <div class="row bg-primary text-white mt-4 p-5 rounded">
            <div class="col-sm-12 col-md-12 col-lg-12 py-5 border text-center"> <!--2 Header-->
                <h1 class="display-1">2 Website Pertama Saya</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5 bg-secondary text-light"> <!--3-->
                <h1>Widget</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque neque elit, ultrices sit amet viverra vitae, cursus vel massa. Sed lacus ante, tincidunt in tincidunt quis, imperdiet et dui. Proin non velit et eros porta porta. Morbi sagittis aliquet libero, auctor maximus metus tincidunt ac. Mauris scelerisque egestas quam id finibus. Nunc at justo dolor. Fusce turpis libero, fermentum ac sapien vel, vestibulum ullamcorper erat. Suspendisse potenti. Curabitur ac justo vehicula, aliquam purus ac, tristique turpis. Donec dui mauris, cursus at nulla eu, auctor congue orci. Cras porta vel nibh tempus ultricies. Maecenas orci eros, egestas vel rhoncus efficitur, rhoncus eget ex. Fusce ultrices vehicula magna. Donec eget lacus vitae lacus luctus finibus. Maecenas fringilla blandit ullamcorper. Fusce sodales imperdiet nunc vitae posuere.</p>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4  bg-white"> <!--4-->
                <h1>Belajar Bootstrap</h1>
                
                <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success!</strong> This alert box could indicate a successful or positive action. <a href="#" class="alert-link">Profil</a>.
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque neque elit, ultrices sit amet viverra vitae, cursus vel massa. Sed lacus ante, tincidunt in tincidunt quis, imperdiet et dui. Proin non velit et eros porta porta. Morbi sagittis aliquet libero, auctor maximus metus tincidunt ac. Mauris scelerisque egestas quam id finibus. Nunc at justo dolor.</p>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-3 bg-secondary text-light float-end"> <!--5-->
                <h1>Right Kanan</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque neque elit, ultrices sit amet viverra vitae, cursus vel massa. Sed lacus ante, tincidunt in tincidunt quis, imperdiet et dui. Proin non velit et eros porta porta. Morbi sagittis aliquet libero, auctor maximus metus tincidunt ac. Mauris scelerisque egestas quam id finibus. Nunc at justo dolor. Fusce turpis libero, fermentum ac sapien vel, vestibulum ullamcorper erat. Suspendisse potenti. Curabitur ac justo vehicula, aliquam purus ac, tristique turpis. Donec dui mauris, cursus at nulla eu, auctor congue orci. Cras porta vel nibh tempus ultricies. Maecenas orci eros, egestas vel rhoncus efficitur, rhoncus eget ex. Fusce ultrices vehicula magna. Donec eget lacus vitae lacus luctus finibus. Maecenas fringilla blandit ullamcorper. Fusce sodales imperdiet nunc vitae posuere.</p>
            </div>
        
            <div class="col-sm-12 col-md-12 col-lg-9 bg-secondary border text-center text-white"> <!--6-->
                <p>Form</p>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-9 bg-white border text-center"> <!--7-->
            <div class="costume-class-wrapper">
            <p>You can use any of the contextual classes to only add a color to the table header:</p>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Action</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Tracking</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Edit | Hapus</td>
                        <td>John</td>
                        <td>18631234</td>
                        <td>3E TI</td>
                        <td>Izin</td>
                        <td>Acc</td>
                        <td>Invalid</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Edit | Hapus</td>
                        <td>Mary</td>
                        <td>18631234</td>
                        <td>3E TI</td>
                        <td>Masuk</td>
                        <td>Acc</td>
                        <td>Invalid</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Edit | Hapus</td>
                        <td>July</td>
                        <td>18631234</td>
                        <td>3E TI</td>
                        <td>Alpa</td>
                        <td>Acc</td>
                        <td>Invalid</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Edit | Hapus</td>
                        <td>Mei</td>
                        <td>18631234</td>
                        <td>3E TI</td>
                        <td>Masuk</td>
                        <td>Acc</td>
                        <td>Invalid</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Edit | Hapus</td>
                        <td>Januari</td>
                        <td>18631234</td>
                        <td>3E TI</td>
                        <td>Masuk</td>
                        <td>Acc</td>
                        <td>Invalid</td>
                    </tr>

                    </tbody>
                </table>
                <ul class="pagination justify-content-end" style="margin:20px 0">
                <li class="page-item">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </li>
                </ul>
            </div>
            </div>

            </div>
        </div>

        <div class="row">
            <div class="col py-2 bg-primary text-center text-white"> <!--8-->
                <p>Copyright &copy; <mark>Hika </mark>2021</p>
            </div>
        </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>