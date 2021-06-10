<?php
	// Include other File to access to use algorithm
	include("convert.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This all tool are Free to Generate hash algorithm like md5,md2,sha1,md2,sha256,tiger128.3 etc."> 
	<meta name="keywords" content="hash,algorithm,hash algorithm,encode,all hash,list, hash calculator, md5calc,md2, md4, md5, sha1, sha224, sha256, sha384, sha512/224, sha512/256, sha512, sha3-224, sha3-256, sha3-384, sha3-512, ripemd128, ripemd160, ripemd256, ripemd320, whirlpool, tiger128.3, tiger160.3, tiger192.3, tiger128.4, tiger160.4, tiger192.4, snefru, snefru256, gost, gost-crypto, adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat, haval128.3, haval160.3, haval192.3, haval224.3, haval256.3, haval128.4, haval160.4, haval192.4, haval224.4, haval256.4, haval128.5, haval160.5, haval192.5, haval224.5, haval256.5" >
	<title>Generate All Hash Algorithm For Free Like Md5,sha1,md2 etc|in Hashing.ml</title>
	<link rel="shortcut icon" type="image/png" href="image/favicon.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> <!--Tailwind Css-->
</head>
<!-- javaScript Code -->
<script type="text/javascript">
	// show modual function 
	function show(){
		document.getElementById("txtshow").style.display = 'block';
		document.getElementById("Btnshow").style.display = 'block';
	}
	// show copy btn
	// function copy(){
	// 	document.getElementById("Btncopy").style.display = 'block';
	// }
</script>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<a class="navbar-brand" href="#">Hashing</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
 	</button>
  	<div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
		    <li class="nav-item">
		        <a class="nav-link" href="index.html">Home</a>
		    </li>
		     <li class="nav-item">
		       <a class="nav-link" href="md5.php">Convert MD5</a>
		    </li>
		    <li class="nav-item">
		       <a class="nav-link" href="sha1.php">Convert Sha1</a>
		    </li>
		    <li class="nav-item">
           		<a class="nav-link" href="other.php">All Algorithm</a>
        	</li>
            <li class="nav-item">
                <a class="nav-link" href="Gst.php">GST Calculator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://infotechnologyxyz.blogspot.com/">Blog</a>
            </li>
		     <li class="nav-item">
		       <a class="nav-link" href="https://forms.gle/GxLhNiiHP2A8Yi8W7">Contact Us</a>
		    </li> 
		      <li class="nav-item">
		       <a class="nav-link" href="privacy.html">Privacy Policy</a>
		    </li> 
	    </ul>
  	</div>
</nav>

<!-- MD algoritham -->
<section class="text-gray-700 body-font relative">
  <div class="container px-5 py-24 mx-auto">
  	<div class="row">
  		<div class="col-md-1"></div> <!--ADS-->
  		<div class="col-md-10"><!-- New Col Add-->
  			<div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Convert All Algoritham</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
    </div>
    <form action="other.php" method="POST">
	    <div class="md:w-1/2 md:w-2/3 mx-auto">
	      	<div class="flex flex-wrap -m-2">
		      	<div class="p-2 w-full">
		      		<!-- check selected algorithm -->
		      		<div class="alert alert-danger" role="alert" id="check" style="display: none;"> 	
						<?php
					        if(isset($_SESSION["check"])){

					            $error = $_SESSION["check"];
					            echo "<span>$error</span>";
					            echo "<script type=\"text/javascript\">document.getElementById('check').style.display = 'block';</script>";
					        }
					        unset($_SESSION['check']);
					    ?>  	
					</div>
			<!-- end show o/p -->
		         	<!-- add select box -->
		         	<div class="form-group">
					    <label for="exampleFormControlSelect1">Select Algorithm</label>
					    <select name="algorithm" class="form-control focus:outline-none focus:border-teal-500" id="exampleFormControlSelect1">
					    	<option id="100" value="select">select</option>   
					     	<option id="0" value="md2">md2</option>   
							<option id="1" value="md4">md4</option>
							<option id="2" value="md5">md5</option>
							<option id="3" value="sha1">sha1</option>
							<option id="4" value="sha224">sha224</option>   
							<option id="5" value="sha256">sha256</option>
							<option id="6" value="sha384">sha384</option>
							<option id="7" value="sha512">sha512</option>
							<option id="8" value="ripemd128">ripemd128</option>
							<option id="9" value="ripemd160">ripemd160</option>
							<option id="10" value="ripemd256">ripemd256</option>
							<option id="11" value="ripemd320">ripemd320</option>
							<option id="12" value="whirlpool">whirlpool</option>
							<option id="13" value="tiger128,3">tiger128,3</option>
							<option id="14" value="tiger160,3">tiger160,3</option>
							<option id="15" value="tiger192,3">tiger192,3</option>
							<option id="16" value="tiger128,4">tiger128,4</option>
							<option id="17" value="tiger160,4">tiger160,4</option>
							<option id="18" value="tiger192,4">tiger192,4</option>
							<option id="19" value="snefru">snefru</option>
							<option id="20" value="snefru256">snefru256</option>
							<option id="21" value="gost">gost</option>
							<option id="22" value="gost-crypto">gost-crypto</option>
							<option id="23" value="adler32">adler32</option>
							<option id="24" value="crc32">crc32</option>
							<option id="25" value="crc32b">crc32b</option>
							<option id="26" value="fnv132">fnv132</option>
							<option id="27" value="fnvla32">fnv1a32</option>
							<option id="28" value="fnv164">fnv164</option>
							<option id="29" value="fnvla64">fnv1a64</option>
							<option id="30" value="joaat">joaat</option>
							<option id="31" value="haval128,3">haval128,3</option>
							<option id="32" value="haval160,3">haval160,3</option>
							<option id="33" value="haval192,3">haval192,3</option>
							<option id="34" value="haval224,3">haval224,3</option>
							<option id="35" value="haval256,3">haval256,3</option>
							<option id="36" value="haval128,4">haval128,4</option>
							<option id="37" value="haval160,4">haval160,4</option>
							<option id="38" value="haval192,4">haval192,4</option>
							<option id="39" value="haval224,4">haval224,4</option>
							<option id="40" value="haval256,4">haval256,4</option>
							<option id="41" value="haval128,5">haval128,5</option>
							<option id="42" value="haval160,5">haval160,5</option>
							<option id="43" value="haval192,5">haval192,5</option>
							<option id="44" value="haval224,5">haval224,5</option>
							<option id="45" value="haval256,5">haval256,5</option>
					    </select>
	  				</div>
		        </div>
	        <!-- new Button -->
		        <div class="p-2 w-full">
		         <button type="submit" name="add" onclick="show()" class="flex mx-auto text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg">Add</button>
		        </div>
		        <!-- hide the textarea -->
			        <div id="txtshow" class="p-2 w-full" style="display: none;">
			          <textarea name="plaintext" class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-teal-500 text-base px-4 py-2 resize-none block" placeholder="Message" required="Tyep Message.."></textarea>
			        </div>
			        <div id="Btnshow" onclick="copy()" class="p-2 w-full" style="display: none;">
			          <button type="submit" name="submit" class="flex mx-auto text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg">Convert</button>
			        </div>
			        <!-- Btn Copy  -->
			        <!-- <div id="Btncopy" class="p-2 w-harf" style="display: none;">
			          <button type="submit" name="submit" class="flex mx-auto text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg">Copy Result</button>
			        </div> -->
		    	<!-- </div> -->
	      	</div>
	      	<br>
	      	<!-- Show the Output -->
	    	<div class="alert alert-success" role="alert" id="not" style="display: none;"> 	
				<?php
			        if(isset($_SESSION["result"])){
			        	$msg = $_SESSION["msg"];
			        	echo "$msg<br><br>";
			            $error = $_SESSION["result"];	
			            $text = $_SESSION['pt'];
			            echo "Plain text : $text"."<br>";
			            echo "<span>Result :   $error</span>";
			            echo "<script type=\"text/javascript\">document.getElementById('not').style.display = 'block';</script>";
			            echo "<script type=\"text/javascript\">document.getElementById('Btncopy').style.display = 'block';</script>";
			        }
			        unset($_SESSION['result']);
			    ?>  
			</div>
			<!-- end show o/p -->
			<div class="row">
				<div class="col-md-12"></div> <!--ADS-->
			</div>
	    </div>
	</form>
  	</div> 
  		<div class="col-md-1"></div><!--ADS-->
  	</div>   
  </div>
</section> <!--End Contact-->
<!-- end Algoritham -->

<!-- footer Section Start -->
<footer class="text-gray-700 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <span class="ml-3 text-xl">Hashing</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 Hashing —
      <a href="https://twitter.com/programmers0_0" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@programmer0_0</a>
    </p>
    <!-- contact -->
    <!-- <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">Contact: Hashing2021@gmail.com</p>-->
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500" href="https://www.facebook.com/harshal1882001/">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500" href="https://twitter.com/programmers0_0">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500" href="https://www.instagram.com/programmers0_0/">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
    </span>
  </div>
</footer> <!--End Footer-->
</body>
</html>