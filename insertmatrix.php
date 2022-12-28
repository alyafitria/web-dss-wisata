<?php
include('config.php');

if (isset($_POST['insert'])) {
    
    $id_alternatif = $_POST['id_alternatif'];
    $id_bobot = $_POST['id_bobot'];
    $id_skala = $_POST['id_skala'];

    $query = "INSERT INTO matrixkeputusan (id_alternatif,id_bobot,id_skala) VALUES (" . $id_alternatif . "," . $id_bobot . "," . $id_skala . ")";
    $insert = $conn->query($query);

    if ($insert == true) {
        header('location: tabel-data.php?data=matrix');
    } else {
        echo "
		<script>
		alert('ERORR');
		</script>
		";
    }
}
