<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Template</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="utils/style.css">
	<link rel="stylesheet" href="utils/responsive.css">
</head>

<body>
	<section id="topHeader" class="my-5 ">
		<div>
			<img src="images/ilhaebg.png" alt="" srcset="" class="logo">
		</div>
		<div class="header">
			<h1>Ini Judul</h1>
		</div>
		<div class="navigation ">
			<a href="">SI4</a>
			<a href="">SI4</a>
			<a href="">SI4</a>
			<a href="">SI4</a>

		</div>
	</section>
	<div class="container">
		<div class="row">
			<div>

				<div class="navigation-main mb-3">
					<a class="btn btn-primary" href="tambah.php">Tambah</a>
					<a class="btn btn-primary" href="index.php">LogOut</a>
				</div>

				<table class="table">
					<tr>
						<th>
							ID
						</th>
						<th>
							Name
						</th>
						<th>
							Text
						</th>

					</tr>
					<?php

					include "koneksi.php";

					$sql_check = "SELECT cat_id, cat_name, cat_text FROM  tb_category ORDER BY cat_id ASC";

					$result_check = $connect->query($sql_check);
					while ($row = mysqli_fetch_array($result_check)) {
					?>
						<tr>
							<td>
								<?php echo $row['cat_id']; ?>
							</td>
							<td>
								<?php echo $row['cat_name']; ?>
							</td>
							<td>
								<?php echo $row['cat_text']; ?>
							</td>
							<td>
								<a class="btn btn-primary ms-2 me-2" href="detail.php?id=<?php echo $row['cat_id']; ?>">Detail</a>
								<a class="btn btn-primary  me-2" href="edit.php?id=<?php echo $row['cat_id']; ?>">Edit</a>
								<a class="btn btn-primary" href="hapus.php?id=<?php echo $row['cat_id']; ?>">Hapus</a>
							</td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<!-- // !! ubah warna -->
	<footer class="footer-section mb-0" id="about">

		<div class="footer-left">
			<img src="images/ilhaebg.png" alt="">
			<h3>Kreasikan Sendiri ya jgn mirip ini</h3>
			<!-- property  -->
			<p class="footer-company-name">&copy; Copyright <span>Rizky Akbar</span> Si-Four. All Rights
				Reserved.</p>
		</div>

		<div class="footer-right">
			<div>
				<p style="margin: 10px; line-height: 1.5;">Alamat :<span> Jalan Merdeka dari belanda</span>
				</p>
			</div>

			<div class="telp">
				<p>
					<span>TELEPON:</span>
					061-80089992
				</p>
			</div>
			<div class="email">
				<p>
					<a href="" class="email">
						<span>Email :</span>
						jagongoding@gmail.com
					</a>
				</p>
			</div>
		</div>

		</div>
	</footer>
	<!-- Akhir Footer -->
</body>

</html>