<?php
include "conf/koneksi.php";

$email=$_GET['email'];

$sql = "delete from user where email='$email'";

$hasil = $koneksi->query($sql);
if ($hasil === TRUE) {
	echo "<script>
	alert ('User berhasil dihapus!');
	</script>";
echo"<meta http-equiv=refresh content=0;url=iniadmin_copy.php>";
} else {
	echo "Hapus data gagal. Pesan error: ".$koneksi->error;
}
$koneksi->close(); // menutup koneksi

?>
