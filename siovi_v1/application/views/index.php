<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/MDB-pro/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url('assets/MDB-pro/css/mdb.min.css')?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url('assets/MDB-pro/css/style.css')?>" rel="stylesheet">
    
<body style="background-image: <?php echo base_url('assets/image/background-image.png')?>">
    <div class="row"  style="padding-top: 100px">
        <div class="col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            
    <!-- Default form login -->
	<form class="text-center border border-light p-5" action="<?php echo base_url('index.php/authentication/login')?>" method="post">

        <p class="h4 mb-4 text-header">Sign in</p>
    
        <!-- Username -->
        <input type="text" id="username" class="form-control mb-4" placeholder="User name">
    
        <!-- Password -->
        <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Password">
    
        <div class="d-flex justify-content-around">
        </div>
    
        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
    </form>
    <!-- Default form login -->
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4"></div>
    </div>
</body>
</html>


<style type="text/css">
		body, html {
		  height: 100%; 
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.text-header{
			color: black;
		}

</style>
