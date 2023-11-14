<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$password=$_POST["password"]; //untuk password digunakan enskripsi md5
$nama_lengkap=$_POST["nama_lengkap"];
$jenis_kelamin=$_POST["jenis_kelamin"];
$tanggal_lahir=$_POST["tanggal_lahir"];
$alamat=$_POST["alamat"];
$hp=$_POST["hp"];
$status=$_POST["status"];

if (empty($username) || empty($password) || empty($nama_lengkap) || empty($jenis_kelamin) || empty($tanggal_lahir) || empty($alamat) || empty($hp) || empty($status)) {
	// If any of the variables is empty, show an error message
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='register.php';
		  </script>";
}
else {
	$hasil=mysqli_query($koneksi, "INSERT INTO user (username,password,nama_lengkap,jenis_kelamin,tanggal_lahir,alamat,hp,status) VALUES('$username','$password','$nama_lengkap','$jenis_kelamin','$tanggal_lahir','$alamat','$hp','$status')");

	echo "<script>
	alert('Anda Berhasil Registrasi !');
	document.location='login.php';
	</script>";
}

?>