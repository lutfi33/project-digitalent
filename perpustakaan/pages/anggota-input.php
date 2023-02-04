<div id="label-page2"><h5>Input Data Anggota</h5></div>
<div id="content">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<form action="proses/anggota-input-proses.php" method="post" enctype="multipart/form-data">

		<div class="mb-3">
			<label for="label-foto" class="form-label">Foto</label>
			<input type="file" name="foto" class="form-control form-control-sm" id="label-foto">
		</div>

		<div class="mb-3">
			<label for="label-id" class="form-label">ID Anggota</label>
			<input type="text" name="id_anggota" class="form-control form-control-sm" id="label-id">
		</div>

		<div class="mb-3">
			<label for="label-nama" class="form-label">Nama</label>
			<input type="text" name="nama" class="form-control form-control-sm" id="label-nama">
		</div>

		<label>Jenis Kelamin</label>
        <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="label_gender" value="Pria">
            <label class="form-check-label" for="label_gender" >Pria</label>
        </div>
        <div class="form-check mb-3">
        	<input class="form-check-input" type="radio" name="jenis_kelamin" id="label_wanita" value="Wanita" checked>
            <label class="form-check-label" for="label_wanita" >Wanita</label>
        </div>
		
		<div class="mb-3">
			<label for="label-alamat" class="form-label">Alamat</label>
			<textarea class="form-control form-control-sm" name="alamat" id="label-alamat"></textarea>
		</div>

		<div class="mb-3">
		<button type="submit" name="simpan" class="btn-warning">Simpan</button>
		</div>
		
		</form>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>