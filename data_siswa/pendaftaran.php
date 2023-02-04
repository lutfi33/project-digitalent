
<?php
    
    require_once 'function.php';
    
    $nama    = htmlentities ($_POST['nama']);
    $alamat  = htmlentities ($_POST['alamat']);
    $gender  = htmlentities ($_POST['gender']);
    $agama   = htmlentities ($_POST['agama']);
    $sekolah = htmlentities ($_POST['sekolah']);

    db_query("INSERT INTO siswa (nama, alamat, gender, agama, sekolah) VALUES ('$nama','$alamat','$gender','$agama','$sekolah')");


    header ('location:siswa.php');

