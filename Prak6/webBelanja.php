<head>
	<title> Web Belanja Sederhana </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 align="center">Website Perhitungan Belanja</h1>
	<hr>

	<center>
		<form method="POST" onsubmit="tampil()">
			<table>
				<thead>
					<tr>
						<td colspan="3" align="center" width="400px" class="namajudul">MENU INPUT</td>
					</tr>
					<tr align="center" class="judul">
						<td >Nama Buah</td>
						<td >Harga per Kilo</td>
						<td >Jumlah(kg) </td>
					</tr>
				</thead>
				<tbody>
						<tr align="center">
							<td><label >Mangga</label></td>
							<td><label >Rp. 15.000</label></td>
							<td><input type="number" min="0" name="jumlahMangga" style="width: 50px" placeholder="0" value="0" ></td>
						</tr>
						<tr align="center">
							<td><label >Jambu</label></td>
							<td><label >Rp. 13.000</label></td>
							<td><input type="number" min="0" name="jumlahJambu" style="width: 50px" placeholder="0" value="0" ></td>
						</tr>
						<tr align="center">
							<td><label >Salak</label></td>
							<td><label >Rp. 10.000</label></td>
							<td><input type="number" min="0" name="jumlahSalak" style="width: 50px" placeholder="0" value="0" ></td>
						</tr>
				</tbody>
			</table>
			<button name="tambah" id="btn" >Pesan</button>
		</form>
		
		<table>
			<thead>
				<tr>
					<td colspan="3" align="center" width="400px" class="namajudul" >Daftar Belanja</td>
				</tr>
				<tr align="center" class="judul">
					<td>Nama Buah</td>
					<td>Jumlah(kg) </td>
					<td>Harga(Rupiah)</td>
				</tr>
			</thead>
			<tbody id="cetak" align="center">
				
			</tbody>
		</table>
	</center>
</body>

<?php include('OOP_webBelanja.php') ?>

<script type="text/javascript">
	function tampil() {
		var kanvas = document.getElementById('cetak');
		var teks ="";

		<?php for ($i=0; $i < $belanja->getIndex(); $i++) {  ?>

			var nama = '<?php echo $belanja->getNama($i); ?>';
			var jml = '<?php echo $belanja->getJumlah($i); ?>';
			var harga = '<?php echo $belanja->getHarga($i); ?>';
			teks += " <tr> <td> "+nama+"</td> "+" <td> "+jml+"</td> "+" <td> "+harga+"</td> </tr>";
			
		<?php } ?>

		var total = <?php echo $belanja->getTotal(); ?>	
		teks += "<tr> <td></td> <td>Total</td> <td>"+total+"</td> </tr>"

		kanvas.innerHTML = teks;

	}
	tampil();
</script>
