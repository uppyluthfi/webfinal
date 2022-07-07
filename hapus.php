<?php

    require "fungsi.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($konek, "DELETE FROM produk WHERE id='$id'" );

        if(mysqli_affected_rows($konek) > 0){
            header("location:admin.php?status=4");
        }
        else{
            header("location:admin.php?status=5");
        }
    }
?>