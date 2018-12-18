<!DOCTYPE html>
<html>
<head>
	     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Tambah Inventaris</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
       <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/style4.css')?>">
        
    
   

    
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
                        <li>
                            <a href="<?php echo base_url('index.php/admin/home')?>" data-toggle="collapse" aria-expanded="false">
                                <i class="glyphicon glyphicon-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url('index.php/admin/tambah_inventaris')?>">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    Tambah Inventaris
                            </a>
                        </li>

  <li>

                        <a href="<?php echo base_url('index.php/admin/sewa_inventaris')?>">

                            <i class="glyphicon glyphicon-book"></i>

                            Sewa Inventaris

                        </a>

                    </li>
                         <li>
                            <a href="#">
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
            

                <!---FORM-->
                <h1 class="text-center">Tambah Inventaris</h1>
                
                <hr>
                <form action="<?php echo base_url('index.php/admin/proses_tambah_inventaris')?>" method="post">
                    <div class="form-group jarak">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" id="kode_barang" name="kode_barang" class="form-control" placeholder="Masukkan kode barang " required>
                    </div>

                      <div class="form-group jarak">
                        <label for="jenis_barang">Jenis Barang</label>
                        <select id="jenis_barang" name="jenis_barang" class="form-control">
                            <option disabled selected>Pilih...</option>
                            <option value="Kamera DSLR">Kamera DSLR</option>
                            <option value="Kamera SLR">Kamera SLR</option>
                            <option value="Handy Cam">Handy Cam</option>
                            <option value="Tripod">Tripod</option>
                            <option value="Lensa Kamera">Lensa Kamera</option>    
                        </select>
                      </div>

                    <div class="form-group jarak">
                            <label for="tipe_barang">Nomor Tipe Barang</label>
                            <input type="text" id="tipe_barang" name="tipe_barang" class="form-control" placeholder="Masukkan tipe barang ">
                            <small>*Isi jika barang memiliki nomor tipe.</small>
                    </div>

                    <div class="form-group jarak">
                            <label for="investor">Nama Investor</label>
                            <input type="text" id="investor" name="investor" class="form-control" placeholder="Masukkan nama investor barang ">
                            <small>*Isi jika barang adalah investasi orang lain.</small>
                    </div>

                    <div class="input-group jarak">
                            <div class="custom-file jarak">
                                <label  for="input_image">Choose file</label>
                                <input type="file"  id="input_image">
                            </div>
                    </div>

                    <div class="jarak-btn">
                    <button class="btn btn-primary padding-btn pull-right" type="submit"><i class="glyphicon glyphicon-pencil"></i>&nbsp; Simpan Barang</button>
                    </div>
                </form>
                

                <!--/FORM-->
        </div>
    </div>
</body>

<style>
.jarak{
    padding-bottom: 8px;
}

.jarak-btn{
    padding-top: 15px;
}

.padding-btn{
    padding-top: 12px;
    padding-bottom: 12px
}
</style>

   <script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
                });
    });
    </script>

</html>
