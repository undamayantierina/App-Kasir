<?php
session_start();

//buat koneksi 
$koneksi = mysqli_connect('localhost', 'root', '','appkasir');
if (isset($_POST['tambahproduk'])) {
    $namaproduk = $_POST['NamaProduk'];
    $harga = $_POST['Harga'];
    $stok = $_POST['Stok'];

    $insert = mysqli_query($koneksi, " INSERT INTO produk (NamaProduk,Harga,Stok) VALUES('$namaproduk','$harga','$stok')");
    if ($insert) {
        header('location:index.php');
    } else {
        echo '
        <script> alert("Gagal menambah barang baru");
        windows.location.href="stock.php "</script>';
    }
    }
    if (isset($_POST['editproduk'])) {
        $namaproduk = $_POST['NamaProduk'];
        $harga = $_POST['Harga'];
        $stok = $_POST['Stok'];
        $idp = $_POST['ProdukID'];

        $edit = mysqli_query($koneksi, "UPDATE produk set NamaProduk='$namaproduk',Harga='$harga',Stok= '$stok' WHERE ProdukID='$idp'");
        if ($edit) {
            header('location:index.php');
         } else {
            echo '
            <script> 
            alert("Gagal menambah barang baru");
        windows.location.href="index.php"
        </script>';
    }
}
if (isset($_POST['hapusproduk'])) {
    $namaproduk = $_POST['NamaProduk'];
    $harga = $_POST['Harga'];
    $stok = $_POST['Stok'];
    $idp = $_POST['ProdukID'];

    $hapus = mysqli_query($koneksi, "DELETE  FROM produk WHERE ProdukID='$idp'");
    if ($hapus) {
        header('location:index.php');
     } else {
        echo '
        <script> 
        alert("Gagal menambah barang baru");
    windows.location.href="index.php"
    </script>';
}
}
?>