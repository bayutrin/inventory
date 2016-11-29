<!DOCTYPE html>
<html lang="en">
  	<head>
	   <meta charset="utf-8">
	   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <title>Tambah Barang</title>
	   <link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
   </head>
  	<body>
    	<?php echo validation_errors(); ?>
		<?php echo form_open('barang/create'); ?>
		<form class="form-horizontal">
		  	<div class="form-group">
		    	<label for="nm_brg" class="col-sm-2 control-label">Nama Barng</label>
		    	<div class="col-sm-10">
		      	<input type="text" class="form-control" name="nm_brg" placeholder="Nama Barng">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="merk" class="col-sm-2 control-label">Merk</label>
		    	<div class="col-sm-10">
		      	<input type="text" class="form-control" name="merk" placeholder="Merk">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="no_seri" class="col-sm-2 control-label">No Seri</label>
		    	<div class="col-sm-10">
		      	<input type="text" class="form-control" name="no_seri" placeholder="No Seri">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
		    	<div class="col-sm-10">
		      	<input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
		    	<div class="col-sm-10">
		      	<input type="radio" name="keterangan" value="Baik" checked>
			    	Baik<br>
			    	<input type="radio" name="keterangan" value="Rusak &mdash; ">
			    	Rusak &mdash; jatuh
		    	</div>
		  	</div><br>
		  	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      	<button type="submit" class="btn btn-success" name="submit">Kirim</button>
		    	</div>
		  	</div>
		</form>
		<?php echo form_close(); ?>

	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	   <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>