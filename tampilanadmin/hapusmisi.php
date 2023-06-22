<?php
include "conf/koneksi.php";

$id_misi=$_GET['id_misi'];

$sql = "delete from misi where id_misi='$id_misi'";

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
