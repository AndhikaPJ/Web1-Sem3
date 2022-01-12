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


  <body class="bg-light">
      <div class="container-fluid">
      <div class="row mt-3 bg-primary text-white">
            <div class="col py-5 text-center">
                <h1 class="display-1">Website Pertama Saya</h1>
            </div>
        </div>
      </div>
    <div class="container-fluid">
        <div class="row mb-3"> <!-- dibikin wrapper dulu biar column classnya bisa -->
            <!-- disini baru bikin columnya, disini pake rasio 8:4 8 konten utama 4 sidebar sebelah kanan. -->
            <div class="col-sm-12 col-md-12 col-lg-8 themed-grid-col">
                <!-- disini bikin satu lagi wrapper buat kalo mau bikin costume style -->
                <div class="pb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quae, fugit corrupti non animi ut repellendus assumenda aut nisi necessitatibus similique quos explicabo doloribus quam sunt maiores eum maxime nemo? Officiis pariatur minima, veniam eos maiores quam rem sapiente nostrum adipisci? Molestias ad culpa sunt blanditiis architecto neque voluptatum consequatur. Aliquid labore voluptatibus at. Deleniti aspernatur doloremque ad quo fuga impedit similique sequi, tempora voluptatum ipsum quia nostrum laborum accusantium consequuntur sit dolore molestiae repudiandae est delectus adipisci consequatur ducimus! Fugiat dolorum consectetur facilis! Corrupti, voluptatem. Tempora adipisci, ducimus deleniti inventore quia id ab nesciunt, modi optio expedita eum perspiciatis mollitia praesentium nulla natus assumenda provident quo unde delectus iure! Fuga dolore maiores itaque quae adipisci, voluptatibus laudantium nam rerum fugit nihil eveniet. Minus culpa quae libero vel quia molestiae modi eligendi beatae, saepe provident aliquam magnam nihil quos veritatis neque perferendis dolor veniam quis amet similique obcaecati odit possimus. Odit facere, nam ipsum </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 bg-warning themed-grid-col">
                        <h1>Widged</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit fuga suscipit velit cupiditate quod iure iusto perspiciatis, officia laborum perferendis autem ipsam modi deserunt debitis deleniti? Esse alias ea ullam!</p>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 bg-success themed-grid-col">
                        <h1>Profil</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt minima minus facilis amet magni quaerat ab dolores distinctio. Officia dicta tempora dignissimos eligendi. Dolorum, ipsa dolorem error nemo quo blanditiis.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 bg-danger border themed-grid-col">
                        <h1>Form</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 bg-light border themed-grid-col">
                        <h1>Table</h1>
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
            
            <!-- posisi sidebar mau di kiri ato di kanan tinggal pindah ini ke paling atas sebelum div col-8 artinya sebelah kiri, di bawah col-8 artinya sebelah kanan -->
            <div class="col-sm-12 col-md-12 col-lg-4 themed-grid-col bg-dark text-white">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quae, fugit corrupti non animi ut repellendus assumenda aut nisi necessitatibus similique quos explicabo doloribus quam sunt maiores eum maxime nemo? Officiis pariatur minima, veniam eos maiores quam rem sapiente nostrum adipisci? Molestias ad culpa sunt blanditiis architecto neque voluptatum consequatur. Aliquid labore voluptatibus at. Deleniti aspernatur doloremque ad quo fuga impedit similique sequi, tempora voluptatum ipsum quia nostrum laborum accusantium consequuntur sit dolore molestiae repudiandae est delectus adipisci consequatur ducimus! Fugiat dolorum consectetur facilis! Corrupti, voluptatem. Tempora adipisci, ducimus deleniti inventore quia id ab nesciunt, modi optio expedita eum perspiciatis mollitia praesentium nulla natus assumenda provident quo unde delectus iure! Fuga dolore maiores itaque quae adipisci, voluptatibus laudantium nam rerum fugit nihil eveniet. Minus culpa quae libero vel quia molestiae modi eligendi beatae, saepe provident aliquam magnam nihil quos veritatis neque perferendis dolor veniam quis amet similique obcaecati odit possimus. Odit facere, nam ipsum reprehenderit soluta et minima officiis quaerat dolorum ut, ratione magnam alias iure. Accusantium dignissimos</p>
            </div>

            <div class="col py-2 bg-primary text-center text-white">
                <p>Copyright &copy; <small><mark>Andhika 2022</mark></small></p>
            </div>
        </div>

      
        
      

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>