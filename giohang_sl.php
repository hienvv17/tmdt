<?php
        include_once('./database/connect.php');
        if(isset($_POST['id_giohang']))

        $id_giohang=$_POST['id_giohang'];
        $sl_gh=$_POST['sl_gh'];
        $update_sl_giohang=mysqli_query($con,"UPDATE db_giohang
        SET soluong=$sl_gh
        WHERE sanpham_id=$id_giohang");
        
?>