<?php 

session_start();
    if($_POST){
        include "tokoonline.php";

        $qry_get_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_get_produk);
        $_SESSION['cart'][]=array(

            'id_produk'=>$dt_produk['id_produk'],
            'nama_produk'=>$dt_produk['nama_produk'],
            'qty'=>$_POST['jumlah_beli'],
            'subtotal'=>$dt_produk['harga']*$_POST['jumlah_beli'],
        );

    }

    header('location: keranjang.php');

?>

