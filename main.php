<?php
	session_start();
	// md5 algoritham
	if (isset($_POST['submit'])) {
		
		$pt = $_POST['plaintext'];

		$_SESSION['pt'] = $pt; // get Plain text
		if (!empty($pt)) {
			$op= $pt = md5($pt);//convert md5 
			// echo "$op";
			$_SESSION['md5'] = $op;
		}
		else
		{
			echo "PlainText Not converted to MD5..";
		}
	}
	
	// sha1 Algoritham
	if (isset($_POST['submit'])) {
		
		$pt = $_POST['plaintext'];

		$_SESSION['pt'] = $pt; // get Plain text
		if (!empty($pt)) {
			$op= $pt = sha1($pt);//convert md5 
			// echo "$op";
			$_SESSION['md5'] = $op;
		}
		else
		{
			echo "PlainText Not converted to Sha1..";
		}
	}

?>