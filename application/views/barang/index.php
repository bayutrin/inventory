<?php foreach ($barang as $barang_item) { ?> 
	<p><?php echo $barang_item['nm_brg']; ?></p>
	<p><?php echo $barang_item['no_seri']; ?></p>
	<p><?php echo $barang_item['merk']; ?></p>
	<p><?php echo $barang_item['lokasi']; ?></p>
	<p><?php echo $barang_item['keterangan']; ?></p>
<?php } ?>