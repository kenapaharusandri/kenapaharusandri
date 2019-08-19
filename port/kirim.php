<?php 

if ( isset ($_POST['submit']) ){

	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$pesan = $_POST['pesan'];

	if( mail($email, $subject, $pesan) ){
		echo 'pesan berhasil dikirim';
	}else{
		echo 'pesan gagal dikirim';
	}
}

?>

<form action="kirim.php" method="post">
	
	<input type="email" name="email" placeholder="email"></input><br>
	<input type="subject" name="subject" placeholder="subject"></input><br>
	<textarea name="pesan" rows="8" cols="40"></textarea>

	<input type="submit" name="submit" value="kirim email"></input>

</form>