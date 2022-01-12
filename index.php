<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>TUGAS UAS WEB 1</title>
  </head>


  <body class="bg-dark">
    <div class="container mt-3">
        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="javascript:void(0)">Aplikasi Data Mahasiswa</a> <!--1 Navbar-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Biodata</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Form Data</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Table Data</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
                </div>
            </div>
        </nav>
        <div class="row bg-primary text-white mt-4 rounded">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-4 p-5 border text-center"> <!--2 Header => Jumbotron dan Corousel-->
                <h1 class="display-1">Biodata Saya</h1>


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
                    <img src="image/1.jpg" alt="Kiram" class="d-block w-100 img" width="40%">
                    <div class="carousel-caption">
                        <h3>Kiram Park</h3>
                        <p>Pemandangan yang indah</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/2.png" alt="Kearajaan" class="d-block w-100 img" width="40%">
                    <div class="carousel-caption">
                        <h3>Masa Kerajaan</h3>
                        <p>Konstantinopel</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/3.jpg" alt="UNISKA" class="d-block w-100 img" width="40%">
                    <div class="carousel-caption">
                        <h3>UNISKA MAB</h3>
                        <p>Kampus Ku Gaes!</p>
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

        
        <!--Kiri-->
        <div class="row mt-1">
            <div class="col-sm-12 col-md-12 col-lg-5 bg-success text-center text-white"> 
                <h1>3. WIDGET</h1>
                <p>TEST</p>
            
                <div class="col-sm-12 col-md-12 col-lg-12 bg-success text-white"> 
                    <h1>6. FORM</h1>
                    <p>TEST</p>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 bg-success text-white"> 
                    <h1>7. TABLE</h1>
                    <p>TEST</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 bg-success text-center text-white"> 
                <h1>4. PROFIL</h1>
                <p>TEST</p>
            </div>


            <!--Menu Nomer 5-->
            <div class="col-sm-12 col-md-12 col-lg-3 bg-success text-center text-white"> 
                <h1>5. RIGHT MENU</h1>
                <p>TEST</p>
                <p>TEST</p>
                <p>TEST</p>
            
                <p>TEST</p>
            
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 py-2 bg-primary text-center text-white"> <!--8-->
                <p>Copyright &copy; <mark>Hika </mark>2021</p>
            </div>
        </div>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>