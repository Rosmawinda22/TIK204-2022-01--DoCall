<?php
include 'koneksi.php';
if (isset($_get['id'])) {
	$query = $dbh->query("select *from biodata where id = '$_get[id]'");
	$data = $query->fetch(pdo::fetch_assoc);
}else{
	echo "ID tidak tersedia!
	<a href='index.php'>Kembali</a>";
	exit();
}
if ($data === false){
	echo "Data tidak ditemukan!
	<a href='index.php'>Kembali</a>";
	exit();
}
?>
<h1 align="center">Edit Biodata</h1>
<fieldset style="width: 50%; margin: auto;">
	<legend>Form Input Biodata</legend>
	
	<form action="update.php" method="post">
		
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
		
		<p>
			Nama Lengkap
			
			<input type="text" name="nama" value="<?php echo $data['nama']; ?>"/>
		</p>
		
		<p>
			Jenis Kelamin
			
			<?php if ($data['jenis_kelamin'] == "Laki-laki"); ?>
			
			<input type="radio" name="jenis_kelamin" value="Laki-laki" id="laki-laki" checked/><label for="laki-laki">Laki-laki</label>"
			<input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan"/><label for="perempuan">Perempuan</label>"
			
			<?php else; ?>
			
			<input type="radio" name="jenis_kelamin" value="Laki-laki" id="laki-laki"/><label for="laki-laki">Laki-laki</label>"
			<input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" checked/><label for="perempuan">Perempuan</label>"
			
			<?php endif; ?>
		</p>
		
		<p>
			Alamat Lengkap
			
			<textarea name="alamat" cols="50" required><?php echo $data['alamat']; ?></textarea>
		</p>
		
		<p>
			Nomor Handphone
			
			<input type="text" name="no_hp" required value="<?php echo $data['no_hp']; ?>"/>
		</p>
		
		<p>
			<input type="submit" value="Simpan"/>	
			<input type="submit" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"/>
		</p>
		
	</form>
	
</fieldset>

<center><a href="index.php"> << Tabel Biodata</a></center>