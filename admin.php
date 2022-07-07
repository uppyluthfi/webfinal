<?php
    session_start();
    require "fungsi.php";

    $skate = tampil_banyak("SELECT * FROM produk");

    
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
    .last{
        margin-left: 92%;
        margin-top: px;
    }
</style>
<body>

<div class="">
    <?php
        if(isset($_GET['status'])){
            if($_GET['status'] == 1){
            echo "<div class='alert alert-succes'>data berhasil di tambahkan<?div>";
            }
            else if($_GET['status'] == 2){
                echo "<div class='alert alert-succes'>data berhasil di edit<?div>";
            }
                else if($_GET['status'] == 3){
                echo "<div class='alert alert-danger'>data gagal di edit<?div>";
            }
                else if($_GET['status'] == 4){
                echo "<div class='alert alert-succes'>data berhasil di hapus<?div>";
            }
                else if($_GET['status'] == 5){
                echo "<div class='alert alert-succes'>data gagal di hapus<?div>";
            }
        }
    
    ?>
 <a href="tambah.php" class="btn btn-primary">Tambah data</a>
    <table class="table">
        <thead>
    <tr>
        <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Kategori</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php
        foreach ($skate as $i => $row) :
    ?>
    <tr>
      
      <td><?= $i+1 ?></td>
      <td><img src="gambar/<?= $row['foto'] ?>" alt="" width="50px"></td>
      <td><?= $row['nama']?></td>
      <td><?= $row['harga']?></td>
      <td><?= $row['kategori']?></td>
      <td><?= $row['Deskripsi']?></td>
      <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a>
          <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    
   <?php
        endforeach;
   ?>
    
</tbody>

</table>
</div>
<div class="last">
    <a href="logout.php" class="btn btn-primary">Log Out</a>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>