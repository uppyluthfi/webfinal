<?php
    require "fungsi.php";

    if(isset($_POST['submit'])){
        tambah($_POST);
    }

    if(isset($GET['status'])){
        echo "data gagal di tambahkan";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
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

    <title>Tambah Data</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5 mx-auto w-50">
            <div class="card-header">
                <h3>Tambah Data</h3>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control">
                    </div>
                    <div class="mb-3">
                        <select name="kategori" id="kategori" class="form-select">
                        <option value="">Pilih Kategori</option>
                        <option value="Bagian skateboard">Bagian Skateboard</option>
                        <option value="Skateboard">Skateboard </option>
</select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" name="submit">
                            Tambah Data
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>