<?php 

include 'conf/koneksi.php';

$id_misi = $_GET['id_misi'];

//Mengakses isi tabel pegawai 

$sqlDataLama = "SELECT * FROM misi WHERE id_misi = '$id_misi' " ;
$replyDataLama  = $koneksi->query($sqlDataLama)->fetch_array();


echo "

<form method='POST' action='updatemisi.php'>" ;


    $id_misi = $replyDataLama['id_misi'];
    $judul = $replyDataLama['judul'];
    $deskripsi = $replyDataLama['deskripsi'];
    $poin = $replyDataLama['poin'];

    echo " 
    <br> 
    <input type='text' value='$id_misi' name='id_misi'>id</input>
    <br>
    <input type='text' value='$judul' name='judul'>judul</input>
    <br>
    <input type='text' value='$deskripsi' name='deskripsi'>deskripsi</input>
    <br>
    <input type='text' value='$poin' name='poin'>poin</input>
" ;
echo "
    <input type='submit' value='Simpan' name='submit'><input type='reset' value='Batal'></form>";


?>