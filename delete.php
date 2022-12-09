<?php 
require_once("config/koneksi.php");

	if(isset($_GET['idk'])){
		$delete = mysqli_query($conn, "DELETE FROM tugas_danielkevin WHERE id_tugas = '".$_GET['idk']."' ");
		echo '<script>window.location="index.php"</script>';
	}

?>
