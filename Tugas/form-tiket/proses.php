<!DOCTYPE html>
<html>
<head>
	<title>Tiket pesanan <?php echo $_POST["name"];?></title>
	<style>
		body {
			background-color: #f2f2f2;
		}
		.ticket {
			background-color: #fff;
			padding: 20px;
			margin: 20px auto;
			max-width: 500px;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
			font-family: Arial, sans-serif;
		}
		h3 {
			text-align: left;
			margin-bottom: 30px;
			text-transform: uppercase;
			font-size: 18px;
			font-weight: bold;
			color: #333;
		}
		.ticket-info {
			display: flex;
			justify-content: space-between;
			margin-bottom: 20px;
			color: #333;
			font-size: 18px;
		}
		.ticket-info span {
			font-weight: bold;
		}
		.ticket-quantity {
			margin-bottom: 10px;
			color: #333;
			font-size: 18px;
            border-bottom: solid;
		}
		.ticket-total {
			margin-bottom: 20px;
			color: #333;
			font-size: 18px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="ticket">
		<h3>Data Pemesanan Tiket Bola Seagames 2018 <br>
            Indonesia VS. Malaysia <br>
            Pukul 15.00 WIB    
        </h3>
		<div class="ticket-info">
			<span>Nama</span>
			<span><?php echo $_POST["name"]; ?></span>
		</div>
		<div class="ticket-info">
			<span>Telp</span>
			<span><?php echo $_POST["telp"]; ?></span>
		</div>
		<div class="ticket-info">
			<span>Jenis Tiket</span>
			<span><?php echo $_POST['Tiket']; ?></span>
		</div>

        <?php
            if ($_POST ["Tiket"] == "Reguler"){
                $harga_tiket = 250000;
                $total_bayar = $harga_tiket * (int) $_POST['jumlah-tiket'];
            }else
            if ($_POST["Tiket"] == "VIP"){
                $harga_tiket = 500000;
                $total_bayar = $harga_tiket*(int) $_POST["jumlah-tiket"];
            }else{
                $harga_tiket = 750000;
                $total_bayar = $harga_tiket*(int) $_POST["jumlah-tiket"];
			}
        ?>


		<div class="ticket-info">
                <span>Harga Tiket</span>
                <span>RP. <?php echo number_format($harga_tiket,0 ,',','.'); ?></span>
		</div>
        <br>
		<div class="ticket-quantity">
			Jumlah Tiket: <?php echo $_POST["jumlah-tiket"]; ?>
		</div>
		<div class="ticket-total">
			Total Bayar: Rp <?php echo number_format($total_bayar,0,',','.'); ?>
		</div>
	</div>
</body>
</html>
