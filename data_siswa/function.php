<?php

if(!$link = mysqli_connect('localhost','root','','jwd'))
exit('koneksi Gagal');

function db_query ($sql) {
    global $link;

    if(!$hasil = mysqli_query($link, $sql))
    exit('Query Gagal: '.mysqli_error($link));

    return $hasil;

}