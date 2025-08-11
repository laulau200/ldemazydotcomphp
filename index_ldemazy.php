<!DOCTYPE html>
<section lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css" type="text/css" media="screen" />
    <style>
        /* The sidebar menu */
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

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #F3F3F4;
}

button{
    color:#ffffff;
    background-color: #2ecc71;
    border: none;
    border-radius: 6px;
    padding: 12px 20px;
    font-size: 20px;
    font-weight: 500;
    line-height: 22px;
    display: flex;
    align-items: center;

    box-shadow: 2px 7px 96px -2px rgba(154,171,237,1);
    -webkit-box-shadow: 2px 7px 63px -2px rgba(154,171,237,1);
    -moz-box-shadow: 2px 7px 96px  -2px rgba(154,171,237,1);
}

button:hover{
    box-shadow: none;
    cursor: pointer;
}

button i{
    font-size: 30px;
    padding-right: 5px;
}

#navbar{
    position: fixed;
    top: 10px;
    right: 10px;
    left: 10px;
    padding: 10px;
    color: #fff;
    background: #000;
}

#contenu{
    margin: 10px;
    margin-top: 60px;
    padding: 10px;
    color: #000;
    border: 1px solid #000;
}

.email-button 
{
display: inline-block;

padding: 10px 20px;

background-color: #007bff;

color: #fff;

text-decoration: none;

border-radius: 5px;

font-weight: bold;

transition: background-color 0.3s ease;
}


.email-button:hover 
{
background-color: #0056b3;
}
    </style>

    <title>ldemazydotcom_index</title>
</head>
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
<h1>Webdéveloppeur</h1>
<section id="navbar">Manavbar
    <header>
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

<body>
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
</body>
</html>