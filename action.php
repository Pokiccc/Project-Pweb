<?php
	echo '<label for="fname">First name:</label><br>';
	echo $_POST['fname'].'<br>';

	echo '<label for="lname">Last name:</label><br>';
	echo $_POST['lname'].'<br>';

	echo '<label for="address">Address:</label><br>';
	echo $_POST['address'].'<br>';

	echo '<label for="fav_language">Favourite Language:</label><br>';	
	echo $_POST['fav_language'].'<br>';

	echo '<label for="vehicle">Favourite vehicle:</label><br>';
	foreach ($_POST['vehicle'] as $key => $value) {
		echo $value.', ';
	}
	echo '<br>';
	echo '<label for="cars">Choose a car:</label><br>';
	echo $_POST['cars'].'<br>';

	echo '<label for="foto">Your Foto:</label><br>';

	$namaFile = $_FILES['foto']['name'];
	echo $namaFile.'<br>';
	$namaSementara = $_FILES['foto']['tmp_name'];
	echo $namaSementara;

	// tentukan lokasi file akan dipindahkan
	$dirUpload = "img/";

	// pindahkan file
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

	echo '<br>';
	echo '<img src="'.$dirUpload.$namaFile.'">';

?>