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
	        				<h4>kontak</h4>
	        			</div>
	        			<hr>
	        			<?php 
	        				$q =mysqli_query($conn, 'select * from tb_user');
	        				
	        				while ($data=mysqli_fetch_assoc($q)) {
	        					echo "<a href=\"chat.php\">".$data['nama']."</a><hr>";
	        				}
	        			?>
	        		</div>
	        	</div>
	        </div>
	    </div>
	</div>
</body>
</html>