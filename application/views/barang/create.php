<?php echo validation_errors(); ?>

<?php echo form_open('barang/create'); ?>

	<label for="nm_brg">Nama Barng</label>
	<input type="text" name="nm_brg"><br>

	<label for="no_seri">No Seri</label>
	<input type="text" name="no_seri"><br>

	<label for="merk">Merk</label>
	<input type="text" name="merk"><br>

	<label for="lokasi">Lokasi</label>
	<input type="text" name="lokasi"><br>

	<label for="keterangan">Keterangan</label>
	<input type="text" name="keterangan"><br>

	<input type="submit" name="submit" value="kirim!">	

<?php echo form_close(); ?>