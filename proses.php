<?php 
include('config.php');

if (isset($_POST['insert-alternatif'])) 
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

} else if (isset($_POST['insert-bobot'])) {

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

} else if (isset($_POST['insert-skala'])) {

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

} else if (isset($_POST['insert-kriteria'])) {

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

} else if (isset($_POST['insert-matrix'])) {
    
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


?>