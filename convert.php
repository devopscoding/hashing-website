<?php
	session_start();
	if (isset($_POST['submit'])) {
		// selected option
		$set = $select_value = $_POST['algorithm'];

		if ($set == "select") {
			$_SESSION['check'] = "Select Hash algorithm";
		}
		// md2
		elseif ($set == "md2") {
			$_SESSION['msg'] = "md2 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('md2', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to md2..";
			}
		}
		// md4
		elseif ($set == "md4") {
			$_SESSION['msg'] = "md4 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('md4', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to md4..";
			}
		}
		// md5
		elseif ($set == "md5") {
			$_SESSION['msg'] = "md5 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('md5', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to md5..";
			}
		}
		// sha1
		elseif ($set == "sha1") {
			$_SESSION['msg'] = "Sha1 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('sha1', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to MD5..";
			}
		}
		// sha224
		elseif ($set == "sha224") {
			$_SESSION['msg'] = "Sha224 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('sha224', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to sha224..";
			}
		}
		// sha256
		elseif ($set == "sha256") {
			$_SESSION['msg'] = "Sha256 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('sha256', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to sha256..";
			}
		}
		// sha384
		elseif ($set == "sha384") {
			$_SESSION['msg'] = "Sha384 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('sha384', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to sha384..";
			}
		}
		// sha512
		elseif ($set == "sha512") {
			$_SESSION['msg'] = "Sha512 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('sha512', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to sha512..";
			}
		}
		// ripemd128
		elseif ($set == "ripemd128") {
			$_SESSION['msg'] = "ripemd128 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('ripemd128', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to ripemd128..";
			}
		}
		// ripemd160
		elseif ($set == "ripemd160") {
			$_SESSION['msg'] = "ripemd160 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('ripemd160', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to ripemd160..";
			}
		}
		// ripemd256
		elseif ($set == "ripemd256") {
			$_SESSION['msg'] = "ripemd256 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('ripemd256', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to ripemd256..";
			}
		}
		// ripemd320
		elseif ($set == "ripemd320") {
			$_SESSION['msg'] = "ripemd320 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('ripemd320', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to ripemd320..";
			}
		}
		// whirlpool
		elseif ($set == "whirlpool") {
			$_SESSION['msg'] = "whirlpool converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('whirlpool', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to whirlpool..";
			}
		}
		// tiger128
		elseif ($set == "tiger128,3") {
			$_SESSION['msg'] = "tiger128,3 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('tiger128,3', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to tiger128,3..";
			}
		}
		// tiger160,3
		elseif ($set == "tiger160,3") {
			$_SESSION['msg'] = "tiger160,3 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('tiger160,3', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to tiger160,3..";
			}
		}
		// tiger192,3
		elseif ($set == "tiger192,3") {
			$_SESSION['msg'] = "tiger192,3 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('tiger192,3', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to tiger192,3..";
			}
		}
		// tiger128,4
		elseif ($set == "tiger128,4") {
			$_SESSION['msg'] = "tiger128,4 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('tiger128,4', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to tiger128,4..";
			}
		}
		// tiger160,4
		elseif ($set == "tiger160,4") {
			$_SESSION['msg'] = "tiger160,4 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('tiger160,4', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to tiger160,4..";
			}
		}

		// tiger192,4
		elseif ($set == "tiger192,4") {
			$_SESSION['msg'] = "tiger192,4 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('tiger192,4', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to tiger192,4..";
			}
		}

		// snefru
		elseif ($set == "snefru") {
			$_SESSION['msg'] = "snefru converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('snefru', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to snefru..";
			}
		}

		// snefru
		elseif ($set == "snefru") {
			$_SESSION['msg'] = "snefru converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('snefru', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to snefru..";
			}
		}

		// snefru256
		elseif ($set == "snefru256") {
			$_SESSION['msg'] = "snefru256 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('snefru256', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to snefru256..";
			}
		}

		// gost
		elseif ($set == "gost") {
			$_SESSION['msg'] = "gost converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('gost', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to gost..";
			}
		}

		// gost-crypto
		elseif ($set == "gost-crypto") {
			$_SESSION['msg'] = "gost-crypto converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('gost-crypto', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to gost-crypto..";
			}
		}

		// gost-crypto
		elseif ($set == "gost-crypto") {
			$_SESSION['msg'] = "gost-crypto converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('gost-crypto', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to gost-crypto..";
			}
		}

		// adler32
		elseif ($set == "adler32") {
			$_SESSION['msg'] = "adler32 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('adler32', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to adler32..";
			}
		}

		// crc32
		elseif ($set == "crc32") {
			$_SESSION['msg'] = "crc32 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('crc32', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to crc32..";
			}
		}

		// crc32b
		elseif ($set == "crc32b") {
			$_SESSION['msg'] = "crc32b converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('crc32b', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to crc32b..";
			}
		}

		// fnv132
		elseif ($set == "fnv132") {
			$_SESSION['msg'] = "fnv132 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('fnv132', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to fnv132..";
			}
		}

		// fnv132
		elseif ($set == "fnv132") {
			$_SESSION['msg'] = "fnv132 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('fnv132', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to fnv132..";
			}
		}

		// fnvla32
		elseif ($set == "fnvla32") {
			$_SESSION['msg'] = "fnvla32 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('fnv1a32', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to fnvla32..";
			}
		}

		// fnv164
		elseif ($set == "fnv164") {
			$_SESSION['msg'] = "fnv164 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('fnv164', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to fnv164..";
			}
		}

		// fnvla64
		elseif ($set == "fnvla64") {
			$_SESSION['msg'] = "fnv1a64 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('fnv1a64', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to fnvla64..";
			}
		}

		// joaat
		elseif ($set == "joaat") {
			$_SESSION['msg'] = "joaat converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('joaat', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to joaat..";
			}
		}

		// haval128,3
		elseif ($set == "haval128,3") {
			$_SESSION['msg'] = "haval128,3 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval128,3', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval128,3..";
			}
		}

		// haval160,3
		elseif ($set == "haval160,3") {
			$_SESSION['msg'] = "haval160,3 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval160,3', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval160,3..";
			}
		}

		// haval192,3
		elseif ($set == "haval192,3") {
			$_SESSION['msg'] = "haval192,3 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval192,3', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval192,3..";
			}
		}

		// haval224,3
		elseif ($set == "haval224,3") {
			$_SESSION['msg'] = "haval224,3 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval224,3', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval224,3..";
			}
		}

		// haval256,3
		elseif ($set == "haval256,3") {
			$_SESSION['msg'] = "haval256,3 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval256,3', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval256,3..";
			}
		}

		// >haval128,4
		elseif ($set == "haval128,4") {
			$_SESSION['msg'] = "haval128,4 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval128,4', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval128,4..";
			}
		}

		// haval160,4
		elseif ($set == "haval160,4") {
			$_SESSION['msg'] = "haval160,4 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval160,4', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval160,4..";
			}
		}

		// haval192,4
		elseif ($set == "haval192,4") {
			$_SESSION['msg'] = "haval192,4 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval192,4', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval192,4..";
			}
		}

		// haval224,4
		elseif ($set == "haval224,4") {
			$_SESSION['msg'] = "haval224,4 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval224,4', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval224,4..";
			}
		}

		// haval256,4
		elseif ($set == "haval256,4") {
			$_SESSION['msg'] = "haval256,4 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval256,4', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval256,4..";
			}
		}

		// haval128,5
		elseif ($set == "haval128,5") {
			$_SESSION['msg'] = "haval128,5 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval128,5', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval128,5..";
			}
		}

		// haval160,5
		elseif ($set == "haval160,5") {
			$_SESSION['msg'] = "haval160,5 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval160,5', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval160,5..";
			}
		}

		// haval192,5
		elseif ($set == "haval192,5") {
			$_SESSION['msg'] = "haval192,5 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval192,5', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval192,5..";
			}
		}

		// haval224,5
		elseif ($set == "haval224,5") {
			$_SESSION['msg'] = "haval224,5 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval224,5', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval224,5..";
			}
		}

		// haval256,5
		elseif ($set == "haval256,5") {
			$_SESSION['msg'] = "haval256,5 converted!"; // Show the message
			$pt = $_POST['plaintext'];
			$_SESSION['pt'] = $pt; // get Plain text
			if (!empty($pt)) {
				$op = hash('haval256,5', $pt); // converted 
				// $op= $pt = md5($pt);//convert md5 
				$_SESSION['result'] = $op;
			}
			else
			{
				echo "PlainText Not converted to haval256,5..";
			}
		}
		// main else created
		else{
			$_SESSION['error'] = "algorithm not Selected..";
		}
	}
?>