<?php 
    $konek= mysqli_connect('localhost','root','','skate');
    if(mysqli_connect_errno()){
        echo"Gagal :" . mysqli_connect_error();
    }
    
    function query($query){
        global $konek;
        $result = mysqli_query($konek, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
    
   

    function tampil_satu($id){
        global $konek;

        $hasil = mysqli_query($konek, "SELECT * FROM produk WHERE id='$id'");

        return mysqli_fetch_assoc($hasil);

    }

    function tampil_banyak($query){
        global $konek;

        $hasil = mysqli_query($konek, $query);
        while($data = mysqli_fetch_assoc($hasil)){
            $skate[] = $data;
        }

        return $skate;
    }

    function tambah($post){
        global $konek;

        $gambar = unggah($_FILES);
        $nama = $_POST ['nama'];
        $harga = $_POST ['harga'];
        $kategori = $_POST ['kategori'];
        $Deskripsi = $_POST ['Deskripsi'];
        
        // die($post);
        $query = "INSERT INTO produk  VALUES ('', '$gambar', '$nama', '$harga', '$kategori', '$Deskripsi')";
        // var_dump($query);
        // die();

        mysqli_query($konek, $query);

        if(mysqli_affected_rows($konek) > 0){
            header("location:admin.php?status=1");
        }

        else{
            header("location:admin.php?status=0");
        }
    }

    function unggah($files){
        
        $nama_gambar = $files["gambar"]["name"];
        $error = $files["gambar"]["error"];
        $tmp = $files["gambar"]["tmp_name"];
        $format = explode(".",$nama_gambar);
        $format = strtolower(end($format));

        if($error === 4){
            return false;
        }

        $nama_gambar = date("ymdis").".".$format;
        // var_dump($nama_gambar);die();
        move_uploaded_file($tmp,"gambar/".$nama_gambar);

        return $nama_gambar;
        

    }
    
    function ubah($post){
        global $konek;
        
        $id = $post ['id'];
        $nama = $post ['nama'];
        $harga = $post ['harga'];
        $kategori = $post ['kategori'];
        $Deskripsi = $post ['Deskripsi'];
        $gambar_lama = $post["gambar-lama"];

        if($_FILES["gambar"]["error"] === 4){
            $gambar = $gambar_lama;
        }

        else{
            $dir = "gambar/";
            unlink($dir.$gambar_lama);
            $gambar = unggah($_FILES);
        }

        $query = "UPDATE produk SET foto='$gambar', nama='$nama', harga='$harga', kategori='$kategori', Deskripsi='$Deskripsi' WHERE id='$id'";

        mysqli_query($konek, $query);

        if(mysqli_affected_rows($konek) > 0){
            header("location:admin.php?status=2");
        }

        else{
            header("location:admin.php?status=3");
        }
    }

    function beli($post){
        global $konek;

        $tgl = date("Y-m-d");
        $id_barang = $post["id_barang"];
        $jumlah = $post["jumlah"];
        $total_bayar = $post["total_bayar"];
        $ukuran = strtoupper($post["ukuran"]);

        $query = "INSERT INTO transaksi (tgl_transaksi, id_barang, jumlah, total_bayar, ukuran) VALUES ('$tgl', '$id_barang', '$jumlah', '$total_bayar', '$ukuran')";


        mysqli_query($konek, $query);

        if(mysqli_affected_rows($konek) > 0){
            header("location:index.php?sukses-beli=1");
        }

        else{
            header("location:index.php?sukses-beli=0");
        }

    }

    function hapus($query){
        global $konek;
        mysqli_query($konek, $query);

        if(mysqli_affected_rows($konek) > 0){
            header("location:admin.php?sukses-hapus=1");
        }

        else{
            header("location:admin.php?sukses-hapus=0");
        }

    }
      //registrasi
      function regis($data){
        global $konek;

        $nama = mysqli_real_escape_string($konek,stripslashes($data["nama"])) ;
        $email = mysqli_real_escape_string($konek,stripslashes($data["email"])) ;
        $password = mysqli_real_escape_string($konek, $data["password"]);
        $password2 = mysqli_real_escape_string($konek,$data["password2"]) ;
        
        //cek username sudah ada atau belum
        $result = mysqli_query($konek,"SELECT email FROM user WHERE email = '$email'");

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('email sudah terdaftar')
                </script>
            ";

            return false;
        }

        //cek konfirmasi password
        if($password !== $password2){
            echo "
                <script>
                    alert('Konfirmasi Password tidak sesuai !!')
                </script>
            ";

            return false;
        }

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //tambahkan user password ke database
        mysqli_query($konek, "INSERT INTO user VALUES('', '$nama', '$email', '$password')");

        return mysqli_affected_rows($konek);

    }
    // function registrasi($data){
    //     global $conn;
    //     $nama = ($data["nama"]);
    //     $email = strtolower($data["email"]) ;
    //     $password = $data["password"];
    //     $password2 = $data["password2"];

    //     // Cek Konirmasi Password
    //     if($password !== $password2){
    //         echo "
    //         <script>
    //             alert('konfirmasi password tidak sesuai');
    //         </script>";

    //         return false;
    //     }
    // }

   
?>