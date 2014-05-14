<?php
	require_once('php/contact.php');
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>William Cadwallader</title>
    
    <!--Style sheet for the navigation bar-->
    <link rel="stylesheet" href="css/styles.css" /> 
    
    <!--Main Page stylesheet-->
    <link rel="stylesheet" href="css/pagestyle.css" />
    
    <!--Stylesheet for the social network buttons-->
    <link rel="stylesheet" href="css/SocialNetworks.css" />
    
    <!--Stylesheet for the alternating backgrounds-->
    <link rel="stylesheet" href="css/background.css" />
    
    <!--Style sheets for the photo carousel-->
    <link rel="stylesheet" href="css/owl.carousel.css" />  
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.transitions.css" rel="stylesheet" type="text/css" />
    
    <!--Fonts for the body text and -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>  
       
    <!--Modernizr JavaScript file for some progressive enhhancment issues-->
	<script src="js/vendor/modernizr.js"></script>
    
    <!--JavaScript file used for the navigation bar-->
	<script src="js/responsive-nav.js"></script>
    
    <!--jQery JavaScript API used with the carousel-->
    <script src="js/vendor/jquery.js"></script>
    
    <!--JavaScript file for the carousel-->
    <script src="js/owl.carousel.js"></script>
  
  </head>
  <body>
  
  <header>
  
  <!--Navigation bar start-->
      <nav class="nav-collapse">
        <ul>
          <li class="active"><a href="#home" data-scroll>Home</a></li>
          <li><a href="#cv" data-scroll>Curriculum Vitae</a></li>
          <li><a href="#bio" data-scroll>Bio</a></li>
          <li><a href="#blog" data-scroll>Blog</a></li>
          <li><a href="#contactForm" data-scroll>Contact Details</a></li>
        </ul>
      </nav>
      
  <!--Navigation bar end-->          
    </header>
    
    <!--Home section start-->
    
    <!--Container used for the alternating backgrounds--> 
    <div class="container">
    
    <!--Section with class used for the different backfround styles-->
    <section id="home" class="stuff2">
      <h1>William Cadwallader</h1>
      
    <!--Carousel that displays the images (Owl Carousel)-->    
    <div id="owl-carousel">
        <div class="item"> <img src="img/me.jpg" height="400" alt="My Photo"></div>
        <div class="item"> <img src="img/browserIcons.jpg" height="400" alt="Browser Logos"></div>
        <div class="item"> <img src="img/webDesign.jpg" height="400" alt="Website"></div>
        <div class="item"> <img src="img/webDesign2.jpg" height="400" alt="Web Design"></div>
        <div class="item"> <img src="img/webDesign3.jpg" height="400" alt="Web Design"></div>
    </div>
      
      <!--Script to initialise the carousel-->
	<script>
    
		$(document).ready(function() {
		
			$("#owl-carousel").owlCarousel({
			
				autoPlay: 5000, //Sets AutoPlay to 5 seconds
				
				singleItem: true, //Uses single image
				itemsDesktop : [1199,3],
				itemsDesktopSmall : [979,3]
			
			});
		
		});
    
    </script>
      
      <h2>Will's the name, <br>Web Design and Development's the game!</h2>
      
		</section>
	</div>
      
    
    
    <!--Home section end-->
    
    <!--Layered paper image-->    
  <img class="borderImage" src="img/sectionBorder.jpg" alt="border">
  

<!--CV section start-->

