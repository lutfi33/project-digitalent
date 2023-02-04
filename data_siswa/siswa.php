
<?php 
    
    require_once 'function.php';
    
    $agama = [
        'Islam',
        'Kristen Protestan',
        'Kristen Katolik',
        'Hindu',
        'Budha',
        'Kong Hu Chu',
    ];
 
 ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <h2 class="text-center mb-4">Daftar Siswa</h2>
            <div class="table-responsive-md">
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Sekolah Asal</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $hasil = db_query("SELECT * FROM siswa");

                        $nomor=1;
                        while($baris = mysqli_fetch_assoc($hasil)) {

                            echo "<tr>";
                            echo "<td>".$nomor++."</td>";
                            echo "<td>".$baris['nama']."</td>";
                            echo "<td>".$baris['alamat']."</td>";
                            echo "<td>".$baris['gender']."</td>";
                            echo "<td>".$baris['agama']."</td>";
                            echo "<td>".$baris['sekolah']."</td>";

                            echo "<td>";
                            echo "<a href='form-edit.php?id=".$baris['id']."'>Edit</a> | ";
                            echo "<a href='hapus.php?id=".$baris['id']."'>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>

                    </tbody>
            </table>
        </div>
    </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
            <h2 class="text-center mb-4 mt-5">Pendaftaran Siswa Baru</h2>
        
        <form action="pendaftaran.php" method="post">
            <!-- nama -->
            <div class="mb-3">
                <label class="form-label" for="input-nama">Nama</label>
                <input class="form-control form-control-sm" type="text" id="input-nama" name="nama" required autofocus>
            </div>
            <!-- alamat -->
            <div class="mb-3">
                <label class="form-label" for="input-alamat">Alamat</label>
                <textarea class="form-control form-control-sm" name="alamat" id="input-alamat" require></textarea>
            </div>
            <!-- gender -->
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="input-laki" value="Laki-Laki" checked>
                    <label class="form-check-label" for="input-laki" >
                        Laki-Laki
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="input-perempuan" value="perempuan" >
                    <label class="form-check-label" for="input-perempuan">
                    Perempuan
                    </label>
                    </div>
            </div>
            <!-- agama -->
            <div class="mb-3">
                <label class="form-label" for="input-agama">Agama</label>
                <select class="form-select form-select-sm" name="agama" id="input-agama">
<?php 
    foreach ($agama as $item) {
        echo '<option>'.$item.'</option>';
    }
?>
                </select>
            </div>
            <!-- asal sekolah -->
            <div class="mb-3">
                <label class="form-label" for="input-sekolah">Sekolah Asal</label>
                <input class="form-control form-control-sm" type="text" name="sekolah" id="input-sekolah">
            </div>
            <!-- tombol -->
            <div class="row">
            <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
            </div>
        </form>

        </div>
            <div class="col-md-2"></div>
        </div>
</div>

<footer class="text-center mt-5">
    <p>by lutfi hermansah</p>
</footer>
<!-- css -->
<style>
    body {
    margin: 0px;
    padding: 0px;
}

form {
    padding : 20px 30px 20px 30px;
    box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.1);
}
.col-6 h2 {
    text-align: center;
    margin-top: 10px;
}
.col-3 a {
    margin-top: 10px;
    text-align: center;
}
.btn-primary {
    background-color: rgb(63, 138, 168);
}
</style>

<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>