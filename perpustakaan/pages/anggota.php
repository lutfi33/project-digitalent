<style>
    #label-page {
        border:2px solid #EFFD5F;
        border-radius:30px;
        margin-top:30px;
    }
    #label-page h5{
        margin-top:5px;
        color:#313131;
        margin-left:20px;
    }
	.btn {
		border-radius:30px;
	}
    .btn-primary {
        background-color:#ffc30b;
        border:none;
        color:#313131;
        margin:30px 0px 0px 30px;
		border:2px solid #ffc30b;
		transition:0.5s ease;
	}
    .btn-primary:hover {
        background-color:transparent;
		color:#313131;
		border:2px solid #ffc30b;
    }
    .btn-success {
        background-color:#effd5f;
        border:none;
        color:#313131;
        margin:30px 0px 0px 30px;
		border:2px solid #effd5f;
		transition:0.5s ease;
    }
    .btn-success:hover {
        background-color:transparent;
        color:#313131;
		border:2px solid #effd5f;
    }
    #content ul {
        list-style:none;
    }
    #content ul li {
        display:inline;
    }
    .head {
        background-color: #fce205;
    }
	.tombol2 {
		background-color:#fce205;
		border:2px solid #fce205;
		margin-left:10px;
		border-radius:30px;
		transition:0.5s ease;
		margin-right:30px;
	}
	.tombol2:hover {
		background-color:transparent;
	}
	.cetak, .edit, .hapus{
		text-decoration:none;
		font-family: 'Poppins', sans-serif;
		font-size:14px;
	}
	.cetak:hover, .edit:hover, .hapus:hover{
		color:#fce205;
	}
	.hapus {
		color:#FF5722;
	}
	.cetak{
		color:#1E88E5;
	}
	.edit {
		color:#4CAF50;
	}
	#search {
		float:right;
		margin-bottom:30px;
		margin-right:10px;
	}
	#table .container-fluid {
		margin-top:40px;
	}
	.pagination {
		float: right;
		margin-right:20px;
	}
	.pagination a {
    color: #313131;
    padding: 8px 16px;
    text-decoration: none;
	margin-bottom:10px;
  	}
	.pagination a.active {
    background-color: #fce205;
    color: white;
    border-radius: 5px;
  	}
  
  	.pagination a:hover:not(.active) {
    background-color: #ddd;
    border-radius: 5px;
  	}
	  table {
		font-family: 'Poppins', sans-serif;
	  }
</style>

<div id="label-page"><h5><i class="bi bi-table">&ensp;</i>Data Anggota</h5></div>
<div id="content">
    <ul>
        <li><a class="btn btn-primary" href="index.php?p=anggota-input"><i class="bi bi-person-plus-fill">&ensp;</i>Tambah Anggota</a></li>
        <li><a class="btn btn-success" href="pages/cetak.php"><i class="bi bi-printer-fill">&ensp;</i>Print Data</a></li>
    </ul>

    <FORM CLASS="form-inline" METHOD="POST">
	<form method=post>
		<div id="search">
		<input class="form" type="text" name="pencarian"><span><input type="submit" name="search" value="search" class="tombol2"></span>
		</div>			
	</form>
	</FORM>

    <!-- table -->
    <div id="table" class="container-fluid table-responsive">
        <div class="row>
            <div class="col">
            <table id="tabel-tampil" class="table table-bordered border-dark">
		<tr class="head">
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Foto</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th id="label-opsi">Tindakan</th>
		</tr>
			
		<?php
		$batas = 5;
		extract($_GET);
		if(empty($hal)){
			$posisi = 0;
			$hal = 1;
			$nomor = 1;
		}
		else {
			$posisi = ($hal - 1) * $batas;
			$nomor = $posisi+1;
		}	
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
			if($pencarian != ""){
				$sql = "SELECT * FROM tbanggota WHERE nama LIKE '%$pencarian%'
						OR idanggota LIKE '%$pencarian%'
						OR jeniskelamin LIKE '%$pencarian%'
						OR alamat LIKE '%$pencarian%'";
				
				$query = $sql;
				$queryJml = $sql;	
						
			}
			else {
				$query = "SELECT * FROM tbanggota LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tbanggota";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tbanggota LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tbanggota";
			$no = $posisi * 1;
		}
		
		//$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_anggota)>0)
		{
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
			if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_anggota['foto'];
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><img src="avatar/<?php echo $foto; ?>" width=70px height=70px></td>
			<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_anggota['alamat']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a target="_blank" href="pages/cetak_kartu.php?id=<?php echo $r_tampil_anggota['idanggota'];?>" class="cetak"><h6><i class="bi bi-printer">&ensp;</i>Cetak</h6></a></div>
				<div class="tombol-opsi-container"><a href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota'];?>" class="edit"><h6><i class="bi bi-pencil-square">&ensp;</i>Edit</h6></a></div>
				<div class="tombol-opsi-container"><a href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="hapus"><h6><i class="bi bi-trash">&ensp;</i>Hapus</h6></a></div>
			</td>			
		</tr>		
		<?php $nomor++; } 
		}
		else {
			echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
		}?>		
	</table>
            </div>
        </div>
        
    </div>
    

	<?php
	if(isset($_POST['pencarian'])){
	if($_POST['pencarian']!=''){
		echo "<div style=\"float:left;\">";
		$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
		echo "Data Hasil Pencarian: <b>$jml</b>";
		echo "</div>";
	}
	}
	else{ ?>
		<div style="float: left;">		
		<?php
			$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
			echo "Jumlah Data : <b>$jml</b>";
		?>			
		</div>		
		<div class="pagination">		
				<?php
				$jml_hal = ceil($jml/$batas);
				for($i=1; $i<=$jml_hal; $i++){
					if($i != $hal){
						echo "<a href=\"?p=anggota&hal=$i\">$i</a>";
					}
					else {
						echo "<a class=\"active\">$i</a>";
					}
				}
				?>
		</div>
	<?php
	}
	?>
</div>