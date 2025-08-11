<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site laulau</title>
    <link rel="stylesheet" media="screen" href="./css/styles.css" />
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
  </style>
</head>
<body>
<!--ajout navbar-->
    <header>
        <?php echo require_once("header.inc") ?>
    </header>
<!-- fin ajout-->
    <section id="global">
        <nav>
            <ul>
                <!--li><a href="/index.html">Accueil</a></!--li-->
                <li><a href="exp_pro.php">Ma carrière</a></li>
                <li><a href="formation.php">Formations</a></li>
                <li><a href="loisir.php">Un peu de course</a></li>
                <li><a href="contact.php">me contacter</a></li>
                <!--li><a href="/rubrique5.html">Rubrique 5</a></li-->
            </ul>
        </nav>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>    
  </head-->

  <!--insertion page/ fin l215-->



<body>
    <section id="global">
        <header>
            <h1>pour me contacter</h1>

<div id="main">
  <button class="openbtn" onclick="openNav()">&#9776; Open Sidebar</button>
  <!--h2>Collapsed Sidebar</!--h2>
  <!--p>Content...</!--p>
</div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
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

        <hr>
            <div class="text-changer">
        <p class="intro-text">J'ai travaill&eacute; pour</p> <br>
        <div class="roles-container">
            <span class="role">VALUE IT</span>
            <span class="role">ECONOCOM pour THALES</span>
            <span class="role">TESSI INFORMATIQUE</span>
            <span class="role">LYCEE FAURIEL</span>
            <span class="role">GROUPE CASINO</span>
        </div>
        </div>
        <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="exp_pro.html" class="nav-link"><span>Experiences professionnelles</span></a></li>
            <li class="nav-item"><a href="formation.html" class="nav-link"><span>Formations</span></a></li>
            <li class="nav-item"><a href="loisirs.html" class="nav-link"><span>course à pied</span></a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link"><span>me contacter</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
        <article>
            <h2></h2>
            <p>En cours de formation Webdev, je suis à la recherche d'un emploi. N'hésitez pas à me contacter via le formulaire ! </p>
            <form action="mail.php" class="p-5 bg-dark">
                  <div class="form-group">
                    <label for="name">Votre nom :  </label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Votre mail :  </label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">site internet : </label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message : </label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Envoyez votre message..." class="btn py-3 px-4 btn-primary">
                  </div>

</form>
        </article>
        <article>
            
        </article>


        <footer>

        </footer>

    </section>
    
</body>
    
    <!--fin insertion-->

    </section>
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
</body>
</html>