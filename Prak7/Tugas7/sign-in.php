<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Sign In</title>
</head>

<body>

    <div class="container" >
        <div class="row my-5">
            <div class="col-md-6 text-center login " style="background: rgb(255, 255, 224, 0.3); border-radius: 30px;">
                <h4 class="fw-bold">Daftar Akun</h4>
                <form action="" method="post">
                    <div class="form-group user">
                        <input type="text" class="form-control w-50" placeholder="Masukkan Username" name="username" autocomplete="off" required>
                    </div>
                    <div class="form-group my-5">
                        <input type="password" class="form-control w-50" placeholder="Masukkan Password" name="password" autocomplete="off" required>
                    </div>
                    <button class="btn btn-primary text-uppercase" type="submit" name="daftar">Daftar</button>

                    <a class="btn btn-primary text-uppercase" href="login.php">Ke Menu Login</a>
                </form>
                <br>
                <?php 

                $koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

                if ( isset($_POST['daftar'])){
                	if ( $_POST['username'] != "" && $_POST['password'] != "" ) {
              			
						$username = $_POST['username'];
						$password = $_POST['password'];
						
						$sql = "INSERT INTO user VALUES ('$username', '$password')";
						$process = mysqli_query($koneksi, $sql);
					
	                	if(!$process){
	                		echo "<h6 >Gagal Mendaftar!!! username Anda telah terdaftar</h6>";
						}else{
							echo "<h6 >Berhasil Mendaftar</h6>";
						}
                	}
                }

                ?>

            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>

<style type="text/css">
    body{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: linear-gradient(-45deg, #E73C7E, #23A6D5);
    background-size: 400% 400%;
    position: relative;
    animation: change 10s ease-in-out infinite;
    text-transform: uppercase;
}
@keyframes change {
    0%{
        background-position: 0 50% ;
    }
    50%{
        background-position: 100% 50% ;
    }
    100%{
        background-position: 0 50% ;
    }
}


.navbar-brand{
    font-family: 'Righteous', cursive;
}

.login {
    border: 0;
    height: 500px;
    margin: auto;
}

.login h4{
    margin-top: 100px;
}

form .form-group input{
    margin: auto;
}

form .user input{
    margin: auto;
    margin-top: 70px;
}
</style>