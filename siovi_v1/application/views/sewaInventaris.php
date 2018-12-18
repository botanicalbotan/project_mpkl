<!DOCTYPE html>
<html>
<head>
	     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sewa Inventaris</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <!--Javascript date time picker-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


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
                            <a href="<?php echo base_url('index.php/admin/home')?>">
                                <i class="glyphicon glyphicon-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url('index.php/admin/sewa_inventaris')?>">
                                <i class="glyphicon glyphicon-book"></i>
                                Sewa Inventaris
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/admin/tambah_inventaris')?>">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    Tambah Inventaris
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-edit"></i>
                                Edit Inventaris
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
                <h1 class="text-center">Penyewaan Inventaris</h1>
                
                <hr>
                <form action="<?php echo base_url('index.php/admin/proses_sewa_inventaris')?>" method="post">
                    <div class="form-group jarak">
                        <label for="nama_peminjam">Nama Penyewa</label>
                        <input type="text" id="nama_penyewa" name="nama_penyewa" class="form-control" placeholder="Masukkan nama peminjam " required>
                    </div>

                    <div class="form-group jarak">
                        <label for="nomor_identitas">Nomor Identitas</label>
                        <input type="text" id="nomor_identitas" name="nomor_identitas" class="form-control" placeholder="Masukkan nomor identitas " required>
                    </div>

                    <div class="form-group jarak">
                        <label for="alamat_penyewa">Alamat Penyewa</label>
                        <input type="text" id="alamat_penyewa" name="alamat_penyewa" class="form-control" placeholder="Masukkan alamat rumah penyewa " required>
                    </div>

                      <div class="form-group jarak">
                        <label for="jenis_barang">Jenis Barang</label>
                        <select id="jenis_barang" name="jenis_barang" class="form-control" required>
                            <option disabled selected>Pilih...</option>
                            <option value="Kamera DSLR">Kamera DSLR</option>
                            <option value="Kamera SLR">Kamera SLR</option>
                            <option value="Handy Cam">Handy Cam</option>
                            <option value="Tripod">Tripod</option>
                            <option value="Lensa Kamera">Lensa Kamera</option>    
                        </select>
                      </div>

                    <div class="form-group jarak">
                            <label for="tanggal_sewa"">Tanggal Sewa</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" id="tanggal_sewa" name="tanggal_sewa" placeholder="DD-MM-YYYY mm : hh" required>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                    </div>

                    <div class="form-group jarak">
                            <label for="tanggal_kembali"">Tanggal Kembali</label>
                                <div class='input-group date' id='datetimepicker2'>
                                    <input type='text' class="form-control" id="tanggal_kembali" name="tanggal_kembali" placeholder="DD-MM-YYYY mm : hh" required>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                    </div>

                    <div class="form-group jarak">
                            <label for="tarif_sewa">Tarif sewa (Rp)</label>
                            <input type="text" id="tarif_sewa" name="tarif_sewa" class="form-control" placeholder="Masukkan tarif sewa ">
                    </div>

                    <div class="jarak-btn">
                    <button class="btn btn-primary padding-btn pull-right" type="submit"><i class="glyphicon glyphicon-pencil"></i>&nbsp; Simpan Peminjaman</button>
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

    $(function () {
    $('#datetimepicker1').datetimepicker({
        format:'DD/MM/YYYY hh:mm'
    });
    });

    $(function () {
    $('#datetimepicker2').datetimepicker({
        format:'DD/MM/YYYY hh:mm'
    });
    });
    </script>

</html>