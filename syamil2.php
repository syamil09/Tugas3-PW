
<?php 
date_default_timezone_set('Asia/jakarta');

// ambil variable menggunakan coalescing operator
$syamil1 = $_POST['syamil1'] ?? ''; // jika tidak ada isi dengan string kosong
$syamil2 = $_POST['syamil2'] ?? '';
$syamil3 = $_POST['syamil3'] ?? '';
$syamil4 = $_POST['syamil4'] ?? '';
$syamil5 = $_POST['syamil5'] ?? '';
$syamil6 = $_POST['syamil6'] ?? []; // jika tidak ada isi dengan array kosong
$syamil7 = $_POST['syamil7'] ?? '';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Report</title>
	<link rel="stylesheet" href="bs.min.css">
</head>
<body>
	<div class="container">	
		<div class="row">
			<div class="col-md-12 text-center text-muted mb-4">
				<img src="tenor.gif" alt="Success">
				<h1>Thank you! your response has been submited.</h1>
			</div>
			<div class="col-md-12">
				<h4>Reunion Form Report</h4>
				<table class="table table-bordered">
				  <tbody>
				    <tr>
				      <td><b>Would you like to join us?</b></td>
				      <td><?= $syamil1 ?></td>
				    </tr>
				    <tr>
				      <td><b>Name</b></td>
				      <td><?= $syamil2.' '.$syamil2 ?></td>
				    </tr>
				    <tr>
				      <td><b>Phone</b></td>
				      <td><?= $syamil4 ?></td>
				    </tr>
				    <tr>
				      <td><b>Your meal preference</b></td>
				      <td><?= $syamil5 ?></td>
				    </tr>
				    <tr>
				      <td><b>What kind of game are you interested in?</b></td>
				      <td>
				      	<?php 
				      		foreach ($syamil6 as $key => $value) {
				      			// jika pada index lebih dari 0 tambahkan koma sebelum value
				      			echo $key > 0 ? ",$value" : $value; 
				      		}
				      	 ?>
				      </td>
				    </tr>
				    <tr>
				      <td><b>Do you have any question?</b></td>
				      <td><?= $syamil7 ?></td>
				    </tr>
				    <tr>
				      <td><b>Added time</b></td>
				      <td><?= date('d-M-Y H:i:s') ?></td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>

