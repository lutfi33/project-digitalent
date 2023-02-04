<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
	if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_anggota['foto'];
?>

<div id="label-page2"><h5>Input Data Anggota</h5></div>
<div id="content">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<form action="proses/anggota-edit-proses.php" method="post" enctype="multipart/form-data">

		<div class="mb-3 mt-3">
			<label for="label-foto" class="form-label">Foto</label>
			<img src="avatar/<?php echo $foto; ?>" width=70px height=75px>
			<input type="file" name="foto" class="form-control form-control-sm mt-3" id="label-foto">
			<input type="hidden" name="foto_awal" value="<?php echo $r_tampil_anggota['foto']; ?>">
		</div>

		<div class="mb-3">
			<label for="label-id" class="form-label">ID Anggota</label>
			<input type="text" name="id_anggota" class="form-control form-control-sm" id="label-id"  value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled">
		</div>

		<div class="mb-3">
			<label for="label-nama" class="form-label">Nama</label>
			<input type="text" name="nama" class="form-control form-control-sm" id="label-nama"  value="<?php echo $r_tampil_anggota['nama']; ?>" class="isian-formulir isian-formulir-border">
		</div>

		<label >Jenis Kelamin</label><br>			
			<?php
			if($r_tampil_anggota['jeniskelamin']=="Pria")
			{
				echo "<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Pria' checked>Pria</label</td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Wanita'>Wanita</td>";
			}
			elseif($r_tampil_anggota['jeniskelamin']=="Wanita")
			{
				echo "<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Pria'>Pria</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='jenis_kelamin' value='Wanita' checked>Wanita</td>";
			}
			?>
			<input type="text" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>" class="form-control form-control-sm mt-2"></td>

		<div class="mb-3">
			<label for="label-alamat" class="form-label">Alamat</label>
			<textarea class="form-control form-control-sm" name="alamat" id="label-alamat"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
		</div>

		<div class="mb-3">
		<button type="submit" name="simpan" class="btn btn-warning">Simpan</button>
		</div>
		
		</form>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>