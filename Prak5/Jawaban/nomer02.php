<?php
//Jawaban soal nomer 2
	if(isset($_POST['submit2'])){

		//fungsi urut
		function urut($data){
			$jml = count($data);

			//mengurutkan data dengan bubble sort
			for($i=1; $i < $jml; $i++){
				for($j=0; $j < $jml-$i; $j++){
					if( $data[$j] > $data[$j+1]){
						$temp = $data[$j];
						$data[$j] = $data[$j+1];
						$data[$j+1] = $temp;
					}
				}
			}

			return $data;
		}

		//fungsi untuk menampilkan data
		function tampil($data){
			$jml = count($data);
			
			for($i=0; $i<$jml; $i++){
				echo "$data[$i] ";
				if($i !=$jml-1){
					echo "- ";
				}
			}
			echo "</p>";
		}

		//inisiasi data
		$data = array('larine', 'aduh', 'qifuat', 'toda', 'anevi', 'samid', 'kifuat');
		
		//sebelum di urutkan
		echo "<p>Sebelum diurutkan : <br>";
		tampil($data);

		//memanggil fungsi urut
		echo "<p>Setelah diurutkan : <br>";
		$data = urut($data);
		tampil($data);
	}

?>