<!--Background container and section div-->
    <div class="container">
        <section id="cv" class="stuff1">
        
        <h1>Curriculum Vitae</h1>
        
        <!--Div class used for the CSS layered paper effect-->
        <div class="layers">
        
            <!--Data object that stores and displayes a PDF version of my CV-->
            <object id="cvPDF" data="assets/William_Cadwallader_CV_for_Web.pdf" type="application/pdf">
            
                <p>It appears you don't have a PDF plugin for this browser.
                No biggie... you can <a href="assets/William_Cadwallader_CV_for_Web.pdf">click here to
                download the PDF file.</a></p>
            
            </object>
        
        </div>
        
        </section>
    </div>
    
    <!--CV section end-->

        
        <!--Layered paper image-->    
        <img class="borderImage" src="img/sectionBorder2.jpg" alt="border">
        
    
    <!--Bio section start-->

    <!--Background container and section div-->    
    <div class="container">
        <section id="bio" class="stuff2">
        	<h1>Bio</h1>
        </section>
    </div>
    
    <!--Bio section end-->
    
    <!--Layered paper image-->
    <img class="borderImage" src="img/sectionBorder.jpg" alt="border">

    <!--Blog section start-->
    
    <!--Background container and section div-->
    <div class="container">
        <section id="blog" class="stuff1">
        
        <h1>Blog</h1>
        
        <div id="blogContent">
        
            <h3>Let's web it up!</h3>
            
            So you want to be a web designer huh? Me too, but it might not be as easy as you first think. There’s a whole lot to web design and development which I have come to discover over my relatively short but enjoyable time at university, so I have decided to get down to the nitty gritty and give you a little information about what I have found out from the available resources.
            <br><br>
            
            <h3>Get Creative and Design!</h3>
            Designing for today’s web (Meagan Fisher) (07/07/2013)<br>
            Development is Design (Brad Frost) (07/10/2013)<br><br>
            
            Designing for today’s web is a challenging task. And after researching this topic, the two main points I came across was writing content first and development in design. Everywhere you go in industry today you will hear one phrase throughout, content first! Older design practises would use placeholders or Lorem Ipsum (a generic content generator) to help structure the design of the website. Although this worked it’s not ideal for modern web design. Websites are primarily used for displaying the user’s content, so doesn’t it seem a little strange that previous design practices saw it as the final piece of the puzzle? Speaking metaphorically, it’s like designing a house without knowing who is going to live there. Designing around the content that was intended for that website, you know the completed product will feel like a planned creation and look professional.
            <br><br>
            
            Now when I say design, I don’t mean make something pretty in Adobe Photoshop and then build it. I mean design it in the medium that it was intended for, the browser! This means learning a bit of HTML and CSS, which I know some of you aren’t keen on, but it means you can ultimately save time and effort. Think about it, designing a separate Photoshop document for desktop, tablet and smartphone and then having to change them every time the client wants something done differently, it gets very old very quick. I’m not saying never use Photoshop again, I mean style tiles are created with Photoshop and are a fantastic way of showing the client what the website could look like. But creating it in the browser means you can make one design for all platforms and you are able to show the client a working prototype very early on.
            <br><br>
            
            <h3>Typography</h3>
            
            Universal Typography (Tim Brown) (25/12/2012)<br>
            Responsive typography (Oliver Reichenstein) (07/11/2013)<br><br>
            
            Ok you have your content, now what? It’s very important that you pick the right font for the situation. Your decision on what typeface you pick reflects on your overall design. For example you wouldn’t use a bold font for your main content else it would become very hard to read, similarly you wouldn’t want a thin font for a main heading because it wouldn’t stand out.
            <br><br>
            
            Also picking a font that is appropriate for all devices is a huge challenge. There are many resolutions that you have to try and cater for. Higher resolution displays such as Apples Retina displays will look a lot different from older or mobile displays. Typography can make or break your website so you should take a lot of time to decide which is best for you and your client’s needs.
            <br><br>
            
            <h3>See the Code</h3>
            
            What the web needs next (Bruce Lawson) (28/10/2013)<br>
            HTML5 Catches Up To Apple (Matt Asay) (06/02/2014)<br><br>
            
            I think I might be right in assuming that some of you will find this a bit intimidating. Don’t worry I won’t be going into nauseating detail, just giving you a few ideas about what you should be doing. <br><br>
            
            First of which being progressive enhancement. Progressive Enhancement means that every layer such as content, mark-up, styles, and behaviour builds upon the next, making sure that the original core content is always accessible by less capable browsers and devices such as IE6 (Internet Explorer 6). Progressive Enhancement means thinking about a web page from the content out (see another reason for content first!).
            Web design doesn’t just stop at web pages, since the new HTML 5 standard and other standards used with it such as CSS3, mobile development is growing in popularity very fast. Designing with these in mind, there are a number of API’s you can use to optimise your application or website for mobile use. Some of these include the GeoLocation API, the video streaming API and HTML5 canvas. Let me give you an example, ever surfed to a web page where you can find a nearest store and it’s asked you for a location? Well that’s the GeoLocation API doing its job and using your phones GPS and phone signal to pinpoint your location so it can find the nearest store relative to you.
            <br><br>
            
            <h3>Going Mobile</h3>
            
            Fixing the mobile web (Chris Heilmann) (06/07/2013)<br>
            Run Chrome Apps on mobile using Apache Cordova (Andrew Grieve) (28/01/2014)<br><br>
            
            Did someone say mobile? Chances are if you’re reading this you have a Smartphone or a Tablet device at your disposal. As I said before mobile is growing at an increasingly fast rate. So another reason for content first (see it’s there again!) is that it makes life so much easier while designing for mobile and mobile applications. So I mentioned web apps right, these can do powerful things for mobile devices. Not only are you not required to install them in a lot of cases like a native application would require you to, but they are cross platform with multiple devices such as Android of Windows Phone.
            <br><br>
            
            
            There is a brilliant tool and framework available at the moment from Adobe called PhoneGap. As the name suggests, this framework bridges the gap between web applications and running them natively on a mobile device. There are many plugins available to, such as a barcode scanner and camera integration. These plugins often require a platform named Apache Cordova.
            <br><br>
            
            Apache Cordova is a platform for building native mobile applications using HTML, CSS and JavaScript. This platform includes device APIs that allow a mobile app developer to access native device functionality such as the camera from the JavaScript file alone. This platform also allows for some powerful functionality such as running applications from the Google Chrome browser on you mobile device.
            <br><br>
            
            <h3>Be Responsive-ble</h3>
            
            Responsive Web Design Workflow (Stephen Hay) (30/01/2014)<br>
            Designing for Breakpoints (Stephen Hay) (04/05/2013)<br>
            Making Embedded Content Work In Responsive Design (Rachel McCollin) (27/02/2014)<br><br>
            
            So you want to build a website that works on all devices huh? Well this may seem like a difficult task but with the right know how you will be creating fancy websites in no time. First you want to start off with the (you guessed it) content first. A very good way of getting your content and prototype out there fast is by using something called a markdown language. Markdown is a plain text formatting language that is designed so that it can be converted to HTML. Once you have your content wrote you can use a program such as Pandoc to convert it to HTML which you can then edit and style using CSS and JavaScript.
            <br><br>
            
            Once you have your content you can then start designing with media queries and responsive breakpoints in mind. Breakpoints are browser widths that, once within the specified range, change the layout of the page. So for example you specify a minimum width of 320px for a mobile breakpoint, when the window size or screen size is below that width it will change the layout of the screen to the designed mobile layout. This becomes challenging when you take into account the amount of devices that are currently available. Also this becomes even more challenging when you start implementing embedded content. Embedded content can be made responsive though and all using CSS and HTML. Setting the styling up using percentages instead of fixed widths and heights and by implementing some other tweaks, embedded content such as YouTube Videos and Google Calendars can change size relative to your layout.
            Get out there!
            <br><br>
            
            Now you know some of the main concepts of designing for today’s modern web, go get out there and get designing! I know doing this research myself has helped me understand the importance of having a design workflow and writing the content first (bet your sick of me saying that by now) as well as learning great design techniques and tools for making life that little bit easier. Hopefully this has helped you to!
            <br>
        </div>
        </section>
    </div>
    
    <!--Blog section end-->
    
    <!--Layered paper image-->
    <img class="borderImage" src="img/sectionBorder2.jpg" alt="border">
    
    <!--Contact section start-->
    
    <div class="container">
        <section id="contactForm" class="stuff2">
            
            <h1>Contact Me!</h1>
            
                <!--Form container that styles form-->
                <div  class="form-container">
                
                    <!--Styling for the form title-->
                    <div class="form-title"><h2>Social Networks</h2></div>
                
                    <!--Div that contains the social buttons associated with some styling-->
                    <div id="socialButtons">
                    
                        <!--Social buttons that are styled with a separate style sheet-->
                        <!--WC3 Validator gives  errors for these because of the way I had to code this to work on all browsers-->
                        <a href="https://www.facebook.com/willcaddy24" target="_parent"><button class="facebook"></button></a>
                        
                        <a href="https://twitter.com/willcaddy" target="_parent"><button class="twitter"></button></a>
                        
                        <!--1 final error caused by the link for my LinkedIn account which unfortunately is unavoidable-->
                        <a href="https://www.linkedin.com/profile/view?id=256549988&trk=nav_responsive_tab_profile_pic" target="_parent"><button class="in"></button></a>
                    
                    </div> 
                
                
                <!--PHP that checks to see if the email has been successful and if so displays a alert-->
                <?php
                    if($emailSuccess == 1){
                    	echo '<script type="text/javascript">';
						echo 'alert("Message Sent")';
						echo '</script>';
                    }
                ?>
                
                
                
                <!--Contact form that is styled from the pagestyle stylesheet-->
                <form method="post" action="<?php $_PHP_SELF ?>">
                    <div class="form-title"><h2>Email Me!</h2></div>
                    <div class="form-title">Name</div>
                    <input class="form-field" type="text" id="inputName" name="name" /><br />
                    <div class="form-title">Email</div>
                    <input class="form-field" type="text" id="inputEmail" name="email" /><br />
                    <div class="form-title">Messege</div>
                    <textarea class="form-field" cols="50" rows="4" id="inputMessage" name="message"></textarea><br />
                    <div class="submit-container">
                    <input class="submit-button" type="submit" value="Send" id="input-submit" name="contact" />
                    </div>                    
                </form>
                                
                </div>  
        </section>
    </div>
    
    <!--Contact section end-->
    
    <!--JavaScript that is used for the navigation bar-->
    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>

  </body>
</html>
