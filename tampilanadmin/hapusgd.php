<?php
include "conf/koneksi.php";

$id_gd=$_GET['id_gd'];

$sql = "delete from galang_donasi where id_gd='$id_gd'";

$hasil = $koneksi->query($sql);
if ($hasil === TRUE) {
	echo "<script>
	alert ('galang dana berhasil dihapus!');
	</script>";
echo"<meta http-equiv=refresh content=0;url=iniadmin_copy.php>";
} else {
	echo "Hapus data gagal. Pesan error: ".$koneksi->error;
}
$koneksi->close(); // menutup koneksi

?>
