<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Yordas search using Codeignitor</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

	<style type="text/css">
	body{padding:2%;}
	.logo{width:12%;}

	</style>
</head>
<body>

<div id="container">
	<div class="row justify-content-md-center p-3"><img class= "logo"src="yordas_logo.jpg" alt="yordas logo"></div>
	<h2 class="text-center bg-primary text-white p-2">Search page</h2>	
	<div class ="row">
		<div class="input-group mb-3">
		<div class="row">
			<form action="<?php  echo base_url("welcome/search"); ?>" method="post">
			  <input type="text" name= "search" class="form-control" placeholder="Enter EC number" aria-label="Enter EC number" aria-describedby="basic-addon2">
			  <div class="input-group-append">
				<button type="submit" class="input-group-text" id="basic-addon2">Search</button>
			  </div>
			  </form>
			  </div>
		  <table class="table table-hover">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Substance ID</th>
				  <th scope="col">Substance Name</th>
				  <th scope="col">EC Number</th>
				  <th scope="col">CAS Number</th>
				  <th scope="col">Related Info</th>
				</tr>
			  </thead>
			  <body>
			<?php if(isset($data)) { 
			$i = 1;
			foreach($data as $d) {
			?>
				<tr>
				  <th scope="row"><?php $i++ ; ?></th>
				  <td><?php echo $d->substance_id;?></td>
				  <td><?php echo $d->substance_name;?></td>				  
				  <td><?php echo $d->ec_number;?></td>
				  <td><?php echo $d->cas_num;?></td>
				  <td><?php echo $d->related_info;?></td>
				</tr>
			<?php } } ?>

				
			  </tbody>
			</table>
		</div>
	</div>
</div>

</body>
</html>