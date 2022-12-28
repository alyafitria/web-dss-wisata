<?php
include('config.php');

if (isset($_POST['insert'])) {

    $value = $_POST['value'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO skala (value,keterangan) VALUES (" . $value . ",'" . $keterangan . "')";
    $insert = $conn->query($query);

    if ($insert == true) {
        header('location: tabel-data.php?data=skala');
    } else {
        echo "
		<script>
		alert('ERORR');
		</script>
		";
    }
}
