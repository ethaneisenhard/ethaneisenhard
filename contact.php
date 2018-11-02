<?php
// OPTIONS - PLEASE CONFIGURE THESE BEFORE USE!

$yourEmail = "eeisen11@gmail.com"; // the email address you wish to receive these mails through
$yourWebsite = "ethaneisenhard.com"; // the name of your website
$thanksPage = ''; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4
$requiredFields = "name,email,comments"; // names of the fields you'd like to be required as a minimum, separate each field with a comma


// DO NOT EDIT BELOW HERE
$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);

function clean($data) {
	$data = trim(stripslashes(strip_tags($data)));
	return $data;
}
function isBot() {
	$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

	foreach ($bots as $bot)
		if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
			return true;

	if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
		return true;
	
	return false;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isBot() !== false)
		$error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
		
	// lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score.. 
	// score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)
	$points = (int)0;
	
	$badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

	foreach ($badwords as $word)
		if (
			strpos(strtolower($_POST['comments']), $word) !== false || 
			strpos(strtolower($_POST['name']), $word) !== false
		)
			$points += 2;
	
	if (strpos($_POST['comments'], "http://") !== false || strpos($_POST['comments'], "www.") !== false)
		$points += 2;
	if (isset($_POST['nojs']))
		$points += 1;
	if (preg_match("/(<.*>)/i", $_POST['comments']))
		$points += 2;
	if (strlen($_POST['name']) < 3)
		$points += 1;
	if (strlen($_POST['comments']) < 15 || strlen($_POST['comments']) > 1500)
		$points += 2;
	if (preg_match("/[bcdfghjklmnpqrstvwxyz]{7,}/i", $_POST['comments']))
		$points += 1;
	// end score assignments

	if ( !empty( $requiredFields ) ) {
		foreach($requiredFields as $field) {
			trim($_POST[$field]);
			
			if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Please fill in all the required fields and submit again.\r\n")
				$error_msg[] = "Please fill in all the required fields and submit again.";
		}
	}

	if (!empty($_POST['name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['name'])))
		$error_msg[] = "The name field must not contain special characters.\r\n";
	if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email'])))
		$error_msg[] = "That is not a valid e-mail address.\r\n";
	
	if ($error_msg == NULL && $points <= $maxPoints) {
		$subject = "Automatic Form Email";
		
		$message = "You received this e-mail message through your website: \n\n";
		foreach ($_POST as $key => $val) {
			if (is_array($val)) {
				foreach ($val as $subval) {
					$message .= ucwords($key) . ": " . clean($subval) . "\r\n";
				}
			} else {
				$message .= ucwords($key) . ": " . clean($val) . "\r\n";
			}
		}
		$message .= "\r\n";
		$message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
		$message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";
		$message .= 'Points: '.$points;

		if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
			$headers   = "From: $yourEmail\r\n";
		} else {
			$headers   = "From: $yourWebsite <$yourEmail>\r\n";	
		}
		$headers  .= "Reply-To: {$_POST['email']}\r\n";

		if (mail($yourEmail,$subject,$message,$headers)) {
			if (!empty($thanksPage)) {
				header("Location: $thanksPage");
				exit;
			} else {
				$result = 'Your mail was successfully sent.';
				$disable = true;
			}
		} else {
			$error_msg[] = 'Your mail could not be sent this time. ['.$points.']';
		}
	} else {
		if (empty($error_msg))
			$error_msg[] = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
	}
}
function get_data($var) {
	if (isset($_POST[$var]))
		echo htmlspecialchars($_POST[$var]);
}
?>
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

#footerload{
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
