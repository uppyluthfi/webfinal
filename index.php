<?php 

  require "fungsi.php";


    $skate=tampil_banyak("SELECT * FROM produk");

    $mahasiswa = query("SELECT * FROM user");

    if(isset($_POST["hapus"])){
        if(hapus($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil dihapus');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal dihapus');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
    

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
    <link rel="stylesheet" href="tampilan.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .maruf{
        width: 90%;
    }
    h1{
        font-family: 'Metal Mania', cursive;
    }
    .login{
      margin-left: 20px;
    }
    footer{
    padding: 30px 0;
    background-color: rgb(239, 240, 241);
    color: black;
    text-align: center;
    }
    .keranjang a{
      color: black;
    }
    .keranjang a :hover{
      transform: scale(1.5);
    }
    .login a{
      color: black;
    }
    .login a :hover{
      transform: scale(1.5);
    }
    

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <img src="logo.png" alt="" width="7%">
          <h1 class="navbar-brand" href="#">POISON.ID</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            
              

                <div class=" maruf input-group  inputpesan me-3">
                  <input name="keyword" type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                  <button name="cari" class="btn btn-dark btl-lg"  type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
              
              
              <div class="login">
                <a href="login.php"><h3><i class="bi bi-person-circle"></i></h3></a>
              </div>
              
          </div>
        </div>
      </nav>
      <section>
        <div class="container p-5 text-center">
          <h1 class="mb-3"><em>Product</em></h1>
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
           <div class="carousel-indicators">
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
           </div>
           <div class="carousel-inner">
             <div class="carousel-item active">
               <img src="background.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                <h5> Slide label</h5>
               </div>
             </div>
             <div class="carousel-item">
               <img src="baker logo.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                <h5>Slide label</h5>
              </div>
             </div>
             <div class="carousel-item">
               <img src="supreme.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                 <h5>Slide label</h5>
                 
               </div>
             </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
         </div>
        </div>
      </section>
      <section  class="d-flex bg-light p-5" >
        <div class="container">
            <div class="row g-5">
              <?php 
              foreach ($skate as $row):
              ?>
              <div class="col col-lg-3 col-md-4 ">
                  <div class="card" style="width: 220px;">
                      <img src="gambar/<?=$row['foto']?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        
                        <h5 class="card-title" style="height:40px"><?=$row['nama']?></h5>
                        <p class="card-text">Rp.<?=number_format( $row['harga'])?></p>
                        
 <a href="#modal">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?=$row['id']?>">
      Beli Sekarang
    </button>
  </a>                      <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="modal<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <?=$row['nama']?></i></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h5> <?=$row['Deskripsi']?> </h5>
      <h5>  Rp. <?=number_format( $row['harga'])?> </h5>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <a href="keranjang.php?id=<?=$row['id']?>"><button type="button" class="btn btn-primary">Selanjutnya</button></a>
      </div>
    </div>
  </div>
</div>
                      </div>
                    </div>
              </div>
              <?php 
              endforeach;
              ?>
              
          </div>
          
      </section>
      
      <footer>
        <div class="container">
            <small>Copyright &copy; - M Luthfi Mubarak, All Rights Reserver</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>