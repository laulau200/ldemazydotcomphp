<!DOCTYPE html>
<section lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css" type="text/css" media="screen" />
    <link rel="stylesheet" media="screen" href="./css/styles.css" />
    <link rel="stylesheet" media="screen" href="css/styles.css" />
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

/* Load an icon library to show a hamburger menu (bars) on small screens */
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

/* navbar*/
 /* Style the navigation menu */
.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

/* Hide the links inside the navigation menu (except for logo/home) */
.topnav #myLinks {
  display: none;
}

/* Style navigation menu links */
.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

/* Style the hamburger menu */
.topnav a.icon {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

/* Add a grey background color on mouse-over */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active link (or home/logo) */
.active {
  background-color: #04AA6D;
  color: white;
} 

/*fin navbar*/
</style>

    <title>Bienvenue sur monsite</title>
</head>
<header>

/* Top Navigation Menu */
<div class="topnav">
  <a href="#home" class="active">Logo</a>
  /* Navigation links (hidden by default) */
  <div id="myLinks">
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
        <?php echo require_once("header.inc") ?>


          <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="exp_pro.php">expériences</a>
  <a href="formation.php">formations</a>
  <a href="loisir.php">course à pied</a>
  <a href="contact.php">Contact</a>
</div>
<div>
  <nav>
            <ul>
                <li><a href="/index.html">Accueil</a></li>
                <li><a href="exp_pro.php">Ma carrière</a></li>
                <li><a href="formations.php">Formations</a></li>
                <li><a href="loisir.php">Un peu de sport</a></li>
                <li><a href="contact.php">me contacter</a></li>
                <!--li><a href="/rubrique5.html">Rubrique 5</a></li-->
            </ul>
        
</nav>
</div>

<button class="openbtn" onclick="openNav()">&#9776; Open Sidebar</button>
  <h2>Collapsed Sidebar</h2>
  <p>Content...</p>
</div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="nav navbar-nav">
          <li class="active"><a href="#"> <span class="sr-only"></span></a></li>
          <li><a href="#"></a></li>
          <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="exp_pro.php">expériences</a></li>
              <li><a href="formation.php">formations</a></li>
              <li><a href="loisir.php">running</a></li>
              <li><a href="contact.php">contact</a></li>
              <li role="separator" class="divider"></li>
              <!--li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li--><a href="#">One more separated link</a></li-->
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
    </header>

<h1>Webdéveloppeur</h1>
<section id="navbar">Manavbar
  <?php echo require_once("header.inc") ?>
</section>
<section id="contenu">
    <article>
    <p>Bonjour, <br>
    Je m'appelle Laurent DEMAZY, et j'ai 45 ans. <br><br>
Technicien Support depuis <em>26 ans,</em><br>
je me reconverti comme <em>Webdéveloppeur</em><br>
J'ai suivi la formation à distance avec 
<a href="
    https://www.proformea.fr/formations/developpeur-web-et-web-mobile/"> <img alt="logo proformea" src="./images/logo_proforma.png"  width="60" height="40" />
    <em>Proformea</em>.
    </a> <br><br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<script
			  src="https://code.jquery.com/jquery-3.7.1.min.js"
			  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
			  crossorigin="anonymous"></script>

/*menu hamburger */
/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
} 
</script>
<body>
    
</body>
</html>