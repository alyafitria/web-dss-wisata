<?php
include('config.php');

if (isset($_POST['insert'])) 
{
    $nm_alternatif = $_POST['nm_alternatif'];
    $lokasi = $_POST['lokasi'];

    $query = "INSERT INTO alternatif (nm_kriteria,lokasi) VALUES ('" . $nm_alternatif . "','" . $lokasi . "')";
    $insert = $conn->query($query);

    if ($insert == true) {
        header('location: tabel-data.php?data=alternatif');
    } else {
        echo "
		<script>
		alert('ERORR');
		</script>
		";
    }
}
