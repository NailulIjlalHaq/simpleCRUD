<?php
    $conn = mysqli_connect('localhost', 'root', 'admin', 'crud');

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

// KONEKSI TAMBAH SISWA
if(isset($_POST['tambahsiswa'])){
	$ns = $_POST['namasiswa'];
	$ks = $_POST['kelassiswa'];
	$a = $_POST['alamat'];
	$t = $_POST['telepon'];

	$insert = mysqli_query($conn, "insert into data_siswa (namasiswa,kelassiswa,alamat,telepon) values ('$ns','$ks','$a','$t')");

	if($insert){
		header('location:index.php');
	} else {
		echo '
		<script>alert("Gagal Menambah Siswa baru");
		window.location.href="index.php"
		</script>
		';
	}
}

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

// EDIT SISWA
if (isset($_POST['editsiswa'])) {
	$ns = $_POST['namasiswa'];
	$ks = $_POST['kelassiswa'];
	$a = $_POST['alamat'];
	$t = $_POST['telepon'];
	$ids = $_POST['idsiswa'];

	$query = mysqli_query($conn, "update data_siswa set namasiswa='$ns', kelassiswa='$ks', alamat='$a', telepon='$t' where idsiswa='$ids' ");

	if ($query) {
		header('location:index.php');
	} else {
		echo '
		<script>alert("Gagal Edit Siswa");
		window.location.href="index.php"
		</script>
		';
	}
}

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

// HAPUS BARANG
if (isset($_POST['hapussiswa'])) {
	$ids = $_POST['idsiswa']; // ID PRODUK

	$query = mysqli_query($conn, "delete from data_siswa where idsiswa='$ids' ");
	if ($query) {
		header('location:index.php');
	} else {
		echo '
		<script>alert("Gagal Hapus Siswa");
		window.location.href="index.php"
		</script>
		';
	}
}
?>