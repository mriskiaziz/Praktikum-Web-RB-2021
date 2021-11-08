<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<form method="POST">
			<h1>Soal 1</h1>
			<hr><br>
			<input type="number" name="bilangan1" placeholder="Bilangan 1"><br>
			<input type="number" name="bilangan2" placeholder="Bilangan 2"><br>
			<select name="operator">
				<option>Operator</option>
				<option>*</option>
				<option>+</option>
				<option>-</option>
				<option>/</option>
				<option>%</option>
			</select><br><br>
			<input type="submit" name="submit" class="btn">
		</form>
		<?php	include('Jawaban/nomer01.php'); ?>
	</div>

	<div>
		<form method="POST">
			<h1>Soal 2</h1>
			<hr><br>
			<input type="submit" name="submit2" value="Tampilkan" class="btn">
		</form>
		<?php	include('Jawaban/nomer02.php'); ?>
	</div>

	<div>
		<form method="POST">
			<h1>Soal 3</h1>
			<hr><br>
			<input type="submit" name="submit3" value="Tampilkan" class="btn">
		</form>
		<?php	include('Jawaban/nomer03.php'); ?>
	</div>

</body>
</html>
<style type="text/css">
	body{
		background: linear-gradient(-45deg, #23A6D5, #23D5AB);
	}
	div{
		background: rgb(255, 255, 255, 0.6);
		border: 1px solid black;
		padding: 50px;
		padding-top: 0;
		margin: 15px;
		border-radius: 5px;
	}
	p{
		font-size: 14pt;
		margin-top: 20px;
	}
	hr{
		border: 0.5px solid black;
	}
	input{
		background: rgb(255, 255, 255, 0.8);
		margin-bottom: 5px;
	}
	select{
		background: rgb(255, 255, 255, 0.8);
	}
	.btn:hover{
		background: #7FFF00;
	}
</style>
