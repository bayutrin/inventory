<?php
  $this->load->view('barang/templates/header');
?>
  	<body>
		<?php echo validation_errors(); ?>
		<?php echo form_open('barang/pinjam/'.$barang_item['id']); ?>	
		<form class="form-horizontal">
		  	<div class="form-group">
		    	<label for="pinjam" class="col-sm-2 control-label">Nama Peminjam</label>
		    	<div class="col-sm-10">
		      	<input type="text" class="form-control" name="pinjam" value="<?php echo $barang_item['pinjam']; ?>">
		    	</div>
		 	</div>
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