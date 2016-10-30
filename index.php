<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include ("includes/head-import.php"); ?>
    
    <title>Abel Lifaefi Mbula | Développeur Web sur Kisangani</title>
    
</head>

<body>
<?php include ("includes/menus-home.php"); ?>
    
    <!-- Breadcrumb
    ==============================================================
    <div class="container">
         <div class="row">
            <div class="breadcrumb">
                <ol class="breadcrumb">
                  <li><a href="index.htm">Accueil</a></li>
                  <li class="active">Accueil</li>

                </ol>
            </div>
        </div>
        
    </div>-->
    
    <!-- Jumbotron
    ==============================================================-->
    <header class="jumbotron" id="welcome">
        <div class="container">
            <div class="row row-header">
               <!-- <div class="col-xs-12 col-md-4 col-sm-4"><img src="img/abel-profil%202016.png" alt="profil" height="300" width="300">
                    <h3 class="text-center">Abel Lifaefi Mbula</h3>
                    <h4 class="text-center">Développeur Full Stack et Formateur
                    </h4>
                </div>-->
                <div class="col-xs-12 text-center">                    
                   <div class ="welcome-note">
                    <h1 id="first-intro" aria-level="1">Professionnel de l'<abbr title="Information Technology">IT</abbr> depuis 5+ ans</h1>
                    <p id="second-intro"><strong>enseigner</strong>, <strong>conseiller</strong> et vendre des 
                       <strong>services</strong><!-- Et <strong>auteur</strong> nocturne--></p>
                       <p id="full-stack">retrouvez la joie de travailler avec un <strong>Développeur Web Full Stack</strong></p><br>
                       <!-- <p id="get-started">Curieux-se? Cliquez pour en savoir plus</p>--><br />
                       <div id="goDown" class="col-xs-offset-6">
                          <a href="#activity"> <i class="fa fa-angle-down"></i></a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container" role="main">
        
        
        <section id="activity" class="section">
            <h2 class="text-center">Ce que je fais en bref...</h2>
			<div class="row">
				<div class="col-md-12 text-center section-intro">
                    <p>Mon quotidien est rempli de missions diverses et variées: gérer des projets informatiques, partager ma connaissance, animer/modérer des forums, proposer des conseils et faire la veille technologique sur le développement web et mobile </p>
                </div>
			</div>
            <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <div class="text-center" style="color:#ff9800">
                    <span class ="glyphicon
                        glyphicon-education text-center" style="size:2em;"></span><h3>Formation, conférence</h3></div>
                   
                    <p>En moyenne 10 personnes sont formées et 1 conference ou aterlier animé chaque mois</p><p> Je parle de la bureautique, d'Android, de <abbr title="WordPress">WP</abbr> et de la programmation web.</p>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <div class="text-center" style="color:#ff9800"><span class ="glyphicon
                        glyphicon-user"></span><h3>Conseil</h3></div>
                    <p>Ma longue expérience dans l'ingénierie informatique me permet d'exercer le métier de <strong>consultant IT</strong></p>
                    <p>Mes conseils portent sur le choix de l'<abbr title="Systeme d'exploitation">OS</abbr>, d'un <abbr title="Systeme de gestion des bases de donnees">SGBD</abbr>, de l'hébergment web... </p>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <div class="text-center" style="color:#ff9800"><span class ="glyphicon
                        glyphicon-usd text-center"></span><h3>Freelance</h3></div>
                    
                    <p>Je travaille actuellement sur différentes msissions web en freelance et entreprends de monter une <abbr title="Société de service et d'ingénieurie informatique">SS2I</abbr> très prochainement</p>
                    <p>Mon tarif horaire moyen s'élève à <strong>12,5 €</strong></p>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6">
                    <div class="text-center" style="color:#ff9800"><span class ="glyphicon
                        glyphicon-comment"></span ><br> <h3>Communauté</h3></div>
                    <p>Je suis actif dans plusieurs grands forums informatiques où je passe en moyenne 2 à 3 heures/semaine: <a href="https://www.openclassrooms.com">OpenClassrooms</a>, <a href="https://www.developpez.com">Developpez.com</a>, <a href="https://www.coursera.org">Coursera</a>, ...</p>
                    <p>Je suis auteur d'un <abbr title="Cours en ligne massif et ouvert">MOOC</abbr></p>
                </div>
                
            </div>
            <div class="text-center section-end"> <a href="templates/about.php" class="more"><button class="myButton">En savoir plus</button></a></div><!--Link to about.html-->
        </section>
       
        <!-- Palmares-->
        <div class="container-fluid">
        <section id="project" class="section container">
            <h2 class="text-center">Palmares</h2>
            
                <div class="col-xs-12 text-center section-intro">
                    <p>Sélection de quelques projets realisés pour mes clients</p>
                    
                </div>
            <div id="confusion-bg">
                    
                        <div class="col-md-4">
                            <h1>con Fusion</h1>
                            <ul style="font-style: italic; display: inline-block;">
                                <li><span aria-hidden="true">#</span>intégration</li>
                                <li><span aria-hidden="true">#</span>développement</li>

                            </ul>
                            <p style="text-align: center;"> Un site de restaurant qui permet aux clients de faire des reservations en ligne. Il se veut attractif sur tout support de visualisation. </p>
                            <p class="personal-button"><a href="templates/confusion.php" class="more"><button class="myButton">En savoir plus</button></a></p>
                        </div>
                        <div class="col-md-8"><img src="img/project/confusion.PNG" alt="confusion" width="100%"></div>
                   
               
                
            </div>
            
        </section>
        </div>
        <!-- Training and publication-->
        <section id="training" class="section">
            <h2 class="text-center">Formations et publications</h2>
            
                <div class="col-xs-12 text-center section-intro">
                    <p>Partager la connaissance, c'est un défi pour moi!</p>
                    
                </div>
                <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h3 class="text-center">Formations</h3><br>
                    <div class="col-md-5 col-md-push-7">
                        Je suis un enseignant d'informatique depuis plusiuers années. Je suis un Authorized ICDL Tester. <br><br>Mes domaines de prédilections: <br><br>
                        <ul>
                            <li>les fondamentaux de l'ordinateur,</li>
                            <li>la programmation web, </li>
                            <li>la maintenance et le dépannage d'ordinateurs,</li>
                            <li>etc.</li>
                        </ul>
                    </div>
                    <figure class="col-md-7 col-md-pull-5">
                        <img src="img/project/afac.JPG" width="100%">
                        <figcaption>En pleine formation avec les femmes de la société civile et deputées provinciales, Kisangani décembre 2013</figcaption>
                    </figure>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h3 class="text-center">Publications</h3><br>
                    <p class="text-center">Je me mets a l'ecriture pour des générations futures</p><br>
                    
                    <div class="col-md-3"><a href="https://openclassrooms.com/courses/protegez-l-ensemble-de-vos-donnees-sur-votre-ordinateur-1"><img src="img/pub-protection-donnees-perso.PNG" alt="publication OC"></a></div>
                    <div class="col-md-3">
                        <h4>Potégez l'ensemble de vos données sur votre ordinateur</h4>
                        <p>Il s'agit d'un MOOC publié sur la plateforme <a href="https://openclassrooms.com/courses/protegez-l-ensemble-de-vos-donnees-sur-votre-ordinateur-1">OpenClassrooms</a> 1 500+ étudiants</p>
                    
                    </div>
                    <div class="col-md-3"><a href="#"><img src="img/pub-protection-donnees-perso.PNG" alt="publication OC"></a></div>
                    <div class="col-md-3">
                        <h4>Memento d'un technicien IT, Guide pratique</h4>
                        <p>A paraitre chez <a href="#">Amazon</a></p>
                    
                    </div>
                </div>
            </div>
                        
            <div class="text-center section-end"> <a href="templates/about.php" class="more"><button class="myButton">En savoir plus</button></a></div><!--Link to about.php-->
        </section>
        
        <!-- Engagements
        <section id="engagements" class="section">
            <h2 class="text-center">Mes engagements</h2>
            
                <div class="col-xs-12 text-center section-intro">
                    <p>Lorem ipsom</p>
                    
                </div>
                <div class="row">
                <div class="col-xs-12 col-md-12">
                   
                    <div class="col-md-3" id="mooc">
                       <img src="img/pub-protection-donnees-perso.PNG" alt="">
                    </div>
                    <div class="col-md-3" id="free">
                       <img src="img/pub-protection-donnees-perso.PNG" alt="">
                    </div>
                    <div class="col-md-3" id="internet">Voir manifeste mozilla
                       <img src="img/pub-protection-donnees-perso.PNG" alt="">
                    </div>
                    <div class="col-md-3" id="security">Voir manifeste mozilla
                       <img src="img/pub-protection-donnees-perso.PNG" alt="">
                    </div>
                </div>
                
                </div>
                        
        </section>-->
        <!-- What they say about me-->
        <section id="say" class="section">
            <h2 class="text-center">Ils parlent de moi en bien</h2>
            <div class="row">
				<div class="col-md-12 text-center section-intro">
                    <p>Mon expertise n'est plus à démontrer. Voici ce qu'on dit de moi</p>
                    
                </div>
			</div>
            <div class="row">
                <div class="col-md-2"><img src="img/profil.jpg" alt="image1" class="img-circle">
                    <h4>Pierre Mukadi</h4>
                    <h5>Net et sys Admin, <strong><a href="http://www.unikis.ac.cd">UNIKIS</a></strong></h5>
                </div>
                <div class="col-md-4 think">
                    <p>Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom
                    Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom </p>
                    <p></p>
                </div>
                <div class="col-md-2"><img src="img/profil.jpg" alt="image2" class="img-circle">
                    <h4>Catherine Darbelly</h4>
                    <h5>Chef d'entreprise, <strong>CD Training</strong></h5>
                </div>
                <div class="col-md-4 think">
                    <p>Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom</p>
                    <p>Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"><img src="img/profil.jpg" alt="image3" class="img-circle">
                    <h4>Patience Kavira</h4>
                    <p>Chercheuse, <strong>CSB</strong></p>
                </div>
                <div class="col-md-4 think">
                    <p>Lorem ipsom Lorem ipsom Lorem ipsom Lorem ipsom </p>
                </div>
                <div class="col-md-2"><img src="img/michel-nteb.png" alt="michel nteb" class="img-circle">
                    <h4>Michel Longombo</h4>
                    <p>Gestionnaire, <strong>NTEB</strong></p>
                </div>
                <div class="col-md-4 think">
                    <p>Abel est un informaticien compétent, capable et est sûr de ce qu’il fait. C’est-à-dire qu'il connait bien son métier
                    </p><p>Je l’ai connu comme tout autre. Mais lorsque je me suis approché de lui, j’ai senti la différence par sa façon de travailler
                    </p>
                </div>
            </div>
            <!--<div class="text-center section-end"> <a href="testimony.html" class="more">En savoir plus...</a></div>Link to testimony.html-->
        </section>
       
        <?php include ("includes/project-footer.php"); ?>
    </div>
    
   <?php include ("includes/footer.php"); ?>
   
  </body>
</html>