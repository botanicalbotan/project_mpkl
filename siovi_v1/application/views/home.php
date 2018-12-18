<!DOCTYPE html>
<html>
<head>
	     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Home</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src=" https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
   
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('/assets/style4.css')?>">
    
   

    
</head>
<body>

 <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Omah Visual</h3>
                    <strong>OVI</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="<?php echo base_url('index.php/admin/home')?>" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>
                  <li>
                        <a href="<?php echo base_url('index.php/admin/tambah_inventaris')?>">
                                <i class="glyphicon glyphicon-plus"></i>
                                Tambah Inventaris
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/edit_inventaris2')?>">
                            <i class="glyphicon glyphicon-edit"></i>
                            Edit Inventaris
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/logout')?>">
                            <i class="glyphicon glyphicon-log-out"></i>
                            Logout 
                        </a>
                    </li>
                 
                </ul>
            </nav>


			<div id="content">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>
                    </div>
                </nav>

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Jenis Barang</th>
                    <th>Tipe Barang</th>
                    <th>Kode Barang</th>
                    <th>Status</th>
                    <!----
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    --->
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th>Jenis Barang</th>
                    <th>Tipe Barang</th>
                    <th>Kode Barang</th>
                    <th>Status</th>
 <!---
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    -->
                </tr>
            </tfoot>
        </table>

</div>
</div>
</body>

   <script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
                });
    });

    $(document).ready(function() {
        $('#example').DataTable({
            responsive:true,
                "processing": true,
                "serverSide": true,
                "ajax": "<?php echo base_url('index.php/admin/tampil_datatables'); ?>"
        });
	});
    </script>

</html>