<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Syliva's Contact</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
      <link rel="stylesheet" href="stylesheets/foundation-icons.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
<div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <nav class="tab-bar hide-for-medium-up">
                <section class="left-small">
                    <a class="left-off-canvas-toggle menu-icon"><span></span></a>
                </section>
            
            </nav>
            <aside class="left-off-canvas-menu">
            <ul class="off-canvas-list">
                <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li class="has-dropdown">
        <a href="services.html">Services</a>
        <ul class="dropdown">
          <li><a href="services.html#cater">Catering</a></li>
          <li><a href="services.html#celebrate">Celebrations</a></li>
          <li><a href="services.html#class">Cooking Classes</a></li>
        </ul>
      </li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
            </aside>
            <a class="exit-off-canvas"></a>
            
<nav class="top-bar show-for-medium-up" data-topbar role="navigation">
  <ul class="title-area">
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar"><a href="#"><span></span></a></li>
  </ul>

  <section class="top-bar-section">

    <ul class="left">      
                <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li class="has-dropdown">
        <a href="#">Services</a>
        <ul class="dropdown">
          <li><a href="services.html#cater">Catering</a></li>
          <li><a href="services.html#celebrate">Celebrations</a></li>
          <li><a href="services.html#class">Cooking Classes</a></li>
        </ul>
      </li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
            
            </nav> 
    
<header class="header">
    
    <div class="row">
            <div class="large-6 columns">
                <img src="images/sylvias-logo.png">
            </div>
  <div class="large-6 columns">
       <p class="p-right"><strong>Our Home Base</strong><br>1234 Penn Avenue <br> Resturant, PA 16789 <br> #555-5555-6789</p>    
        </div>
</div>
      
</header>
      
<section>
      

      

          <div class="row">
              <div class="medium-4 columns">
          <h1>Contact Us</h1>
          <p>If you have any questions, comments or concerns, please do let us know by filling out the forms below. After it is sent, we will do our best to provide you with the answer you are looking for as soon as possible. We usually respond within 24 hours, so please be patient.</p>
                  </div>
          <div class="medium-8 columns pushdown">
<form class="form-horizontal" role="form" method="post" action="contact.php">
    
     <div class="form-group">
    <label for="name" class="small-2 columns control-label">Name</label>
    <div class="small-10 columns">
      <input type="text" class="form-control" name="name" id="name" placeholder="First & Last Name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);  ?>">
        <?php if(isset($errName)){echo "<p class='text-danger'>$errName</p>";} ?>
        
    </div>
  </div>
    
  <div class="form-group">
    <label for="email" class="small-2 columns control-label">Email</label>
    <div class="small-10 columns">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email"
        value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);  ?>">
        <?php if(isset($errEmail)){echo "<p class='text-danger'>$errEmail</p>";} ?>
    </div>
  </div>
    
  <div class="form-group">
      <label for="message" class="small-2 columns control-label">Message</label>
    <div class="col-sm-offset-2 small-10 columns">
        <textarea class="form-control" name="message" rows="4" placeholder="Enter message here..."><?php if(isset($_POST['message'])){echo $_POST['message'];} ?></textarea>
        <?php if(isset($errMessage)){echo "<p class='text-danger'>$errMessage</p>";} ?>
    </div>
  </div>
    
    <div class="form-group">
    <label for="human" class="small-2 columns control-label">2 + 3 = ?</label>
    <div class="small-10 columns">
      <input type="text" class="form-control" name="human" id="human" placeholder="Are You Human?" value="<?php if(isset($_POST['human'])){echo htmlspecialchars($_POST['human']);} ?>">
        <?php if(isset($errHuman)){echo "<p class='text-danger'>$errHuman</p>";} ?>
             
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-offset-2 small-10 columns">
        <button type="submit" name="submit" class="btn btn-default">Send</button>
    </div>
  </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 small-10 columns">
        <!--Will be used to display alert to the user -->
            <?php if(isset($result)){echo "$result"; }?>
        </div>
    </div>
    </div>
</form>
      </div><!--end col md 8-->
    </div><!--end row-->
      </section>
      
 
      <footer>
      <p>Stay Connected With Us via Social Media!</p>
          
          <div class="icon-bar five-up">
  <a href="www.facebook.com" class="item">
    <img src="images/facebook.png">
    <label>Facebook</label>
  </a>
  <a href="www.twitter.com" class="item">
    <img src="images/twitter.png">
    <label>Twitter</label>
  </a>
  <a href="www.googleplus.com" class="item">
    <img src="images/google.png">
    <label>Google+</label>
  </a>
  <a href="www.linkedin.com" class="item">
    <img src="images/linkedin.png">
    <label>LinkedIn</label>
  </a>
  <a href="https://www.google.com/maps/place/Le+Jeune+Chef+Restaurant/@41.2379568,-77.0293886,16.27z/data=!4m2!3m1!1s0x0000000000000000:0x36574a6cad7562a8?hl=en" class="item">
    <img src="images/gmaps.png">
    <label>Directions</label>
            </a>
          </div>              
          
<p>Copyright &copy; 2015 Syliva's Resturant </p>
      </footer>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
