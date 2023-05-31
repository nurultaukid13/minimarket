<?php
session_start();
include ('../config/conn.php');
include ('../config/function.php');
//proses tambah
if(isset($_POST['tambah'])){
    $barang_id = $_POST['barang_id'];
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];
    $tanggal = $_POST['tanggal'];

    if ($keterangan == "Terjual") {
        // Ambil data harga_jual dan harga_restock dari tabel barang
        $query_barang = mysqli_query($con, "SELECT harga_jual, harga_restock FROM barang WHERE idbarang='$barang_id'");
        $data_barang = mysqli_fetch_assoc($query_barang);
        $harga_jual = $data_barang['harga_jual'];
        $harga_restock = $data_barang['harga_restock'];

        // Hitung profit
        $profit = ($harga_jual - $harga_restock) * $jumlah;
    } else {
        $profit = 0;
    }

    $insert = mysqli_query($con,"INSERT INTO barang_keluar (barang_id, jumlah, keterangan, tanggal, profit) VALUES ('$barang_id','$jumlah','$keterangan','$tanggal', '$profit')") or die (mysqli_error($con));
    if($insert){
        $success = 'Berhasil menambahkan data barang keluar';
    }else{
        $error = 'Gagal menambahkan data barang keluar';
    }
    $_SESSION['success'] = $success;
    $_SESSION['error'] = $error;
    header('Location:../?barang_keluar');
}
?>
