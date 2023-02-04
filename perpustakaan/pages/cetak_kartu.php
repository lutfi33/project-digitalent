<?php
	include "../connect.php";
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
		$foto = "admin-no-photo.jpg";
	else
		$foto = $r_tampil_anggota['foto'];
?>	
	<style>
		@media all {
			.kartu ul {
				list-style: none;
			}
			.kartu ul li {
				display: inline;
			}
		}
	</style>
	<div class="container-fluid">
		<h4>Kartu Anggota Perpustakaan</h4>
	</div>
		<div class="kartu">
			<ul>
				<li>
					<img src="../avatar/<?php echo $foto; ?>" width=70px height=75px></li>
					<p>Foto</p>
				<li>
					<p>ID Anggota : <span><?php echo $r_tampil_anggota['idanggota']; ?></span></p>
					<p>Nama :<span><?php echo $r_tampil_anggota['nama']; ?></span></p>
					<p>Jenis Kelamin : <span><?php echo $r_tampil_anggota['jeniskelamin']; ?></span></p>
					<p>Alamat <span><?php echo $r_tampil_anggota['alamat']; ?></span></p>
				</li>
			</ul>
		</div>
<script>
		window.print();
	</script>