<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    
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
            
            <li
                class="sidebar-item ">
                <a href="index.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            
            <li
                class="sidebar-item  has-sub active">
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
                class="sidebar-item  has-sub">
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
            
    <?php if ($_GET['input'] == 'alternatif') { ?> 

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Input Alternatif</h3>
                    <p class="text-subtitle text-muted">Alternatif Wisata di Pulau Lombok yang dapat anda kunjungi.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input Alternatif</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" method="POST" action="proses.php">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Nama Objek Wisata</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="text" id="first-name" class="form-control" name="nm_alternatif" placeholder="Nama Objek Wisata">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Lokasi Objek Wisata</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="text" id="email-id" class="form-control" name="lokasi" placeholder="Lokasi Objek Wisata">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1" name="insert">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php } else if ($_GET['input'] == 'kriteria') { ?> 

        <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Input Kriteria</h3>
                    <p class="text-subtitle text-muted">Beberapa kriteria yang termasuk wisata.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input Kriteria</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" method="POST" action="insertkriteria.php">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Kriteria</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="text" id="first-name" class="form-control" name="nm_kriteria" placeholder="Kriteria">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Tipe Kriteria</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <select class="form-select" name="tipe">
                                                <option value="benefit">Benefit</option>
                                                <option value="cost">Cost</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1" name="insert">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php } else if ($_GET['input'] == 'bobot') { ?> 

        <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Input Bobot</h3>
                    <p class="text-subtitle text-muted">Beberapa bobot dari masing-masing kriteria.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input Bobot</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" method="POST" action="insertbobot.php">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>ID Kriteria</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <select class="form-select" name="id_kriteria">
                                                <?php include 'config.php';
                                                $no = 1;
                                                $query = "SELECT * FROM kriteria";
                                                $result = $conn->query($query);
                                                while ($row = $result->fetch_array()) { ?>
                                                    <option value="<?php echo $row['id_kriteria']; ?>"><?php echo $row['id_kriteria']; ?> -> <?php echo $row['nm_kriteria']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Value Bobot</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="text" id="first-name" class="form-control" name="value" placeholder="Value">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1" name="insert">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php } else if ($_GET['input'] == 'skala') { ?> 

        <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Input Skala</h3>
                    <p class="text-subtitle text-muted">Skala yang ada di setiap wisata.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input Skala</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" method="POST" action="insertskala.php">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Value</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="text" id="first-name" class="form-control" name="value" placeholder="Nilai Skala">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Keterangan</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="text" id="first-name" class="form-control" name="keterangan" placeholder="Keterangan">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1" name="insert">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php } else if ($_GET['input'] == 'matrix') { ?> 

        <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Input Data Penilaian</h3>
                    <p class="text-subtitle text-muted">Masukkan penilaian anda berdasarkan wisata yang anda kunjungi.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input Data Penilaian</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" method="POST" action="insertmatrix.php">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>ID Alternatif</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <select class="form-select" name="id_alternatif">
                                                <?php include 'config.php';
                                                $no = 1;
                                                $query = "SELECT * FROM alternatif";
                                                $result = $conn->query($query);
                                                while ($row = $result->fetch_array()) { ?>
                                                    <option value="<?php echo $row['id_alternatif']; ?>"><?php echo $row['id_alternatif']; ?> -> <?php echo $row['nm_alternatif']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Nama Kriteria</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <select class="form-select" name="id_bobot">
                                                <?php include 'config.php';
                                                $no = 1;
                                                $query = "SELECT a.id_bobot, b.id_kriteria, b.nm_kriteria FROM bobot a JOIN kriteria b ON a.id_kriteria=b.id_kriteria";
                                                $result = $conn->query($query);
                                                while ($row = $result->fetch_array()) { ?>
                                                    <option value="<?php echo $row['id_bobot']; ?>"><?php echo $row['id_kriteria']; ?> -> <?php echo $row['nm_kriteria']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Value Skala</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <select class="form-select" name="id_skala">
                                                <?php include 'config.php';
                                                $no = 1;
                                                $query = "SELECT * FROM skala";
                                                $result = $conn->query($query);
                                                while ($row = $result->fetch_array()) { ?>
                                                    <option value="<?php echo $row['id_skala']; ?>"><?php echo $row['id_skala']; ?> -> <?php echo $row['keterangan']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1" name="insert">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php }?>


    </div>

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
    
</body>

</html>
