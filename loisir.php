<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css" type="text/css" media="screen" />
    <link rel="stylesheet" media="screen" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/style.css">
<!--essai-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
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
</style>

    <title>Un peu de sport...</title>
</head>
<body>
  <h1>Course à pied</h1>

<header>
        <!--?php echo require_once("header.inc") ?--> 
        <div class="navbar">
    <div class="logo">
        <a href="../index.php">curiculum vitae</a>
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contactez-moi</a></li>
        <li><a href="formations.php">formations</a></li>
        <li><a href="loisir.php">sport</a></li>
		<li><a href="exp_pro.php">Experiences professionnelles</a></li>
    </ul>
</div>
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



    <section id="main">
        <header>
          <!--?php echo require_once("header.inc") ?-->
            <!--h1>Formations suivies</h1-->

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="exp_pro.php">expériences</a>
  <a href="formations.php">formations</a>
  <a href="loisir.php">course à pied</a>
  <a href="contact.php">Contact</a>
</div>

<div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <!--li class="nav-item"><a href="index.html#home-section" class="nav-link"><span>Home</span></a></!--li>
	          <li class="nav-item"><a href="index.html#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="index.html#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="index.html#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="index.html#skills-section" class="nav-link"><span>Skills</span></a></li>
	          <li class="nav-item"><a href="index.html#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="index.html#blog-section" class="nav-link"><span>My Blog</span></a></li>
	          <li-- class="nav-item"><a href="index.html#contact-section" class="nav-link"><span>Contact</span></a></li-->
            <li class="nav-item"><a href="exp_pro.php" class="nav-link"><span>Experiences professionnelles</span></a></li>
            <li class="nav-item"><a href="formations.php" class="nav-link"><span>Formations</span></a></li>
            <li class="nav-item"><a href="loisirs.php" class="nav-link"><span>course à pied</span></a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link"><span>me contacter</span></a></li>
	        </ul>
	      </div>
        </header>


<h1>Sport</h1>
<button type="button" class="collapsible">Course à pied</button>
<div class="content">
  <p>17 marathons : tous terminés</p>
                <ul>
                  <li>7 marathons de Lyon</li><br>
                  <li>4 marathons d'Annecy(record personnel en 2'57'59)</li><br>
                  <li>2 marathons de Rennes</li><br>
                  <li>1 marathon de Paris</li><br>
                  <li>1 marathon de Montbrison</li><br>
                  <li>1 marathon de Montpelier</li><br>
                </ul>
                <br>
<p>Trails</p>
                <ul>
                  <li>2 Saintélyons</li><br>
                  <li>1 Le Puy-Firminy</li><br>
                  <li>Plusieurs participations au STU</li><br>
                  <li>Plusieurs participations à Courir pour des pommes</li><br>
                  <li>...</li><br>
                </ul>
                <br>
                <br>
</div>

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