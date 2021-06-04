<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <title>TA DKP 2021</title>
  </head>
  <body>
     <!-- Jumbotron -->
     <div class="jumbotron text-center">
     <h1>TOKO FURNITURE PAIS</h1>
     <img src="img/bg.jpg" alt="">
     </div>
     <!-- Akhir Jumbotron -->

     <!-- Form -->
     <div class="container col-8">
     <form action="output.php" method="post">
          <div class="row text-center">
          </div>
          <div class="form-group row">
               <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
                </div>
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
                </div>

          </div> 
          Furniture yang dijual : <br/><br/>

               <label for="Meja" >Meja :</label></td>
               <Select name="Meja" id="Meja">
               <option value='Meja Kantor'> Meja Kantor </option>
               <option value='Meja Belajar'> Meja Belajar </option>
               <option value='Meja Makan'> Meja Makan </option>
               <option value='-'>-</option>
               </Select><br/>

          Bahan Pembuatan : <br/>

               <input type="radio" name="check1" value="Kayu Jati" required>Kayu Jati<br/>
               <input type="radio" name="check1" value="Kayu Mahoni">Kayu Mahoni<br/>
               <input type="radio" name="check1" value="Kayu Mindi">Kayu Mindi<br/>
               </br>

               <label for="Sofa">Sofa :</label></td>
               <Select name="Sofa" id="Sofa">
               <option value='Sofa Model 3 orang'>--Sofa Model 3 orang--</option>
               <option value='Sofa Model 2 orang'>--Sofa Model 2 orang--</option>
               <option value='Sofa Model 1 orang'>--Sofa Model 1 orang--</option>'
               <option value='-'>-</option>
               </Select><br/>

          Bahan Pembuatan : <br/>

               <input type="radio" name="check2" value="Chenille" required>Kayu Jati<br/>
               <input type="radio" name="check2" value="Polyster">Kayu Mahoni<br/>
               <input type="radio" name="check2" value="Oscar">Kayu Mindi<br/>
               </br>

               <label for="Kasur">Kasur :</label></td>
               <Select name="Kasur" id="Kasur">
               <option value='Kasur Model 2 orang'>--Kasur Model 2 orang--</option>
               <option value='Kasur Model 1 orang'>--Kasur Model 1 orang--</option>
               <option value='-'>-</option>
               </Select><br/>

          Jenis Bahan Pembuatan : <br/>

               <input type="radio" name="check3" value="Foam" required>Foam<br/>
               <input type="radio" name="check3" value="Spring Bed">Spring Bed<br/>
               <input type="radio" name="check3" value="Latex">Latex<br/>
               </br>

               <input class="btn btn-primary" type="submit" value="OK">
          
     </form>
     </div>
     <!-- Akhir Form -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>