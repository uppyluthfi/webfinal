<?php
    require'fungsi.php';

    if(isset($_POST["register"])){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
 
        mysqli_query($konek,"INSERT INTO user VALUES('','$nama','$email','$password')");

            if(regis($_POST)>0){
                echo "
                <script>
                    alert('user baru berhasil di tambahkan');
                </script>
                ";
                echo "
                <script>
                window.location='login.php';
                </script>";
            }else{
                echo mysqli_error($konek);
            }

        // if(mysqli_num_rows(mysqli_query($konek,$data)) > 0){
        //     echo "
        //         <script>
        //             alert('Data Berhasil ditambahkan');
        //             document.location.href = 'login.php';
        //         </script>
        //     ";
        // }

        // if(regis($_POST) > 0){
        //     echo "
        //         <script>
        //             alert('Data berhasil ditambahkan');
        //             document.location.href = 'login.php';
        //         </script>
        //     ";
        // }else{
        //     echo mysqli_error($konek);
        //     echo "
        //         <script>
        //             alert('Data Gagal ditambahkan');
        //             document.location.href = 'regis.php';
        //         </script>
        //     ";
        // }
    }

        // if(isset($_POST["register"])){
        //     if(registrasi($_POST)>0){
        //         echo "
        //         <script>
        //             alert('user baru berhasil di tambahkan');
        //         </script>
        //         ";
        //     }else{
        //         echo mysqli_error($konek);
        //     }
        // }





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fuzzy+Bubbles:wght@700&family=Lobster&family=Metal+Mania&family=Oswald&family=Pacifico&family=Poppins:wght@100&family=Smooch&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="buatakun.css">
    <title>Registrasi</title>
</head>
<body>
    <form action="" method="post">
    <div class="d">
    <h1>Daftar</h1>
            <input type="text" name="nama" placeholder="Nama"> <br>
            <input type="text" name="email" placeholder="Email"> <br>
            <input type="password" name="password" placeholder="Password"> <br>
            <input type="password" name="password2" placeholder="Konfirmasi Password"><br>
            <div class="tombol d-flex">
                <button name="register" class="btn btn-primary" type="submit" >Daftar</button><br>
                <a href="login.php"><button class="btn btn-primary">Kembali</button></a><br>
            </div>
    </div>
    </form>
    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>