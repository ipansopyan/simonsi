<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simonsi Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="http://localhost/simonsi/public/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="http://localhost/simonsi/public/home/assets/vendor/bootstrap/css/bootstrap.min.css">
    

    <!-- Main css -->
    <link rel="stylesheet" href="http://localhost/simonsi/public/css/style.css">
</head>
<body>

    <div class="main">
        <?php if ($_SESSION['pesan'] == 1) {
					echo $_SESSION['isi'];
				} 
			$_SESSION['pesan'] = 0;
		?>
        <div class="container">
            <form method="POST" action="index.php?simonsi=logged" class="appointment-form">
                <h2> Login</h2>
                <div class="form-group-1">
                    <input type="number" name="nim" id="nim" placeholder="nim" required />
                    <input type="password" name="password" id="password" placeholder="password"/>
                </div>
                <div class="form-check">
                    <!-- <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" /> -->
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>teu gaduh akun.?  <a href="http://localhost/simonsi/index.php?simonsi=register" class="term-service">daftar we di dieu</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Login" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="http://localhost/simonsi/public/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/simonsi/public/js/main.js"></script>
    <script src="http://localhost/simonsi/public/home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>