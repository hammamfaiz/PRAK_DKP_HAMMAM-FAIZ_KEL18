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
    <div class="jumbotron text-center">
     <h1><label >TOKO FURNITURE PAIS</label></h1>
     <img src="img/bg.jpg" alt="">
     </div>

     <div class="container col-8">
      <?php
      class datadiri {
        private $nama;
        private $alamat;

        function setNama($nama){
          $this->nama = $nama;
        } 

        function getNama(){
          return $this->nama;
        }

        function setAlamat($alamat){
          $this->alamat = $alamat;
        }

        function getAlamat(){
          return $this->alamat;
        }
      }
       
      $datadiri = new datadiri();

      $datadiri->setNama($_POST['nama']);
      $datadiri->setAlamat($_POST['alamat']);

      echo "<h4>Pemesanan Furniture Toko Mebel Pais</h4>";

      echo "</br>Nama &nbsp&nbsp&nbsp&nbsp : ", $datadiri->getNama() . "<br>";
      echo "Alamat &nbsp&nbsp&nbsp: ", $datadiri->getAlamat() . "<br>";

      echo "Barang &nbsp&nbsp&nbsp: ";

      if ($_POST['Meja'] == 'Meja Kantor')
      {
        $hasil1 = 'Meja Kantor'; 
        echo "1. ". $hasil1. " dengan bahan ". $_POST['check1']. "</br>";
      }
      elseif($_POST['Meja'] == 'Meja Belajar')
      {
        $hasil1 = 'Meja Belajar';
        echo "1. ". $hasil1. " dengan bahan ". $_POST['check1']. "</br>";
      }
      elseif($_POST['Meja'] == 'Meja Makan')
      {
        $hasil1 = 'Meja Makan';
        echo "1. ". $hasil1. " dengan bahan ". $_POST['check1']. "</br>";
      }
      else
      {
        $hasil1 = '';
        echo $hasil1;
      }  
      if ($_POST['Sofa'] == 'Sofa Model 3 orang')
      {
        $hasil2 = 'Sofa Model 3 orang'; 
        if ($hasil1 == ''){
          echo "1. ". $hasil2. " dengan bahan ". $_POST['check2']. "</br>";
          }
          else {
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "2. ". $hasil2. " dengan bahan ". $_POST['check2']. "</br>";
          }
      }
      elseif($_POST['Sofa'] == 'Sofa Model 2 orang')
      {
        $hasil2 = 'Sofa Model 2 orang';
        if ($hasil1 == '') {
          echo "1.".  $hasil2. " dengan bahan ". $_POST['check2']. "</br>";
          }
          else {
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "2. ". $hasil2. " dengan bahan ". $_POST['check2']. "</br>";
          }
      }
      elseif($_POST['Sofa'] == 'Sofa Model 1 orang')
      {
        $hasil2 = 'Sofa Model 1 orang';
        if ($hasil1 == ''){
          echo "1.". $hasil2. " dengan bahan ". $_POST['check2']. "</br>";
          }
        else {
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "2. ". $hasil2. " dengan bahan ". $_POST['check2']. "</br>";
          }
      }
      else
      {
        $hasil2 = '';
        echo $hasil2;
      }   
      if ($_POST['Kasur'] == 'Kasur Model 2 orang')
      {
        $hasil3 = 'Kasur Model 2 orang'; 
        if ($hasil1 == '')
          if ($hasil2 == ''){
          echo "1. ". $hasil3. " dengan bahan ". $_POST['check3']. "</br>";
          }
          else{
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "2. ". $hasil3. " dengan bahan ". $_POST['check3']. "</br>";
          }
        else{
          if ($hasil2 == ''){
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "2. ". $hasil3. " dengan bahan ". $_POST['check3']. "</br>";
          }
          else{
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "3. ". $hasil3. " dengan bahan ". $_POST['check3']. "</br>";
          }
         }
      }
      elseif($_POST['Kasur'] == 'Kasur Model 1 orang')
      {
        $hasil3 = 'Kasur Model 2 orang'; 
        if ($hasil1 == '')
          if ($hasil2 == ''){
          echo "1. ". $hasil3. " dengan bahan ". $_POST['check3']. "</br>";
          }
          else{
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "2. ". $hasil3. " dengan bahan ". $_POST['check3']. "</br>";
          }
        else{
          if ($hasil2 == ''){
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "2. ". $hasil3. " dengan bahan ". $_POST['check3']. "</br>";
          }
          else{
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
          echo "3. ". $hasil3. " dengan bahan ". $_POST['check3']. "</br>";
          }
        }
      }
      else
      {
        $hasil3 = '';
        echo $hasil3;
      }  
      ?>
    </div>

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