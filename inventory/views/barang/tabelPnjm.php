<?php
  $this->load->view('barang/templates/headerTemplate');
?>
   <body>
      <div class="navbar navbar-fixed-top">
         <div class="navbar-inner">
            <div class="container-fluid">
               <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </a>
               <a class="brand" href="index.html">Inventory</a>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row-fluid">
            <div class="span3" id="sidebar">
              <?php
                $this->load->view('barang/templates/menu');
              ?>
            </div>
            <div class="span9" id="content">
               <div class="row-fluid">
                  <div class="block">
                     <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Pinjam Barang</div>
                     </div>
                     <div class="block-content collapse in">
                        <div class="span12">
                           <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                              <thead>
                                 <tr>
                                    <th>Nama Barang</th>
                                    <th>Merk (No Seri)</th>
                                    <th>Lokasi</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($barang as $barang_item) { ?>
                                  <tr class="odd gradeX">

        <td><?php echo $barang_item['nm_brg']; if ($barang_item['pinjam'] != null) {
            echo "**";
          }?></td>
        <td><?php echo $barang_item['merk']; echo " - "; echo $barang_item['no_seri']; ?></td>
        <td><?php echo $barang_item['lokasi']; ?></td>
        <td><?php echo $barang_item['keterangan']; ?></td>
        <td>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo $barang_item['id']; ?>">
          Pinjam
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal<?php echo $barang_item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                  <p class="text-center">
                  <?php if (($barang_item['keterangan'] == 'Rusak') && ($barang_item['pinjam'] == null)) { ?>
                    WARNING !!!
                  <?php } else if (($barang_item['keterangan'] == 'Rusak') && ($barang_item['pinjam'] != null)) { ?>
                    WARNING !!!
                  <?php } else if (($barang_item['keterangan'] == 'Baik') && ($barang_item['pinjam'] != null)) { ?>
                    WARNING !!!
                  <?php } else { ?>
                    WARNING !!!
                  <?php } ?>
                  </p>
                </h4>
              </div>
              <div class="modal-body">
                <?php if (($barang_item['keterangan'] == 'Rusak') && ($barang_item['pinjam'] == null)) { ?>
                  <p class="text-center">Barang dalam kondisi rusak</p>
                  <p class="text-center">Apakah anda ingin meminjam ???</p>
                <?php } else if (($barang_item['keterangan'] == 'Rusak') && ($barang_item['pinjam'] != null)) { ?>
                  <p class="text-center">Sudah ada yang meminjam </p>
                <?php } else if (($barang_item['keterangan'] == 'Baik') && ($barang_item['pinjam'] != null)) { ?>
                  <p class="text-center">Sudah ada yang meminjam </p>
                <?php } else { ?>
                  <p class="text-center">Apakah benar anda ingin meminjam : <br/> 
                    Nama Barang : <?php echo $barang_item['nm_brg']; ?><br/> 
                    Merk : <?php echo $barang_item['merk']; ?><br/> 
                    No Seri : <?php echo $barang_item['no_seri']; ?><br/> 
                    Lokasi : <?php echo $barang_item['lokasi']; ?>
                  </p>
                <?php } ?>
              </div>
              <div class="modal-footer">
                <?php if ($barang_item['pinjam'] == null) { ?> 
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                  <a class="btn btn-info" href="<?php echo site_url('barang/pinjam/'.$barang_item['id']);?>" role="button">Ya</a>
                <?php } else { ?>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                <?php } ?>
              </div>
            </div>
          </div>
        </div></td>

                                  </tr>         
                              <?php } ?>
                              </tbody>
                              <p>** = ada yang meminjam</p>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <hr>

      <footer>
         <p>&copy; 2016</p>
      </footer>
      </div>

      <script src="<?php echo base_url() ?>template/vendors/jquery-1.9.1.js"></script>
      <script src="<?php echo base_url() ?>template/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url() ?>template/vendors/datatables/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url() ?>template/assets/scripts.js"></script>
      <script src="<?php echo base_url() ?>template/assets/DT_bootstrap.js"></script>
      <script>
      $(function() {
            
      });
      </script>
   </body>
</html>