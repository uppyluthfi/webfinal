<?php
    require "fungsi.php";

    if(isset($_GET['id'])){
        $id= $_GET['id'];

    }
    $data = tampil_satu($id);

    if(isset($_POST['submit'])){
        ubah($_POST);
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
    <link rel="stylesheet" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card mx-auto w-50 mt-5">
            <div class="card-header">
                <h4>Edit Data</h4>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="gambar-lama" value="<?= $data['foto'] ?>">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">

                <div class="mb-3">

                    <img src="gambar/<?= $data['foto']?>" alt="" height="70px">
                </div>
                <div class="mb-3">
                <label for="Gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" value="<?=$data['gambar'] ?>"></label> 
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['nama'] ?>"></label> 
            </div>
            <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?=$data['harga'] ?>"></label> 
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?=$data['kategori'] ?>"></label> 
            </div>
            <div class="mb-3">
                <label for="Deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="Deskripsi" name="Deskripsi" value="<?=$data['Deskripsi'] ?>"></label> 
            </div>       
            <button class="btn btn-success" name="submit">Ubah</button>
                </form>
            </div>
            
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>