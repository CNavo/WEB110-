<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Web Developer Examples and Resources by Chris Navoczynski</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
    <!-- jQuery -->
     <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- MenuMaker Plugin -->
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <!-- Icon Library -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="js/script.js"></script>
 </head>
 <body> 
  <main>
    <header>
        <h1><a href="index.thml">Web Developer Examples and Resources by Chris Navoczynski</a></h1>
     <nav id="cssmenu">
      <ul>
         <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
         <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG Site</a></li>
         <li><a href="gallery.html"><i class="fa fa-fw fa-picture-o"></i> Lightbox II Gallery</a></li>
          
        <!--Drop Down Menu for Research Topic Pages --> 
        <li><a href="#">Research Topics</a>
         <ul>
            <li><a href="smo.html"><i class="fa fa-fw fa-chain"></i> SMO</a></li>
            <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
            <li><a href="forms.html"><i class="fa fa-fw fa-file-text-o"></i> Forms</a></li>
         </ul>
        </li>
        
        
        <!--Drop Down Menu for Google Tool pages -->
        <li><a href="#">Google Tools</a>
            <ul>
               <li><a href="seo.html"><i class="fa fa-fw fa-television"></i> SEO</a></li>
               <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
               <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
            </ul>
        </li>
        <li><a href="contact.php"><i class="fa fa-fw fa-envelope-o"></i> Contact Me</a></li>
      </ul>
     </nav>
    </header>
       
    
    <section class="fullwidth">
        <h2>Contact Chris</h2>
        <?php include 'includes/multiple.php'; ?>
        <p class="clear-recaptcha"></p>
    </section>
    
     
    <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact Chris Navoczynski</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
   
  </main>
   <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
 </body>
</html>