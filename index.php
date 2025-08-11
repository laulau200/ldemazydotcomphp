<!-- test
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css" type="text/css" media="screen" />
    <link rel="stylesheet" media="screen" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/style.css">
<style>
	.sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

/*menu hamburger*/
/* hide responsive menu */
#topnav_hamburger_icon,
#topnav_responsive_menu {
    display: none;
}

@media only screen and (max-width: 768px) {
    /* hide classic menu */
    #topnav_menu {
        display: none;
    }

    /* position home link at left and hamburger will be positionned at right */
    .topnav {
        width           : 100%;
        display         : flex;
        align-items     : center;
    }

    #home_link {
        flex-grow: 1;
    }

    /* position responsive menu at the right of the screen */
    #topnav_responsive_menu ul {
        display       : flex;
        flex-direction: column;

        position: absolute;
        margin  : 0;
        right   : 0;
        top     : 0;

        min-width: 50vw;
        height   : 100vh;
    }
}

@media only screen and (max-width: 768px) {
    /* disable horizontal scrolling  */
    #root {
        position: relative;
        overflow-x: hidden;
    }

    /* position responsive menu at the right of the screen */
    #topnav_responsive_menu {
        display : block;
        position: absolute;
        right   : 0;
        top     : 0;
        margin  : 0;
        width   : 100vw;
        height  : 100vh;

        z-index: 99;

        transform-origin: 0% 0%;
        transform       : translate(200%, 0);

        transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
    }

    /* and let's slide it in from the right */
    #topnav_responsive_menu.open {
        transform: none;
        position : fixed;
    }
}

@media only screen and (max-width: 768px) {
    /* define size and position of the hamburger link */
    #topnav_hamburger_icon {
        display    : block;
        position   : relative;
        margin     : 16px;
        width      : 33px;
        height     : 28px;
        z-index    : 100;
        user-select: none;
        cursor     : pointer;
    }

    /* define the style (size, color, position, animation, ...) of the 3 spans */
    #topnav_hamburger_icon span {
        display      : block;
        position     : absolute;
        height       : 4px;
        width        : 100%;
        margin-bottom: 5px;
        background   : #ededed;
        border-radius: 3px;
        z-index      : 100;
        opacity      : 1;
        left         : 0;

        transform : rotate(0deg);
        transition: .25s ease-in-out;
    }

    /* set the 3 spans position to look like a hamburger */
    #topnav_hamburger_icon span:nth-child(1) {
        top             : 0px;
        transform-origin: left top;
    }
    #topnav_hamburger_icon span:nth-child(2) {
        top             : 12px;
        transform-origin: left center;
    }
    #topnav_hamburger_icon span:nth-child(3) {
        top             : 24px;
        transform-origin: left bottom;
    }

    /* the first span rotates 45° \ */
    #topnav_hamburger_icon.open span:nth-child(1) {
        width    : 110%;
        transform: rotate(45deg);
    }
    /* the second span disappears */
    #topnav_hamburger_icon.open span:nth-child(2) {
        width  : 0%;
        opacity: 0;
    }
    /* the last span rotates -45° / */
    #topnav_hamburger_icon.open span:nth-child(3) {
        width    : 110%;
        transform: rotate(-45deg);
    }
}

/*fin menu hamburger*/
</style>

    <title>un peu de course</title>
</head>
<body>
<header>
        <?php echo require_once("header.inc") ?>
<nav class="navbar navbar-default">

      <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="exp_pro.php">expériences</a>
  <a href="formations.php">formations</a>
  <a href="loisir.php">course à pied</a>
  <a href="contact.php">Contact</a>
</div>



  <button class="openbtn" onclick="openNav()">&#9776; Open Sidebar</button>
  <!--h2>Collapsed Sidebar</h2-->
  <p>Content...</p>
</div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="nav navbar-nav">
          <!--li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></!--li>
          <li><a href="#">Link</a></li>
          <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu"-->
              <li><a href="exp_pro.php">expériences</a></li>
              <li><a href="formations.php">formations</a></li>
              <li><a href="loisir.php">running</a></li>
              <li><a href="contact.php">contact</a></li>
              <li role="separator" class="divider"></li>
              <!--li><a href="#">Separated link</a></li-->
              <li role="separator" class="divider"></li>
              <!--li><a href="#">One more separated link</a></li-->
            </ul>
        </div>
        </div>
          </li>
        </ul>
