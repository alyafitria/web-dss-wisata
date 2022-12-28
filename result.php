<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode SAW</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    
<link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="assets/css/pages/simple-datatables.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.php"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li>
                <a href="index.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pencil-square"></i>
                    <span>Form Input</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="form-input.php?input=alternatif">Input Alternatif</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-input.php?input=kriteria">Input Kriteria</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-input.php?input=bobot">Input Bobot</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-input.php?input=skala">Input Skala</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-input.php?input=matrix">Input Penilaian</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  has-sub ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Data</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="tabel-data.php?data=alternatif">Data Alternatif</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="tabel-data.php?data=kriteria">Data Kriteria</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="tabel-data.php?data=bobot">Data Bobot</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="tabel-data.php?data=skala">Data Skala</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="tabel-data.php?data=matrix">Data Penilaian</a>
                    </li>
                </ul>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-magic"></i>
                    <span>Results</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="result.php?result=pra">Pra-Ranking SAW</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="result.php?result=ranking">Ranking SAW</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="result.php?result=topsis-pra">Metode Topsis</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="result.php?result=topsis-ranking">Ranking Topsis</a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
           
    <?php if ($_GET['result'] == 'pra') { ?> 

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pra-Ranking Rekomendasi Objek Wisata Terbaik</h3>
                    <p class="text-subtitle text-muted">Pra Raking Rekomendasi Objek Wisata berdasarkan perankingan tiap-tiap objek wisata.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pra Rangking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Alternatif</th>
                                <th>Nama Alternatif Wisata</th>
                                <th>Normalisasi</th>
                                <th>Pra-Ranking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                            $no = 1;
                            $query = "SELECT vnormalisasi.*,(vnormalisasi.value*vnormalisasi.normalisasi) AS prarangking FROM vnormalisasi GROUP BY vnormalisasi.id_matrix";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <td><?php echo $row['id_alternatif']; ?></td>
                                    <td><?php echo $row['nm_alternatif']; ?></td>
                                    <td><?php echo $row['normalisasi']; ?></td>
                                    <td><?php echo $row['prarangking']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php } else if ($_GET['result'] == 'ranking') { ?> 
       
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Rekomendasi Objek Wisata Terbaik</h3>
                    <p class="text-subtitle text-muted">Hasil akhir Rekomendasi Objek Wisata Terbaik berdasarkan perankingan tiap-tiap objek wisata.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rangking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Alternatif</th>
                                <th>Nama Alternatif Wisata</th>
                                <th>Ranking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                            $no = 1;
                            $query = "SELECT id_alternatif,nm_alternatif,SUM(prarangking) AS rangking FROM vprarangking GROUP BY id_alternatif";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <td><?php echo $row['id_alternatif']; ?></td>
                                    <td><?php echo $row['nm_alternatif']; ?></td>
                                    <td><?php echo $row['rangking']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>


    <?php } else if ($_GET['result'] == 'topsis-pra') { ?> 

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Rekomendasi Objek Wisata Terbaik - Metode Topsis</h3>
                    <p class="text-subtitle text-muted">Rekomendasi Objek Wisata berdasarkan perankingan tiap-tiap objek wisata.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pra Rangking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <h4 class="card-header">Pembagi</h4>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Pembagi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                            $no = 1;
                            $query = "SELECT vmatrixkeputusan.id_kriteria,vmatrixkeputusan.nm_kriteria, 
                                    SQRT(SUM(POW(vmatrixkeputusan.nilai,2))) AS bagi FROM vmatrixkeputusan 
                                    GROUP BY vmatrixkeputusan.id_kriteria ";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <td><?php echo $row['id_kriteria']; ?></td>
                                    <td><?php echo $row['nm_kriteria']; ?></td>
                                    <td><?php echo $row['bagi']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header">Nilai Maximum & Minimum</h4>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Matrix</th>
                                <th>Nama Kriteria</th>
                                <th>Nilai Maximum</th>
                                <th>Nilai Minimum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                            $no = 1;
                            $query = "SELECT topsis_terbobot.id_matrix,topsis_terbobot.id_kriteria,topsis_terbobot.nm_kriteria,
                                        MAX(topsis_terbobot.terbobot) AS maximum, MIN(topsis_terbobot.terbobot) AS minimum 
                                        FROM topsis_terbobot GROUP BY topsis_terbobot.id_kriteria ";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <td><?php echo $row['id_matrix']; ?></td>
                                    <td><?php echo $row['nm_kriteria']; ?></td>
                                    <td><?php echo $row['maximum']; ?></td>
                                    <td><?php echo $row['minimum']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header">SipSin</h4>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Matrix</th>
                                <th>Nama Kriteria</th>
                                <th>Dplus</th>
                                <th>Dmin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                            $no = 1;
                            $query = "SELECT topsis_terbobot.id_alternatif,nm_alternatif, 
                                SQRT(SUM(POW((topsis_maxmin.maximum-topsis_terbobot.terbobot),2))) AS dplus, 
                                SQRT(SUM(POW((topsis_maxmin.minimum-topsis_terbobot.terbobot),2))) AS dmin 
                                FROM topsis_terbobot,topsis_maxmin 
                                WHERE topsis_terbobot.id_kriteria=topsis_maxmin.id_kriteria
                                GROUP BY topsis_terbobot.id_alternatif ";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <td><?php echo $row['id_alternatif']; ?></td>
                                    <td><?php echo $row['nm_alternatif']; ?></td>
                                    <td><?php echo $row['dplus']; ?></td>
                                    <td><?php echo $row['dmin']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header">Normalisasi</h4>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Alternatif</th>
                                <th>Nama Alternatif Wisata</th>
                                <th>Normalisasi</th>
                                <th>Normalisasi Terbobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                            $no = 1;
                            $query = "SELECT topsis_normalisasi.*,(bobot.value*topsis_normalisasi.normalisasi) 
                                        AS terbobot FROM topsis_normalisasi,bobot 
                                        WHERE bobot.id_kriteria=topsis_normalisasi.id_kriteria
                                        GROUP BY topsis_normalisasi.id_matrix";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <td><?php echo $row['id_alternatif']; ?></td>
                                    <td><?php echo $row['nm_alternatif']; ?></td>
                                    <td><?php echo $row['normalisasi']; ?></td>
                                    <td><?php echo $row['terbobot']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header">Normalisasi</h4>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Alternatif</th>
                                <th>Nama Alternatif Wisata</th>
                                <th>Nilai V / Ranking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                            $no = 1;
                            $query = $query = "SELECT topsis_sipsin.nm_alternatif, topsis_sipsin.*,(topsis_sipsin.dmin/(topsis_sipsin.dplus+topsis_sipsin.dmin)) 
                                    AS nilaiv FROM topsis_sipsin GROUP BY topsis_sipsin.id_alternatif ";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <td><?php echo $row['id_alternatif']; ?></td>
                                    <td><?php echo $row['nm_alternatif']; ?></td>
                                    <td><?php echo $row['nilaiv']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    

    <?php } else if ($_GET['result'] == 'topsis-ranking') { ?> 

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Ranking - Metode Topsis</h3>
                    <p class="text-subtitle text-muted">Hasil akhir Rekomendasi Objek Wisata Terbaik berdasarkan perankingan tiap-tiap objek wisata.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rangking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Dmin</th>
                                <th>Dplus</th>
                                <th>Ranking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                            $no = 1;
                            $query = "SELECT topsis_sipsin.nm_alternatif, topsis_sipsin.*,(topsis_sipsin.dmin/(topsis_sipsin.dplus+topsis_sipsin.dmin)) 
                                        AS nilaiv FROM topsis_sipsin GROUP BY topsis_sipsin.id_alternatif ";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <td><?php echo $row['id_alternatif']; ?></td>
                                    <td><?php echo $row['nm_alternatif']; ?></td>
                                    <td><?php echo $row['dplus']; ?></td>
                                    <td><?php echo $row['dmin']; ?></td>
                                    <td><?php echo $row['nilaiv']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php }?>


            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Alya</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by Alya</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
<script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/js/pages/simple-datatables.js"></script>

</body>

</html>
