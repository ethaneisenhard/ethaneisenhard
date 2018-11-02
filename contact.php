<!DOCTYPE html>
<html>
        <head>

		<script src="https://use.typekit.net/hsa3cub.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<title>Ethan Eisenhard | Contact</title>
		<meta name="description" content="Ethan is a freelance web developer who is dedicated to quality and original style. Learn more here!"/>
		<link rel="canonical" href="http://www.ethaneisenhard.com"/>
		<link rel="alternate" href="http://www.ethaneisenhard.com" hreflang="en-us" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/{VERSION}/typeit.min.js"></script>
		<link type="text/css" rel="stylesheet" href="CSS/contact.css">
		
	</head>
	
<style>

p.error, p.success {
		font-weight: bold;
		padding: 10px;
		border: 1px solid;
}
p.error {
	background: #ffc0c0;
	color: #900;
}
p.success {
	background: #b3ff69;
	color: #4fa000;
}

.hero-image {
 background: url("/WebsitesImages/wildfire.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  min-height: 400px;
 margin-bottom: 10px;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-shadow: 2px 2px black;
}

.hero-text-style{
 background-color: #a6a6a6;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

#footerload {
	margin-top: 25px;
}

.container{
	display: flex;
	margin: auto 0;
	padding: 20px 20px 20px 40px;
	  display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	
	-webkit-flex-flow: row wrap;
	justify-content: space-around;
}

#left-side{
    width: 50%;

}

#right-side{
  width: 50%;
   
}

input{
	 width: 80%;
}

textarea{
	 width: 80%;
}

@media all and (max-width: 800px) {

#left-side{
    width: 100%;

}

input{
	 width: 70%;
}

textarea{
	 width: 70%;
}
  .container {
    flex-direction: column;
  }
}


</style>
	
	<body>
		
	
	<div id = "menu"></div>

	<div class="w3-main" style="margin-left:200px">
		<div class="w3-white">
		  <button class="w3-button w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
		  <div class="w3-container">
		  </div>
	</div>

		
    <section>
	
	<div class="hero-image">
		<div class="hero-text">
		<h1 class = "hero-text-style" style="font-size:35px">Get In Touch With Ethan</h1>
		<p class = "hero-text-style" style="font-size:15px; padding: 10px; text-shadow: none;">Lets take the next steps to making your vision come to life</p>
		</div>
	</div>

<div class = "container">
	<div id = "left-side">
		<p>Ethan is a leading artist in the web development and photography marketing solutions,
		trusted by top companies such as American Eagle.
		Find out how Ethan can drive your brand to new heights.
		</p>
		
		<p>Ask Ethan how he can help:</p>
		
		<ul>
			<li>See our website development in action: Request a customized product demonstration and discover how you can take your business to the next level.</li>
			<br>
			<li>Schedule a photoshoot: Using his Portrait photography skills, Ethan creates beautiful stunning work inside and outside the studio </li>
			<br>
			<li>Become a photographer pro: From our Basic to Professional classes, Ethan can help you grow your career and become a photographer master.</li>
		</ul>
	</div>
	
	<div id = "right-side">
	<?php
	if (!empty($error_msg)) {
		echo '<p class="error">ERROR: '. implode("<br />", $error_msg) . "</p>";
	}
	if ($result != NULL) {
		echo '<p class="success">'. $result . "</p>";
	}
	?>

    
	<form action="<?php echo basename($path,"contact.php"); ?>" method="post">
		<noscript>
				<p><input type="hidden" name="nojs" id="nojs" /></p>
		</noscript>
		<p>
			<label for="name">Name: *</label> 
				<input type="text" name="name" id="name" value="<?php get_data("name"); ?>" /><br />
			
			<label for="email">E-mail: *</label> 
				<input type="text" name="email" id="email" value="<?php get_data("email"); ?>" /><br />
			
			
			<label for="comments">Comments: *</label>
				<textarea name="comments" id="comments" rows="5" cols="20"><?php get_data("comments"); ?></textarea><br />
		</p>
		<p>
			<input type="submit" name="submit" id="submit" value="Send" <?php if (isset($disable) && $disable === true) echo ' disabled="disabled"'; ?> />
		</p>
	</form>
	    
	</div>

</div>
	    
	<div id = "footerload"></div>

    </section>
	
	
<script> 
    $(function(){
      $("#menu").load("menu.html"); 
    });
    
    $(function(){
      $("#footerload").load("footer.html"); 
    });
</script>

        
	</body>
	
</html>
