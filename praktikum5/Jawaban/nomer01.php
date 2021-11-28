<?php

	//Jawaban Soal Nomer 1
		if( isset($_POST['submit']) ){

			//fungsi untuk menampilkan
			function tampil($jenis, $operator, $hasil){
				echo "<p> $jenis <br>";
				echo "Operator : $operator <br>";
				echo "Hasil : $hasil</p>"; 
			}

			//fungsi untuk melakukan operasi pada bilangan
			function hitung($operator, $bil1, $bil2){
				$hasil = 0;
				$jenis = '';
				if($operator == '+'){
					$jenis = "PENJUMLAHAN";
					$hasil = $bil1 + $bil2;
				}else if($operator == '-'){
					$jenis = "PENGURANGAN";
					$hasil = $bil1 - $bil2;
				}else if($operator == '*'){
					$jenis = "PERKALIAN";
					$hasil = $bil1 * $bil2;
				}else if($operator == '/'){
					$jenis = "PEMBAGIAN";
					$hasil = $bil1 / $bil2;
				}else{
					$jenis = "MODULUS";
					$hasil = $bil1 % $bil2;
				}

				tampil($jenis, $operator, $hasil);
			}

			//menyimpan 2 bilangan dan operator
			$bil1 = $_POST['bilangan1'];
			$bil2 = $_POST['bilangan2'];
			$operator = $_POST['operator'];

			//memastikan bahwa input tidak kosong
			if($bil1 != '' && $bil2 != '' && $operator != 'Operator'){
				//memanggil fungsi hitung
				echo "<p>Bilangan 1 = $bil1 <br>";
				echo "Bilangan 2 = $bil2 </p>";
				
				hitung($operator, $bil1, $bil2);
			}
		}
?>