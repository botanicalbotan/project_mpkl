<!DOCTYPE html>
<html>
<head>
	     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Edit Barang</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src=" https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  

   
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
                    <li>
                        <a href="<?php echo base_url('index.php/admin/home')?>">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
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
                    <li class="active">
                        <a href="<?php echo base_url('index.php/admin/edit_inventaris')?>">
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

                <div class="form-group input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
  <input name="query" id="txt_query" placeholder="Search" type="text" class="form-control">
</div>

<table id="table" class="table table-hover table-bordered">
 <thead>
     <tr>
        <th>Jenis Barang</th>
        <th>Tipe Barang</th>
        <th>Kode Barang</th>
        <th style="width:85px; text-align:center">Edit</th>
        <th style="width:85px; text-align:center">Hapus</th>
     </tr>
 </thead>
 <tbody>
    <?php foreach($data_inventaris as $inventaris){ ?>
     <tr>
         <td><?php echo $inventaris->jenis_barang;?></td>
         <td><?php echo $inventaris->tipe_barang;?></td>
         <td><?php echo $inventaris->kode_barang;?></td>
         <td>
         <a
         href="javascript:;"
         id_inventaris="<?php echo $inventaris->id_inventaris; ?>"
         jenis_barang2="<?php echo $inventaris->jenis_barang; ?>"
         tipe_barang="<?phpecho $inventaris->tipe_barang;?>"
         kode_barang="<?php echo $inventaris->kode_barang; ?>"
         data-toggle="modal" data-target="#edit">
         <button style="width:80px; height:30px" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit-data" data-placement="top" rel="tooltip">
         <span class="glyphicon glyphicon-pencil"></span></button></p>
         </a>
         </td>
         <td>
         <p><button style="width:80px; height:30px" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">
         <span class="glyphicon glyphicon-trash"></span></button></p>
         </td>
     </tr>
    <?php } ?>
 </tbody>
</table>



<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Edit Inventaris</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
          <input type="hidden" id="id_inventaris" name="id_inventaris">
        <input class="form-control" id="jenis_barang" name="jenis_barang" type="text" placeholder="Jenis Barang">
        </div>
        <div class="form-group">    
        <input class="form-control" id="tipe_barang" type="text" placeholder="Tipe Barang">
        </div>
        <div class="form-group">
        <input type="text" id="kode_barang" class="form-control" placeholder="Kode Barang">
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-primary btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>


    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Hapus inventaris</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Anda yakin ingin menghapus inventaris ini?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

</body>

   <script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
                });
    });

    $(document).ready(function() {
	        // Untuk sunting
	        $('#edit').on('show.bs.modal', function (event) {
	            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
	            var modal          = $(this)
                
                // Isi nilai pada field
	            modal.find('#id_inventaris').attr("value",div.data('id_barang'));
	            modal.find('#jenis_barang').attr("value",div.data('jenis_barang2'));
	            modal.find('#tipe_barang').html(div.data('tipe_barang'));
	            modal.find('#kode_barang').attr("value",div.data('kode_barang'));
	        });
	    });

    $('input#txt_query').quicksearch('table#table tbody tr');

</script>

</html>