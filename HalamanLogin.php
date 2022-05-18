<!DOCTYPE HTML>
<html>
    <head>
        <title>Login Page </title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if(isset($_GET["error"])){
                $error = $_GET["error"];
            }
            else{
                $error = "";
            }

            $message = "";
            if($error=="gagal"){
                $message = "Gagal login, silahkan coba kembali";
            }
        ?>
        <p style="color:red"><?php echo $message;?> </p>
        <form action="prosesLogin.php" method="post">
            <table>
            <div class="login"> 
            <h1>Login</h1>
            <label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="Uername" placeholder="Username" id="Uername" required>
				<label for="password"><br><br>
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="Password" placeholder="Password" id="password" required><br><br>
				<input type="submit" value="Login"><br><br>
                </form>
		    </div>

        </form>
    </body>
</html>
