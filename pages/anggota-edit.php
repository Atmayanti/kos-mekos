<?php
$id_anggota = $_GET['id'];
$q_tampil_anggota = mysqli_query($db, "SELECT * FROM penyewa WHERE idanggota='$id_anggota'");
$r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota);
if (empty($r_tampil_anggota['foto']) or ($r_tampil_anggota['foto'] == '-'))
	$foto = "profil.png";
else
	$foto = $r_tampil_anggota['foto'];
?>
<style>
	.isian-formulir {
		margin-bottom: 10px;
		border: none;
		width: 100%;
		height: 100%;
		padding-left: 10px;
	}

	table,
	h3 {
		margin-left: 12%;
	}
</style>
<div id="label-page">
	<br>
	<h3>Edit Data Penyewa</h3><br>
</div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="post" enctype="multipart/form-data">
		<table class="table table-bordered table-hover col-9" id="tabel-input">
			<tr>
				<th class="col-4 label-formulir">&nbsp;&nbsp;FOTO</th>
				<td class="isian-formulir">
					<img src="images/<?php echo $foto; ?>" width=70px height=75px style="margin-bottom: 10px;">
					<input class="btn btn-white" type="file" name="foto" class="isian-formulir isian-formulir-border">
					<input type="hidden" name="foto_awal" value="<?php echo $r_tampil_anggota['foto']; ?>">
				</td>
			</tr>
			<tr>
				<th class="col-4 label-formulir">&nbsp;&nbsp;ID Anggota</th>
				<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
			</tr>
			<tr>
				<th class="col-4 label-formulir">&nbsp;&nbsp;Nama</th>
				<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" class="isian-formulir isian-formulir-border"></td>
			</tr>
			<tr>
				<th class="col-4 label-formulir">&nbsp;&nbsp;Jenis Kelamin</th>
				<?php
				if ($r_tampil_anggota['jeniskelamin'] == "Pria") {
					echo "<td>
				<select name='jenis_kelamin' class='isian-formulir'>
                    <option value='Pria' selected>Pria</option>
                    <option value='Wanita'>Wanita</option>
                </select></td>";
				} else {
					echo "<td>
				<select name='jenis_kelamin' class='isian-formulir'>
                    <option value='Pria'>Pria</option>
                    <option value='Wanita' selected>Wanita</option>
                </select></td>";
				}
				?>
			</tr>
			<tr>
				<th class="col-4 label-formulir">&nbsp;&nbsp;Alamat</th>
				<th class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea></th>
			</tr>
		</table>
		<p class="text-center"><input class="text-center btn btn-danger text-white" type="submit" name="simpan" value="Simpan" id="tombol-simpan"></p>
	</form>
	<br>
</div>