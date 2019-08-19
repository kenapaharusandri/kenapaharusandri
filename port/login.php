<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style-1.css"> <!-- pemanggilan file css untuk style pada file index-1.html -->
    <link href="edit.jpg" rel="shortcut icon">

    <meta name="viewport" content="width=device-width , initial-scale=1">

<style type="text/css">
	
* {
  padding: 0px;
  margin: 0px;
  font-family: "Montserrat", sans-serif;
}

#login {
  width: 100%;
  height: 100vh;
  background-color: grey;
 /* background-image: url("img/Poly-Lakeside.jpg");*/
  background-image: url("https://images.pexels.com/photos/34153/pexels-photo.jpg?w=940&h=650&auto=compress&cs=tinysrgb");
  background-size: cover;
  background-repeat: no-repeat;
  position: absolute;
}

.logintext{
	color: black;
}

.center {
  width: 350px;
  height: auto;
  margin: 0 auto;
  margin-top: 100px;
  background-color: #f0f0f0;
  box-shadow: 2px 2px 16px 0px white;
  padding: 40px;
}

.center h2 {
  font-size: 40px;
  text-align: center;
  color: black;
  padding-bottom: 40px;
}

.fl {
  width: 100%;
}

.itpw {
  width: 92%;
  padding: 13px 10px;
  margin: 5px 0px;
  background-color: #dbdbdb;
  border: 3px solid #dbdbdb;
  color: #757575;
  transition: all 0.7s;
}

.its {
  width: 99.7%;
  font-size: 19px;
  color: #f5f5f5;
  padding: 12px;
  margin: 5px 0;
  background-color: black;
  border: none;
  transition: all 0.4s;
}

.itpw:focus {
  border-bottom: 3px solid black;
  color: #004d40
}

.its:hover , .its:focus {
  opacity: 0.7;
  cursor: pointer;
}

.center p {
  margin: 20px 0;
  text-align: center;
  font-size: 14px;
}

.center p a {
  color: #757575;
}

@media screen and (min-width:1500px) {

  .center {
    width: 350px;
  }

}

@media screen and (max-width:900px) {
  #login {
    background-size: 100% 100%;
  }

  .its {
    width: 100%;
  }

  .itpw {
    font-size: 14px;
    width: 90%;
    padding: 13px 3%;
  }

  .center {
    width: 230px;
  }

  .center p {
    font-size: 12px;
  }

}

@media screen and (max-width:350px) {
  .center {
    padding: 20px;
    width: 75%;
  }
}


</style>

  </head>
  <body>

    <div id="login"><!-- membuat sebuah div id dengan tujuan sebagai background utama  -->
      <div class="center"><!-- div dengan class center bertujuan untuk membuat posisi tag form yang akan dibuat akan menjadi rata tengah -->

          <h2 class="logintext">Login</h2> <!-- membuat judul pembuka -->

          <form class="fl" action="" method="post">
            <input class="itpw" type="text" name="username" placeholder="Username or Email"><br>
            <input class="itpw" type="password" name="password" placeholder="Password"><br>
            <input class="its" type="submit" name="login" value="LOGIN">
          </form>

          <!-- <p><a href="#">Forget your password ?</a> | <a href="#">Created an account</a>  </p> -->

      </div>
    </div>

  </body>
</html>

<?php 

require_once('db.php');

	if(isset($_POST['submit'])){
		$nama = $_POST['$nama'];
		$pass = $_POST['$pass'];
	}

	if(!empty(trim($nama)) && !empty(trim($pass))){

	if(cekdata($nama, $pass)){
		header('Location : index.php');
	}else{
		echo 'ada masalah saat login';
	}
}

?>