<!DOCTYPE HTML>
<html>
    <head>
        <title>Masuk Login</title>
        <link rel="stylesheet" href="style_login1.css">
    </head>
   
    <body>
		<div style="color:lightblue; position: absolute;left: 510px;top: 120px; 
		font-size: 18px;">
			<h1>ADMIN PERPUSTAKAAN UMUM<h1>
		</div>
        <div class="container">
          <h1>Login</h1>
            <form method="post" action="cek_login.php">
                <label>Username</label><br>
                <input type="text" name="user"><br>
                <label>Password</label><br>
                <input type="password" name="pass"><br>
                <button type="submit"  name="submit">Login</button>				
            </form>
        </div>     
    </body>
</html>

