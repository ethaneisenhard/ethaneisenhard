<!DOCTYPE html>
<html>

        <head>
	    <title>Ethan Eisenhard | Portfolio</title>
            <meta name="author" content="Ethan Eisenhard"/>
            <meta name="description" content="A philadelphia potrait photographer and web developer"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href = "CSS/portfolio.css"/>
	    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	
	<style>
	.desc{
	margin: 10px 30px 30px 30px;
	}
		
	.view{
	transition-duration: 0.4s;
	padding: 15px 25px 15px 25px;
	cursor: pointer;
	background-color: white; 
	color: black; 
	border: 2px solid #d11141;
	border-radius: 2px;
	font-size: 15px;
	font-weight: 500;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	text-decoration: none;
	text-align: center;
	}
	
	.view:hover{
		background-color: #d11141;
                color: white;
    
        }
	
	.allign{
		padding-bottom: 20px;
	}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 2vw;
  width: 33.33%;
}


	
	
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 10px 10px 10px 0px;
  height: 100%;
}

</style>
	
        </head>
  
        <body>
	
	<div id = "menu"></div>

	<div class="w3-main" style="margin-left:200px">
		<div class="w3-white">
		  <button id = "TEST" class="w3-button w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
		  <div class="w3-container">
		    <h1 class = "work-header">Photography Gallery</h1>
			<hr style = "border-color: #d11141;">
		  </div>
	</div>
		
	
		
	<div>
			<p class = "desc">Using natural light and urban enviroments, Ethan takes lifestyle, fashion, family, and graduation portraits. Ethan has a keen eye for
			turning ordinary enviroments into new perspectives and strong detail. Traveling in the Pennsylvanna and New York area, Ethan works with families, artists, models, and
			companies like American Eagle to create beautiful portraits. Ethan offers a range of services and packages. Checkout his work below. 
			</p>
	</div>
	
<button class="tablink" onclick="openPage('Portrait', this, '#d11141')" id="defaultOpen" href="portrait.php">Portrait</button>
<button class="tablink" onclick="openPage('Graduation', this, '#d11141')" href="graduation.php">Graduation</button>
<!--<button class="tablink" onclick="openPage('Lifestyle', this, '#d11141')" href="lifestyle.php">Lifestyle</button>-->
<button class="tablink" onclick="openPage('Landscape', this, '#d11141')" href="landscape.php">Landscape</button> 
	
<div id="Portrait" class="tabcontent">
</div>

<div id="Graduation" class="tabcontent">
</div>

<!--<div id="Lifestyle" class="tabcontent">-->
<!--</div>-->

<div id="Landscape" class="tabcontent">
</div>

<div id = "footerload"></div>
			
<!--	<div class = "content">
	
	<a class = "portrait choice" href = "portrait.php">Portrait</a>

	</div>
	
	<div class = "content">
		
	<a class = "graduation choice" href = "graduation.php">Graduation</a>	
		
	</div>
	
	<div class = "content">
		
	<a class = "lifestyle choice" href = "lifestyle.php">Lifestyle</a>	
		
	</div>
	
	<div class = "content">
		
	<a class = "landscape choice" href = "landscape.php">Landscape</a>	
		
	</div>
	   
    </div>-->
<script> 
$(function(){
  $("#menu").load("menu.html"); 
});
    
    
$(function(){
  $("#footerload").load("footer.html"); 
});

</script>

<script>
function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click(); 
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

<script>
$(document).ready(function() {
       $("#Portrait").load("portrait.php");
});
</script>

<script> 
$(document).ready(function() {
   $("button").click(function() {
      $("#Portrait").load($(this).attr("href"));
      $("#Graduation").load($(this).attr("href"));
      $("#Lifestyle").load($(this).attr("href"));
      $("#Landscape").load($(this).attr("href"));
      return false;
   });
});
</script>




	</body>
	
</html>