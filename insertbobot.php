<?php
include('config.php');

if (isset($_POST['insert'])) {

    $id_kriteria = $_POST['id_kriteria'];
    $value = $_POST['value'];

    $query = "INSERT INTO bobot (id_kriteria,value) VALUES (" . $id_kriteria . ",'" . $value . "')";
    $insert = $conn->query($query);

    if ($insert == true) {
        header('location: tabel-data.php?data=bobot');
    } else {
        echo "
		<script>
		alert('ERORR');
		</script>
		";
    }
}
