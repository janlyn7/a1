<?php
$quotes = array ('Live long, and prosper.',
    'Logic is the beginning of wisdom, not the end.',
    'Insufficient facts always invite danger.', 
    'The needs of the many outweigh the needs of the few or the one.', 
    'When you eliminate the impossible, whatever remains, however improbable, must be the truth.', 
    'Without followers, evil cannot spread.')
?>



<!DOCTYPE html>
<html>


  <head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="JL_logo.jpg"> 
    <link href='aboutme.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arima+Madurai' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cormorant+Infant' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css' rel='stylesheet' type='text/css'>

    <title>Janine Lyn - Assignment 1</title>
  </head>

  <body>
    <div class="container" id="about_content">
          <h2>Janine Lyn</h2>

          <img src="images/janine.jpg" alt="Photo: Ancient Roman Road, Sierra de Gredos, Spain, 2000">

	  <br/>
	  <br/>
          <h4>About Me</h4>
          <p>
           Hello!  I'm a software developer residing near Boston, MA. I work for a space-based satellite called the Chandra X-Ray Observatory, writing software to assist with data processing and data analysis.  In my spare time, I enjoy ballroom dancing, martial arts, photgraphy, travel, and spending time with my two cats. 
          </p>

	  <br/>
          <h4>Random Quote</h4>
          <p>
	    <?php echo $quotes[array_rand($quotes, 1)]; ?>
          </p>
    </div>
  </body>
