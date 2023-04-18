<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Form <?php echo $_POST["first-name"]?></title>
	<style>
		body {
			font-family: 'Open Sans', sans-serif;
			background-color: #F8F9FA;
			margin: 0;
			padding: 0;
		}

		.container {
			margin: 0 auto;
			max-width: 600px;
			padding: 30px;
			background-color: #FFFFFF;
			box-shadow: 0px 3px 3px #C9CCD1;
		}

		h2 {
			margin: 0;
			text-align: center;
			font-weight: 700;
			font-size: 36px;
			color: #303F9F;
			margin-bottom: 20px;
			line-height: 1.5;
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		.biodata {
			margin-bottom: 15px;
			padding-bottom: 10px;
			border-bottom: 1px solid #C9CCD1;
			display: flex;
			flex-direction: row;
			align-items: baseline;
		}

		.label {
			flex: 1;
			font-size: 18px;
			font-weight: 600;
			color: #555555;
		}

		.value {
			flex: 2;
			font-size: 18px;
			color: #000000;
			font-weight: 500;
		}

		.label::after {
			content: ':';
			padding-right: 5px;
			color: #303F9F;
			font-weight: 700;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Biodata Anda</h2>
		<div class="biodata">
			<div class="label">Nama</div>
			<div class="value"><?php echo $_POST['first-name']; ?></div>
		</div>
		<div class="biodata">
			<div class="label">Gender</div>
			<div class="value"><?php echo $_POST['gender']; ?></div>
		</div>
		<div class="biodata">
			<div class="label">Hobby</div>
			<div class="value">
					<?php foreach ($_POST['hobby'] as $hobby) { 
						 echo $hobby  . "<br>";
					 }?>
		</div>
		</div>
		<div class="biodata">
			<div class="label">Pendidikan</div>
			<div class="value"><?php echo $_POST['pendidikan']; ?></div>
		</div>
		<div class="biodata">
			<div class="label">Alamat</div>
			<div class="value"><?php echo $_POST['alamat']; ?></div>
		</div>
	</div>
</body>
</html>
