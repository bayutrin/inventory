<!DOCTYPE html>
<html>
    <head>
        <title>Tables</title>
        <link href="<?php echo base_url() ?>template/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url() ?>template/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url() ?>template/assets/styles.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url() ?>template/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.html">Inventory</a>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <!--/span-->
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="index.html"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="index.html"><i class="icon-chevron-right"></i> Tabel Barang</a>
                        </li>
                    </ul>
                </div>

                <div class="span9" id="content">
                    
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Tabel Barang</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="<?php echo site_url('barang/create');?>"><button class="btn btn-success">Tambah Barang <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                   </div>
                                    
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
        <td><?php echo $barang_item['nm_brg']; ?></td>
        <td><?php echo $barang_item['merk']; echo " - "; echo $barang_item['no_seri']; ?></td>
        <td><?php echo $barang_item['lokasi']; ?></td>
        <td><?php echo $barang_item['keterangan']; ?></td>
        <td><a class="btn btn-info" href="<?php echo site_url('barang/update/'.$barang_item['id']);?>" role="button">Edit</a>
        <a class="btn btn-danger" href="<?php echo site_url('barang/delete/'.$barang_item['id']);?>" role="button">Hapus</a></td>
                                            </tr>
    <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; 2016</p>
            </footer>
        </div>
        <!--/.fluid-container-->

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