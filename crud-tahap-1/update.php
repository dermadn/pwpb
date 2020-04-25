<?php
include("koneksi.php");

$id=$_POST['kd_pro'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$kate=$_POST['kate'];
$url=$_POST['url'];
$satuan=$_POST['satuan'];
$stok=$_POST['stok'];

$perintah=mysqli_query($konek,"UPDATE `produk` SET `nama_produk` = '$nama', `harga_produk` = '$harga', `satuan` = '$satuan', `kategori` = '$kate', `url_gambar` = '$url', `stok` = '$stok' WHERE `produk`.`kd_produk` = '$id';");
if($perintah==TRUE){
    header("Location: tabel.php");
}else{
    echo "Data Di Update Simpan";
}

?>
