<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="http://localhost/simonsi/public/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="http://localhost/simonsi/public/css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" action="index.php?simonsi=registered" class="appointment-form" id="appointment-form">
                <h2> register</h2>
                <div class="form-group-1">
                    <input type="number" name="nim" id="nim" placeholder="nim" required />
                    <input type="text" name="name" id="name" placeholder="nama" required />
                    <input type="email" name="email" id="email" placeholder="email" required />
                    <input type="password" name="passwd" id="passwd" placeholder="password"/>
                    <div class="select-list">
                        <select name="prodi" id="confirm_type" >
                            <option disabled selected >Prodi</option>
                            <?php
                                foreach($prodis as $prodi){
                                    ?>
                                        <option value="<?php echo $prodi['id'] ?>"><?php echo $prodi['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="select-list">
                        <select name="hour_appointment" id="hour_appointment">
                            <option selected disabled>Kelas</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">h</option>
                        </select>
                    </div>
                    <input type="hidden" name="role" id="role" value="1"/>
                </div>
                <div class="form-check">
                    <!-- <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" /> -->
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>teu gaduh akun.?  <a href="http://localhost/simonsi/register" class="term-service">daftar we di dieu</a></label>
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>