<?php 
require 'funcition.php';
// cek apakah tombol submit sudah di tekan
if ( isset($_POST["submit"])) {
	// cek berhasil apa engga
if(tambah($_POST) > 0 ) {
    echo"

    <script>
    alert('data berhasil ditambahkan');
    document.location.href = 'homepage.html';
    </script>
    ";
} else {
    echo "
    
    <script>
    alert('data berhasil ditambahkan');
    
    </script>
    ";
}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
    <link rel="icon" href="../asset/logofawasygy.png">
	<style type="text/css">

		
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		form {
			background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px #888888;
    margin: 50px auto;
    padding: 100px;
    width: 300px;
    padding-bottom: 20px;
    position: absolute;
    top: 60%;
    left: 30%;
    transform: translate(-50%,-70%);
		}
		input[type=text], input[type=password] {
			border-radius: 100px;
			border: none;
			box-shadow: 0px 0px 5px #888888;
			display: block;
			font-size: 16px;
			margin-bottom: 50px;
			padding: 20px;
			width: 100%;
            border-radius: 100px;
		
			padding-left: 50px;
			
			
		}
		
		.login{
			background-color: #D9D9D9;
			border-radius: 5px;
			border: none;
			color: #000;
			cursor: pointer;
			font-size: 16px;
			padding: 10px;
			width: 100%;
            
		}
        p{
            font-size: 15px;
        }
        a{
            color: #888888;
        }
		.regis {
			background-color: #D9D9D9;
            width: 300px;
            font-size: 25px;
            
		}
		h1 {
			color: #333333;
			font-size: 50px;
			position: relative;
			margin-top: 70px;
			text-align: center;
			text-transform: uppercase;
			top: -90px;
		}
		
	    
        svg{
            z-index: 1;
            padding-top: 20px;
            position: absolute;
           margin-left: 30px;
        }
        .njerousername ::placeholder{
            position: absolute;
            right: 250px;
        }
        .njeropass ::placeholder{
            position: absolute;
            right: 250px;
        }
			img{
				position: relative;
				margin-left: 65%;
                margin-top: 150px;
                width: 20%;
			}
		label{
			font-size: 20px;
			padding-right: 70px;

		}
	   
	    
    </style>
</head>
<body>
<form method="post" action="">
		
    <h1>Register</h1>
    <label for="username">Username:</label>
    <div class="njerousername"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg><input type="text" id="username" name="username" placeholder="username" required ></div>
     
      <label for="email">Email:</label>
      <div class="njeroemail"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg><input type="text" id="email" name="email" placeholder="email" required></div>





    <label for="password">Password:</label>
  <div class="njeropass"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
  </svg> <input type="password" id="password" name="password"  placeholder="password"></div>

    <button type="submit" name="submit" class="regis">register</button>

	

   
   
   
</form>
<img src="../asset/logofawasygy.png">

</body>
</html>