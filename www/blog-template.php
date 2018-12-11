<!DOCTYPE html>
<html>
        <head>
		<title>Ethan Eisenhard | Web Development</title>
		<meta name="author" content="Ethan Eisenhard"/>
		<meta charset="utf-8"/>
		<meta name="description" content="Ethan Eisenhard Web Development"/>
		<link rel="canonical" href="https://www.ethaneisenhard.com"/>
		<link rel="alternate" href="https://www.ethaneisenhard.com" hreflang="en-us" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
                <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <meta itemprop="addressLocality" content="State College">
                <meta itemprop="addressRegion" content="Pennsylvania">
                <meta itemprop="addressCountry" content="United States"></span>
                <meta itemprop="url" content="http://ethaneisenhard.com/">
                <meta itemprop="telephone" content="215-284-0016">
                <meta itemprop="email" content="eeisen11@gmail.com">
		<link rel="stylesheet" type="text/css" href = "CSS/blog-template.css"/>
		<link rel="stylesheet" href="CSS/w3.css">
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

	<div class="w3-main" style="margin-left:200px">
		<div class="w3-white">
		  <button class="w3-button w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
		  <div class="w3-container">
		    <h1 class = "schedule-header">Blog</h1>
		     <hr style = "border-color: #f37735;">
		  </div>
	</div>

	<div class="w3-container">
	
	<section id = "summary">
	<h1 class = "title">OBX: The Outer Banks</h1>
	<p class = "date">May 16, 2017</p>
	
	<p class = "desc">This trip was a celebration honoring my girlfriend graduating from college.
	We made our way down the coast stoppping in Virginia, just outside, D.C. We spent the evening with some friends eating and playing skee-ball in the downtown area of Arlington.
	In the morning, we got up early, stopping at Dunkin Donuts (they gave me a blueberry donut instead of a muffin but hey I am not complaining), a must for trips like this. Driving four hours, we reached our destination of Corrolla, OBX.
	Stopping at the Currituck Beach Lighthouse, we saw our first of three lighthouses of the trip. After some walking around, we stopped and got some dank blue soft shell crab that was sooo good.
	Then we signed up to take a tour from the Corolla Wild Horse Fund, a non profit, that focuses on the needs and survival of the horses.
	As someone who needs to see to believe (Doubting Thomas, as someone called me on the tour), I was skeptical to think that we would actually see horses, and to my surpise, we did!
	Driving all around Route 11, what locales refer to as the beach where the horses live, we saw some epic scenes. After seeing the horses, and taking some sweet pictures, we headed back to our AirBnB for the night.
	The next morning we went Jockeys Ridge, before driving down the coast to see two more lighthouses, Cape Hatteras Lighthouse and Ocracoke Island Lighthouse, which took most of the day. Then headeding back to the AirBnB in Kill Devils Hill, we spent the late afternoon watching the sunset enjoying wine and good company.
	The following day we got back in the car and headed to Washington D.C. to see the Jefforson Monument and get some delicious deep dish pizza in the city. Spending the night in Arlington again, we got up the next morning and headed home.  
	</p>
	</section>
	
		<section id="photos">		
		<?php
		
		$dirname = "Images/";
		$images = (glob($dirname."*.*"));
		shuffle($images);
		
		foreach($images as $image) {
		echo '<img class = "lazy" data-original="'.$image.'" />';
		}
		
		
		?>
		</section>
	
	
	   
	</div>
	
<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

<script> 
    $(function(){
      $("#menu").load("menu.html"); 
    });
</script>

<script src="jquery-3.2.1.min.js"></script>
<script src="jquery.lazyload.js"></script>
<script>
jQuery(document).ready(function ($) {
    $("img.lazy").lazyload({
failure_limit : 999
	});  
});
</script>

	
		

	</body>

	
</html>