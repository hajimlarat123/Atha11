<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" type="text/css" href="media.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
</head>
<body>
<center><div class="box_login">
        <h1 style="text-align:center;text-size:70px">LOGIN</h1>
            <p style="text-align:center;font-size: 20px;">Silahkan Masukan Data Anda</p>
        <form action="Menuutama.php" method="GET" style="text-align:center">
        <!-- memasukan username -->
		    <label>L O G I N</label>
		    <input type="text" name="username" class="form_login" placeholder="Username">
        <!-- memasukan password -->
		    <input type="text" name="password" class="form_login" placeholder="Password">
        <!-- tombol login -->
		    <input type="submit" class="tombol_login" value="LOGIN">
            </form>
        </div></center>
</body>
</html>
