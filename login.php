    <?php
        include 'fungsi.php';
        session_start();
        $keg = query("SELECT * FROM produk ORDER BY id DESC LIMIT 3");

        if(isset($_POST["log"])){
            $email = $_POST["email"];
            $password = $_POST["password"];


            $result = mysqli_query($konek,"SELECT * FROM user WHERE email = '$email'");

            //cek email
            if(mysqli_num_rows($result) > 0){
                echo"
                <script>
                window.location='admin.php';
                </script>";
            }
            $error = true;
        }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Pacifico&family=Poppins:wght@100&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Lobster&family=Metal+Mania&family=Oswald&family=Pacifico&family=Poppins:wght@100&display=swap" rel="stylesheet">
        <!-- Css -->
        <link rel="stylesheet" href="login.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
    </head>

    <body>
        
        <div class="d-flex justify-content-beetwen align-items-center">
            <div>
                <div class="logo d-flex ms-5">
                    <img src="logo.png" alt="" width="120px">
                    <h1>POISON <br> SKATESHOP.ID</h1>
                </div>
                <h5 class="ms-5">Poison Skteshop id dapat memudahkan anda <br> untuk membeli skateboard yang berkualitas.</h5>
            </div>
                
        <section class="login" >
            <form action=" " method="POST">
                <div class="mb-3 ">
                    <i class="bi bi-envelope-fill"></i>
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3">
                    <i class="bi bi-key-fill"></i>
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="d-grid">
                <br>
                <a href="selesai.html?id=<?=$keg['id'];?> "></a><button type="submit" class="btn btn-primary" name="log">Login</button>
            </div>
            
        </form>
    </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
    </html>