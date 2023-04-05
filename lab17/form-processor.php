<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "zkang2@u.rochester.edu"; // use YOUR email for both lines 12 and 13
$emailTo = "zkang2@u.rochester.edu";
$subject = "Lab 13 - HTML Forms";

// the following lines of code will grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY; then create a variable on the left side that
//   makes sense for the data it will hold

// these are from the text INPUT fields...
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone = Trim(stripslashes($_POST['phone'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
$like1 = $_POST['like1']; 
$like2 = $_POST['like2']; 
$like3 = $_POST['like3'];  
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$achieve = $_POST['achieve']; 
// notice: no matter how many radio buttons, there's only one answer

// this is from the TEXTAREA field...
$more = Trim(stripslashes($_POST['more'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "Your name: \n"; //...a label
$body .= $name;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Your Email: \n"; //...a label
$body .= $email;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Your Phone: \n"; //...a label
$body .= $phone;	  //...a variable
$body .= "\n\n";			  //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
$body .= "What Make Newton Impressive: \n"; 	 	// a heading for your checkbox section

if (isset($like1)) {		// a checkbox variable
	$body .= $like1 . "\n";	// the same checkbox variable
}
if (isset($like2)) {		// a checkbox variable
	$body .= $like2 . "\n";	// the same checkbox variable
}
if (isset($like3)) {		// a checkbox variable
	$body .= $like3 . "\n";	// the same checkbox variable
}
$body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
$body .= "Which Is the Most Impressive: \n";		// a heading for your radio button section
$body .= $achieve;			// the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "Tell Us more: \n";		// a heading for your text area
$body .= $more;			// the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML 
	 webpage with a customized message 
	 for the user
	 ********************************** -->

<?php
	$customCSS = "<link rel='stylesheet' type='text/css' href='css/styles.css'>
	<link rel='stylesheet' type='text/css' href='css/navigation.css'>
	<link rel='stylesheet' href='css/forms.css'>";
	include "inc/html-top.php"
?>

<body>
<div class="container">
	<header>
		<h1>Isaac Newton</h1>

		<div>The Physicist</div>
	</header>
	<? include "inc/nav.php" ?>
	<main class="full-width">
    <h2>Thank You <?php echo $name; ?></h2>
    <p>Go back to <a href=".">the home page</a>.</p>
</main>
</div>
</body>
</html>