</ul>
<script>
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>
<!--menu hamburger-->
<!-- url : https://iridescent.dev/posts/web/creer-un-menu-hamburger-->
<div id="root">
    <div id="topnav" class="topnav">
        <a id="home_link" class="topnav_link" href="/">HOME</a>

        <!-- Classic Menu -->
        <nav role="navigation" id="topnav_menu">
            ...
        </nav>

        <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
            <!-- Some spans to act as a hamburger -->
            <span><a href="./index.php">page index</a></span>
            <span></span>
            <span></span>
        </a>

        <!-- Responsive Menu -->
        <nav role="navigation" id="topnav_responsive_menu">
            ...
        </nav>
    </div>
</div>
<script>
  function showResponsiveMenu() {
    var menu = document.getElementById("topnav_responsive_menu");
    var icon = document.getElementById("topnav_hamburger_icon");
    var root = document.getElementById("root");
    if (menu.className === "") {
        menu.className = "open";
        icon.className = "open";
        root.style.overflowY = "hidden";
    } else {
        menu.className = "";                    
        icon.className = "";
        root.style.overflowY = "";
    }
}
</script>


<!-- fin menu-->
 <div class="navbar">
    <div class="logo">
        <a href="../index.php">curiculum vitae</a>
    </div>
    <ul class="nav-links">
        <li><a href="../index.php">Home</a></li>
        <li><a href="contact.php">Contactez-moi</a></li>
        <li><a href="formation.php">formations</a></li>
        <li><a href="loisir.php">sport</a></li>
		<li><a href="exp_pro.php">Experiences professionnelles</a></li>
    </ul>
</div>
</header>


          <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="exp_pro.php">expériences</a>
  <a href="formations.php">formations</a>
  <a href="loisir.php">course à pied</a>
  <a href="contact.php">Contact</a>
</div>

<!--button class="openbtn" onclick="openNav()">&#9776; Open Sidebar</!--button>
  <h2>Collapsed Sidebar</h2>
  <p>Content...</p>
</div-->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="nav navbar-nav">
          <li class="active"><a href="#"> <span class="sr-only"></span></a></li>
          <li><a href="#"></a></li>
          <div class="dropdown">
            
            </ul>
        </nav>
    <!--insertion page/ fin l215-->
    <body>
      
    
<h1>Webdéveloppeur</h1>
<section id="navbar">Manavbar
    <header>
        <?php echo require_once("header.inc") ?>
</section>
<section id="contenu">
    <article>
    <p>Bonjour, <br>
    Je m'appelle Laurent DEMAZY, et j'ai 45 ans. <br><br>
Technicien Support depuis <em>26 ans,</em><br>
je me reconverti comme <em>Webdéveloppeur</em><br>
J'ai suivi la formation à distance avec <em>Proformea</em>. <br><br>
Depuis 26 ans, j'ai été Technicien Support pour plusieurs entreprises de la région stéphanoise : 
<ul><br>
    <li>VALUE IT</li>
    <li>ECONOCOM pour THALES</li>
    <li>TESSI</li>
    <li>LYCEE FAURIEL</li>
    <li>GROUPE CASINO(13 ans)</li>
    <br>
    Retrouvez mon CV sur <a href="exp_pro.php">CV Laurent DEMAZY</a>
</ul> 
</p>
    
    </article>

    <article>
        <p>Je suis reconnu travailleur handicapé depuis 26 ans. </p>
    <p>Je pratique assidument la course à pied pendant mon temps libre. </p> <br>
    </article>

    <article>
        <a href="mailto:laurent.demazy@gmail.com" class="email-button">Contactez-moi !</a>
    </article>

    <footer></footer>

    </section>
    </body>
    <!--fin insertion-->

    </section>

    <script>
var coll = document.getElementsByClassName("collapsible");
var i;


<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
  <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
    
</body>
</html>