<?php foreach ($barang as $barang_item) { ?> 
	<p><?php echo $barang_item['nm_brg']; ?></p>
	<p><?php echo $barang_item['no_seri']; ?></p>
	<p><?php echo $barang_item['merk']; ?></p>
	<p><?php echo $barang_item['lokasi']; ?></p>
	<p><?php echo $barang_item['keterangan']; ?></p>
	<a href="<?php echo site_url('barang/update/'.$barang_item['id']);?>">Edit</a>
	<a href="<?php echo site_url('barang/delete/'.$barang_item['id']);?>">Hapus</a>
<?php } ?>