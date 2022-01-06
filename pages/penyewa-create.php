<div class="container d-flex">
	<div class="col-5" style="margin-right: 60px;">
		<h3>Tambah Data Kamar</h3>
		<br>
		<form action="proses/anggota-input-proses.php" method="post" class="form" enctype="multipart/form-data">
			<div class="input-field">
				<label for="id_anggota">ID Penyewa</label>
				<input type="text" placeholder="Masukkan kode penyewa" name="id_anggota" class="inputan">
			</div>
			<div class="input-field">
				<label for="nama">Nama Lengkap</label>
				<input type="text" placeholder="Masukkan nama lengkap" name="nama" class="inputan" required>
			</div>
			<div class="input-field">
				<label for="jenis_kelamin">Jenis Kelamin</label>
				<select class="form-control" name="jenis_kelamin" class="inputan">
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
			</div>
			<div class="input-field">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" rows="2" cols="40" placeholder="Masukkan alamat lengkap" name="alamat" class="inputan"></textarea>
			</div>
			<div class="input-field">
				<label for="foto">Upload Foto</label>
				<input class="form-control" type="file" name="foto" style="padding: 3px;">
			</div>
			<br>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success" style="width: 100%;">
		</form>
	</div>
	<div class="gambar">
		<br>
		<img src="images/login.png" alt="gambar manusia" class="gambars">
	</div>
</div>