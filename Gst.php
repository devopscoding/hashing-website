<?php
	session_start();
	if (isset($_POST['submit'])) {
		$price = $_POST['price'];
		$gst = $_POST['gst'];

		$cal = $price * $gst /100;

		$total = $price + $cal;
		if (!empty($total)) {
			$_SESSION['total'] = $total;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
 initial-scale=1">
 <meta name="description" content="GST calculator will calculate the amount of GST included in a gross price as well as the amount you should add to a net price.This base on Indian GST Service System.">
 <meta name="keywords" content="GST,gst,GST calculator,gst calculator,calculator,business Calculator,Indian calculator,Best Calculator,Calculate Gst Value">
  <title>Free Indian GST Calculator</title>
  <link rel="shortcut icon" type="image/png" href="image/favicon.png">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> <!--Tailwind Css-->
</head>
<script type="text/javascript">
	// show modual function 
	function show(){
		document.getElementById("txtshow").style.display = 'block';
		// document.getElementById("Btnshow").style.display = 'block';
	}
</script>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<a class="navbar-brand" href="#">Hashing</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
 	</button>
  	<div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
		    <li class="nav-item">
		        <a class="nav-link" href="http://localhost/hasAlgoritham/">Home</a>
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
           <a class="nav-link" href="other.php">GST Calculator</a>
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
</nav> <!--End navbar-->
<section class="text-gray-700 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">GST (Text) Calculator</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Free online GST Calculator.</p>
    </div>
    <form action="" method="POST">
	    <div class="lg:w-1/2 md:w-2/3 mx-auto">
	      <div class="flex flex-wrap -m-2">
	        <div class="p-2 w-1/2">
	          <input name="price" class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-teal-500 text-base px-4 py-2" placeholder="Original Price" type="text" required="">
	        </div>
	        <div class="p-2 w-1/2">
	          <input name="gst" class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-teal-500 text-base px-4 py-2" placeholder="GST" type="text" required="">
	        </div>
	        <div class="p-2 w-full">
	          <button name="submit" onclick="show()" class="flex mx-auto text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg">Calculate</button>
	        </div>
	   			<div class="alert alert-success" role="alert" id="not" style="display: none; text-align: center;">
			<?php
		        if(isset($_SESSION["total"])){

		            $error = $_SESSION["total"];	
		            $text = $_SESSION['total'];
		            echo "Plain text : $text"."<br>";
		            echo "<script type=\"text/javascript\">document.getElementById('not').style.display = 'block';</script>";
		        }
		        unset($_SESSION['total']);
		    ?>  	
	      </div>
	    </div>
	</form>
  </div>
</section>
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
    <!--<p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">Contact: Hashing2021@gmail.com</p>-->
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