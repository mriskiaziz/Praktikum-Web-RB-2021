<?php 
	
//Jawaban soal nomer 3
	if(isset($_POST['submit3'])){
		function prima($input){
			for($i=1; $i<=$input; $i++){
				$cek = true;

				if($i == 2){
					echo "$i ";
				}else if($i != 1){
					$batas = ($i-1);
					for($j=2; $j<$batas; $j++){
						if($i%$j == 0){
							$cek = false;
							break;
						}
					}
					if($cek == true){
						echo "$i ";
					}
				}
			}
			echo "</p>";
		}

		echo "<p> Bilangan prima dari 1 - 50 : <br>";
		prima(50);
	
	}
?>