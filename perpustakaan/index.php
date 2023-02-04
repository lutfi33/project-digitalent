<?php
include'connect.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="image/logo.png">
</head>
<body>
    <!-- header -->
    <div id="header" class="container-fluid">
        <div class="row">
            <div class="col-md-5 ">
            <img src="image/logo.png" alt="logo">
            </div>
            <div class="col-md-7">
                <h3 class="mt-3" >PERPUSTAKAAN DIGITALENT</h3>
                <h6>Jalan Purworejo-Magelang Km.1</h6>
            </div>
        </div>
    </div>

    <!-- garis -->
    <div id="line1" class="container-fluid"></div>
    <div id="line2" class="container-fluid"></div>

    <!-- sidebar -->
    <div id="samping" class="container-fluid">
        <div class="row">
            <div id="side" class="col-md-2 mb-3">
                <div id="sidebar">
                    <ul id="nav1">
                        <li><a href="index.php?p=beranda">Beranda</a></li>
                    </ul>
                    <p class="label-navigasi"><i class="bi bi-menu-button-wide">&ensp;</i>Data Master</p>
                    <ul>
                        <li id="nav2"><a href="index.php?p=anggota">Data Anggota</a></li>
                        <li id="nav2"><a href="index.php?p=buku">Data Buku</a></li>
                    </ul>
                    <p class="label-navigasi"><i class="bi bi-stack">&ensp;</i>Data Transaksi</p>
                    <ul>
                        <li id="nav3"><a href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
                        <li id="nav3"><a href="index.php?p=transaksi-pengembalian">Transaksi Pengembalian</a></li>
                    </ul>
                    <p class="label-navigasi"><a href="index.php?p=transaksi-peminjaman"><i class="bi bi-credit-card-fill">&ensp;</i>Laporan Transaksi</a></p>
                    <a class="tombol" href="logout.php"><i class="bi bi-box-arrow-left">&ensp;</i>Logout</a><br>
                </div>
            </div>
            <div class="col-md-10">
<?php
	$pages_dir='pages';
	if(!empty($_GET['p'])){
	    $pages=scandir($pages_dir,0);
	    unset($pages[0],$pages[1]);
	    $p=$_GET['p'];

	if(in_array($p.'.php',$pages)){
        include($pages_dir.'/'.$p.'.php');
	}else{
		echo'Akan Datang...';
	}
	}else{
	    include($pages_dir.'/beranda.php');
	}
		?>      
                <div id="footer" class="text-center"><p>Sistem Informasi Perpustakaan | By Lutfi Hermansah</p></div>           
            </div>
        </div>
    </div>


    
<!-- js bootrstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
</script>
</body>
</html>
<?php
}
else {
	
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
}
?>