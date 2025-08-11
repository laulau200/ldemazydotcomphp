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
</style>

    <title>Formations</title>
</head>
<body>
<header>
        <?php echo require_once("header.inc") ?>


          <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="exp_pro.php">expériences</a>
  <a href="formations.php">formations</a>
  <a href="loisir.php">course à pied</a>
  <a href="contact.php">Contact</a>
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
            
            </ul>
        </nav>
    <!--insertion page/ fin l215-->



<body>
    <section id="global">
        <header>
            <h1>Mes formations...</h1>

<div id="main">

      <Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="nav navbar-nav">
          <!--li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></!--li>
          <li><a href="#">Link</a></li>
          <div class="dropdown">
            <!--a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></!-->
            <ul class="dropdown-menu">
              <li><a href="exp_pro.php">expériences</a></li>
              <li><a href="formations.php">formations</a></li>
              <li><a href="loisir.php">running</a></li>
              <li><a href="contact.php">contact</a></li>
              <li role="separator" class="divider"></li>
              <li><!--a href="#">Separated link</!--a></li>
              <li role="separator" class="divider"></li>
              <!li><a href="#">One more separated link</a></li-->
            <ul>
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

<h2>Formations</h2>

<button type="button" class="collapsible">titre professionnel TSSR(niveau BTS) obtenu par VAE en 2020</button>
<div class="content">
  <p>Afin de valoriser mes comp&eacute;tences acquises en autodidacte pour la plupart, j'ai tent&eacute; et obtenu cette VAE pour ce titre niveau V. </p>
</div>

<button type="button" class="collapsible">titre professionnel TAI(niveau BAC) 2016</button>
<div class="content">
  <p>Obtention des trois CCP lors de la formation <b>TAI</b> au <b>CRIP</b>
 &agrave; Montpelier</p>
  <p>Obtention des certifications <b>Cisco</b> It Essentials et <b>CCNA</b>
1&amp;2</p> </p>
</div>

<button type="button" class="collapsible">Bac Informatique et Gestion(1999)</button>
<div class="content">
  <p>J'ai passé ce diplome en fin de scolarité.  </p>
</div>

<button type="button" class="collapsible">Formation WEBDEVELOPPEUR</button>
<div class="content">
  <p>En cours de reconversion, je suis cette formation gr&acirc;ce &agrave;	mon CPF dans le but d'obtenir le titre professionnel (niveau V) <br>...</p>
  <p>J'ai pris des comp&eacute;tences sur cetains langages : <BR><BR> HTML, <BR>CSS, <BR> JAVASCRIPT, <BR> PYTHON, <BR> PHP, <BR> MYSQL... <BR> Et suis en train d'apprendre JQUERY</p>
</div>




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
    
    <!--fin insertion-->

    </section>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    
</body>
</html>