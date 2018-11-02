<!DOCTYPE html>
<html>
        <head>
	    <title>Ethan Eisenhard | Portfolio</title>
            <meta name="author" content="Ethan Eisenhard"/>
            <meta name="description" content="Check out Ethan's photography and website portfolio here!"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href = "CSS/portfolio.css"/>
	    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	      
		ga('create', 'UA-83528357-1', 'auto');
		ga('send', 'pageview');
	
	</script>
	
        </head>
  
        <body>
	
	<div id = "menu"></div>


<!--	<div class="w3-main" style="margin-left:200px">
		<div class="w3-white">
		  <button class="w3-button w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
		  <div class="w3-container">
		    <h1 class = "work-header">Graduation</h1>
		    <hr style = "border-color: #d11141;">
		  </div>
	</div>-->

	<div class="w3-container ctn-top">
			
		<section id="photos">		
		<?php
		
		$dirname = "Graduation/";
		$images = (glob($dirname."*.*"));
		shuffle($images);
		
		foreach($images as $image) {
		echo '<img class = "lazy" data-original="'.$image.'" />';
		}
		
		
		?>
		</section>
	
        </div>
	
	<div id = "footerload"></div>

	</div>
	
<script>
function w3_open() {
document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
document.getElementById("mySidebar").style.display = "none";
}
</script>
		

<script src="jquery-3.2.1.min.js"></script>
<script src="jquery.lazyload.js"></script>
<script>
jQuery(document).ready(function ($) {
    $("img.lazy").lazyload({
failure_limit : 999
	});  
});

$(function(){
  $("#footerload").load("footer.html"); 
});
</script>

<!--<script> 
    $(function(){
      $("#menu").load("menu.html"); 
    });
</script>-->


	</body>
	
</html>