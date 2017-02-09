<?php
$quotes = array ( 'I have not failed. I\'ve just found 10,000 ways that won\'t work. <br/>- Thomas Alva Edison',
	  	  'I don\'t believe in astrology; I\'m a Sagittarian and we\'re skeptical. <br/>- Arthur C. Clarke',
		  'Electricity is really just organized lightning. <br/>- George Carlin',
		  'Only two things are infinite, the universe and human stupidity, and I\'m not sure about the universe. <br/>- Albert Einstein')
?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="images/letter_j.png"> 
    <link href='aboutme.css' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Cormorant+Infant' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css' rel='stylesheet' type='text/css'>

    <title>Janine Lyn - Assignment 1</title>
  </head>

  <body>
    <div class="container" id="about_content">

    	 <h2>Janine Lyn</h2>
         <img src="images/janine.jpg" title="Ancient Roman Road, Sierra de Gredos, Spain, 2000" alt="image">

	 <br/><br/>

         <h4>About Me</h4>
         <div id="about_me">
           Hello!  I'm a software developer residing near Boston, MA. I studied Planetary and Space Sciences at 
           Boston University and have worked on various satellite projects for the past 20 years. 
           I currently work for the Chandra X-Ray Observatory, writing software to assist with data processing and 
           analysis, mainly in C, C++, and Python.  
	   <br/><br/>
	   I'm interested in web design and development because it's a great way for me to combine my analytical 
	   and creative sides and will hopefully lead to other opportunities.
	   <br/><br/>
           In my spare time, I enjoy ballroom dancing, martial arts, photography, travel, and spending time with 
           my two mischievous cats. 
          </div>

	  <br/>

          <h4>Random Quote</h4>
          <div id="quote">
	    <?php echo $quotes[array_rand($quotes, 1)]; ?>
          </div>
    </div>
  </body>
