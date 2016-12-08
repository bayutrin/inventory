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
                        <div class="muted pull-left">>_<</div>
                     </div>
                     <div class="block-content collapse in">
                        Selamat Datang
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