<?php  session_start(); ob_start(); session_destroy();  require('db/config.php'); require('db/functions.php');  ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Contact Us - Lokoja Journal of Management and Technology</title>
	<?php include('nav/head.php'); ?>

</head>
<body class="body-dark">
    <?php include('nav/header.php'); ?>
     
    <header style="background: url(images/slider/slide1.jpg) top center no-repeat;">
        
        <div class="container">
            
            <div class="sixteen columns">
                
                <a href="index"><img src="images/lojmat2.png" alt="" width="50px" /></a>
                
            </div>
            
        </div>
        
    </header>
    
    <div class="pageContent">
        
        <div class="container">
            
            <div class="col-md-12 offset-by-one">
                
                <h1 class="pageTitle">Interract With Us</h1>
              
                  <p>For any inquiry regarding our Journals and Article, you can Contact LOJMAT via the following media. You can also send us a mail directly and get to know more about us. </p>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-body">
                    <h3><i class="fa fa-phone"></i> Call us</h3>
                    <p><a href="tel:+234**********"> +234 (0) 8012 345 678</a></p>
                </div>
                </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-body">
                    <h3><i class="fa fa-home"></i> Visit Us <br> @</h3>
                    <p> Department of Management Studies, <br> Kogi State Polytechnic, Lokoja</a></p>
                </div>
                </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-body">
                    <h3><i class="fa fa-envelope"></i> Send us an Email</h3>
                    <p><a href="mailto:info@lojmat.org.ng"> info@lojmat.org.ng</a></p>
                </div>
                </div>
                </div>
            </div>
                  
                          
            <form class="form" id="contactForm" action="processForm.php" method="post">
<h1>Send Us a Message</h1>

  <div class="row">

    <div class="form-group col-md-6">
      <label for="senderName">Your Name</label>
      <input type="text" name="senderName" class="form-control" placeholder="Please type your name" required="required" />
    </div>

    <div class="form-group col-md-6">
      <label for="senderEmail">Your Email Address</label>
      <input type="email" name="senderEmail" class="form-control"  placeholder="Please type your email address" required="required" maxlength="50" />
    </div>

    <div class="form-group col-md-12">
      <label for="message" style="padding-top: .5em;">Your Message</label>
      <textarea name="message" id="message" class="form-control" placeholder="Please type your message" required="required" cols="80" rows="10" maxlength="10000"></textarea>
    </div>

  </div>

 
    <input type="submit" class="button-small-theme rounded3" id="sendMessage" name="sendMessage" value="Send Email" />
    

</form>

<div id="sendingMessage" class="statusMessage"><p>Sending your message. Please wait...</p></div>
<div id="successMessage" class="statusMessage"><p>Thanks for sending your message! We'll get back to you shortly.</p></div>
<div id="failureMessage" class="statusMessage"><p>There was a problem sending your message. Please try again.</p></div>
<div id="incompleteMessage" class="statusMessage"><p>Please complete all the fields in the form before sending.</p></div>

            </div>
            
        </div>
        
    </div>
    
   <?php include('nav/footer.php'); ?>
   <?php include('nav/scripts.php'); ?>

  <script type="text/javascript">

var messageDelay = 2000;  // How long to display status messages (in milliseconds)

// Init the form once the document is ready
$( init );


// Initialize the form

function init() {

  // Hide the form initially.
  // Make submitForm() the form's submit handler.
  // Position the form so it sits in the centre of the browser window.
  $('#contactForm').submit( submitForm );

  // When the "Send us an email" link is clicked:
  // 1. Fade the content out
  // 2. Display the form
  // 3. Move focus to the first field
  // 4. Prevent the link being followed

  $('a[href="#contactForm"]').click( function() {
    $('#content').fadeTo( 'slow', .2 );
    $('#contactForm').fadeIn( 'slow', function() {
      $('#senderName').focus();
    } )

    return false;
  } );
  
  // When the "Cancel" button is clicked, close the form
  $('#cancel').click( function() { 
 
    $('#content').fadeTo( 'slow', 1 );
  } );  

  // When the "Escape" key is pressed, close the form
  $('#contactForm').keydown( function( event ) {
    if ( event.which == 27 ) {
   
      $('#content').fadeTo( 'slow', 1 );
    }
  } );

}


// Submit the form via Ajax

function submitForm() {
  var contactForm = $(this);

  // Are all the fields filled in?

  if ( !$('#senderName').val() || !$('#senderEmail').val() || !$('#message').val() ) {

    // No; display a warning message and return to the form
    $('#incompleteMessage').fadeIn().delay(messageDelay).fadeOut();
    delay(messageDelay).fadeIn();

  } else {

    // Yes; submit the form to the PHP script via Ajax

    $('#sendingMessage').fadeIn();
    contactForm.fadeOut();

    $.ajax( {
      url: contactForm.attr( 'action' ) + "?ajax=true",
      type: contactForm.attr( 'method' ),
      data: contactForm.serialize(),
      success: submitFinished
    } );
  }

  // Prevent the default form submission occurring
  return false;
}


// Handle the Ajax response

function submitFinished( response ) {
  response = $.trim( response );
  $('#sendingMessage').fadeOut();

  if ( response == "success" ) {

    // Form submitted successfully:
    // 1. Display the success message
    // 2. Clear the form fields
    // 3. Fade the content back in

    $('#successMessage').fadeIn().delay(messageDelay).fadeOut();
    $('#senderName').val( "" );
    $('#senderEmail').val( "" );
    $('#message').val( "" );

    $('#content').delay(messageDelay+500).fadeTo( 'slow', 1 );

  } else {

    // Form submission failed: Display the failure message,
    // then redisplay the form
    $('#failureMessage').fadeIn().delay(messageDelay).fadeOut();
    $('#contactForm').delay(messageDelay+500).fadeIn();
  }
}

</script>

</body>
</html>