<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="utils/style.css">
	<link rel="stylesheet" href="utils/responsive.css">
	<title>template</title>
</head>

<body>
	<section id="topHeader" class="my-5 ">
		<div>
			<img src="images/ilhaebg.png" alt="" srcset="" class="logo">
		</div>
		<div class="header">
			<h1>Template CRUD Sederhana</h1>
		</div>
		<div class="navigation ">
			<a href="">Home</a>
			<a href="">About</a>
			<a href="">Journey</a>
		</div>
	</section>
	<?php
	include "koneksi.php";

	$no = 1;
	$sql = "SELECT * FROM tb_category WHERE cat_id = $_GET[id] ";

	$result_check = $connect->query($sql);
	$row = mysqli_fetch_array($result_check)
	?>
	<div class="container w-50">
		<p>
			<a class="btn btn-primary" href="home.php">Kembali</a>
		</p>

		<table class="table  ">
			<tr>
				<td style="width:10%;">
					ID
				</td>
				<td>
					<?php echo $row['cat_id']; ?>
				</td>
			</tr>
			<tr>
				<td>
					Name
				</td>
				<td>
					<?php echo $row['cat_name']; ?>
				</td>
			</tr>
			<tr>
				<td>
					Text
				</td>
				<td>
					<?php echo $row['cat_text']; ?>
				</td>
			</tr>

		</table>

	</div>
</body>

</html>