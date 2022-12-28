<?php
include('config.php');

if (isset($_POST['insert'])) 
{
    $nm_kriteria = $_POST['nm_kriteria'];
    $tipe = $_POST['tipe'];

    $query = "INSERT INTO kriteria (nm_kriteria,tipe) VALUES ('" . $nm_kriteria . "','$tipe')";
    $insert = $conn->query($query);

    if ($insert == true) {
        header('location: tabel-data.php?data=kriteria');
    } else {
        echo "
		<script>
		alert('ERORR');
		</script>
		";
    }
}
