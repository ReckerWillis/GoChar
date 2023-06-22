<<?php 

include "conf/koneksi.php";

$id_misi = $_POST['id_misi'] ;
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$poin = $_POST['poin'];

$sql = "UPDATE misi set id_misi = '$id_misi', 
		judul ='$judul',
		deskripsi = '$deskripsi', 
		poin = '$poin' WHERE id_misi = '$id_misi'
 " ;

$hasil=$koneksi->query($sql); 
if ($hasil === TRUE) {
	echo "<script>
	alert ('galang dana berhasil dihapus!');
	</script>";
echo"<meta http-equiv=refresh content=0;url=iniadmin_copy.php>";
} else {
	echo "Hapus data gagal. Pesan error: ".$koneksi->error;
}
$koneksi->close();


?>
