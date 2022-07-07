<?php include 'fungsi.php';

$id=$_GET['id'];

$skate= query("SELECT * FROM produk WHERE id = $id")[0];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <!--font  -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Pacifico&family=Poppins:wght@100&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Lobster&family=Metal+Mania&family=Oswald&family=Pacifico&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- css -->
    <link rel="stylesheet" href="keranjang.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="logo.png" alt="" width="7%">
      <h1 class="navbar-brand" href="#">POISON.ID</h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        
          
            <div class=" maruf input-group  inputpesan me-3">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <button class="btn btn-dark btl-lg"  type="button" id="button-addon2"><i class="bi bi-search"></i></button>
            </div>
      
          <div class="login">
            <a href="login.php"><h3><i class="bi bi-person-circle"></i></h3></a>
          </div>
          
      </div>
    </div>
  </nav>
  
  <div class="gambar">
  
    <img src="gambar/<?=$skate['foto']?>" alt="" height="35%" width="30%">
  </div>
  <br><br>

    <h2 class="atas"> <?=$skate['nama']?></h2> <hr>
    
    <br>
    <h3 class="tengah">  Rp. <?=number_format( $skate['harga'])?> </h3>
    
    <div id="wa">
        <a href="https://api.whatsapp.com/send?phone=+6282192853246&text= Hai Selamat Dtang Di Poison Skateshop ID "><i class="bi bi-whatsapp"></i></a>
        <h4> Ketuk Untuk Info Selanjutnya </h4>
            
    </div>
        
  <div class="last">

    <!-- Button trigger modal -->
    

  

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  </body>
  </html>

