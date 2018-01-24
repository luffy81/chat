<?php include_once 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>chat</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 col-md-4 col-md-offset-4">
	        	<div class="panel panel-default">
	        		
	        		<div class="panel-body">
	        			<div class="text-center">
	        				<h4>daftar</h4>
	        			</div>
	        			<hr>
	        			<form action="daftar_action.php" method="post">
							<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"><br>
	        				<input type="text" name="username" class="form-control" placeholder="username"><br>
	        				<input type="password" name="password" class="form-control" placeholder="password"><br>
	        				<button type="submit" class="btn btn-primary">Daftar</button>
	        			</form>
	        		</div>
	        	</div>
	           
	        </div>
	    </div>
	</div>
</body>
</html>