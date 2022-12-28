<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    
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
                class="sidebar-item  has-sub active">
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
            </li>

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
            
    <?php if ($_GET['data'] == 'alternatif') { ?> 

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Alternatif</h3>
                    <p class="text-subtitle text-muted">Kumpulan data alternatif</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Alternatif</li>
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
                                <th>Nama Objek Wisata</th>
                                <th>Lokasi Objek Wisata</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                                $no = 1;
                                $query = "SELECT * FROM alternatif";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_array()) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['id_alternatif']; ?></td>
                                <td><?php echo $row['nm_alternatif']; ?></td>
                                <td><?php echo $row['lokasi']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php } else if ($_GET['data'] == 'kriteria') { ?> 

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Kriteria</h3>
                    <p class="text-subtitle text-muted">Kumpulan data kriteria</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
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
                                <th>ID Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Tipe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                                $no = 1;
                                $query = "SELECT * FROM kriteria";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_array()) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['id_kriteria']; ?></td>
                                <td><?php echo $row['nm_kriteria']; ?></td>
                                <td><?php echo $row['tipe']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php } else if ($_GET['data'] == 'bobot') { ?> 
    
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Bobot</h3>
                    <p class="text-subtitle text-muted">Kumpulan data skala</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Bobot</li>
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
                                <th>ID Bobot</th>
                                <th>Nama Kriteria</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                                $no = 1;
                                $query = "SELECT * FROM bobot";
                                $query = "SELECT a.id_bobot, b.nm_kriteria, a.value FROM bobot a JOIN kriteria b ON a.id_kriteria=b.id_kriteria";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_array()) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['id_bobot']; ?></td>
                                <td><?php echo $row['nm_kriteria']; ?></td>
                                <td><?php echo $row['value']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php } else if ($_GET['data'] == 'skala') { ?> 
    
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Skala</h3>
                    <p class="text-subtitle text-muted">Kumpulan data skala</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Skala</li>
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
                                <th>ID Skala</th>
                                <th>Keterangan</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                                $no = 1;
                                $query = "SELECT * FROM skala";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_array()) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['id_skala']; ?></td>
                                <td><?php echo $row['keterangan']; ?></td>
                                <td><?php echo $row['value']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <?php } else if ($_GET['data'] == 'matrix') { ?> 

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Data Penilaian</h3>
                    <p class="text-subtitle text-muted">Kumpulan  Data Penilaian</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Data Penilaian</li>
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
                                <th>ID Matrix</th>
                                <th>Nama Alternatif</th>
                                <th>Nama Kriteria</th>
                                <th>Value Skala</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'config.php';
                                $no = 1;
                                $query = "SELECT a.nm_alternatif, b.id_matrix, c.keterangan, e.nm_kriteria FROM alternatif a JOIN matrixkeputusan b ON a.id_alternatif=b.id_alternatif JOIN skala c ON b.id_skala=c.id_skala JOIN bobot d ON b.id_bobot=d.id_bobot JOIN kriteria e ON d.id_kriteria=e.id_kriteria";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_array()) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['id_matrix']; ?></td>
                                <td><?php echo $row['nm_alternatif']; ?></td>
                                <td><?php echo $row['nm_kriteria']; ?></td>
                                <td><?php echo $row['keterangan']; ?></td>
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
