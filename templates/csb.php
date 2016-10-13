<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include ("../includes/head-import.php"); ?>
    
    <title>Abel Lifaefi Mbula | Portfolio: con Fusion</title>

    
</head>

<body>
    <?php include ("../includes/menus-other.php"); ?>
    <header class="jumbotron" style="padding-top: 100px;" id="csb-bg">
        <div class="container">
            <div class="row row-header">
                <div class="col-md-4">
                    <h1>CSB</h1>
                    <ul style="font-style: italic; display: inline-block;">
                        <li><span aria-hidden="true">#</span>maintenance</li>
                        <li><span aria-hidden="true">#</span>développement</li>

                    </ul>
                    <p style="text-align: center;"> Tous les challenges de la maitenance d'un site avec un back-office inaccessible</p>
                    <p class="text-center"><a href="http://www.centresurveillancebiodiversite.org" class="more"><button class="myButton">Voir le site</button></a></p>
                </div>
                <div class="col-md-8"><img src="../img/project/confusion.PNG" width="100%"></div>
            </div>
        </div>
    </header>
    
    <div class="container-fluid project-item" id="bg-confusion"><!-- use class project-item to fix padding-->
        <section class="row section">
            <div class="container">
                <div class="col-xs-12 col-md-5">
                    <div class="row">
                        <div class="col-md-6"><h2>Le Client</h2></div>
                        <!--<div class="col-md-offset-1 col-md-5"><img src="../img/project/logo-confusion.png" alt="logo" /></div>-->
                    </div>
                    <div class="row">
                        <p>Le <a href="centredesureveillance.com"><abbr title="Centre de surveillance de la biodiversité">CSB</abbr></a> est le centre de référence sur la biodiversité dans le bassin du Congo.

      </p>
                        <p>Offrir une infrastructure permanente qui facilite des actions et des retombés positives pour la biodiversité ainsi qu'exécuter une stratégie pour la sauvegarde et l’exploitation durable de la biodiversité dans le bassin du Congo sont ses principales missions </p>
                    </div>
                </div>
                <div class="col-md-offset-1 col-xs-12 col-md-6">
                    <h2>Le Projet</h2>
                    <p>Le webmestre de ce site a fait appel à mon expertise, par recommandation de l'un de mes anciens employeurs, lorsqu'il a sans le savoir modifier l'URL de son site web</p>
                        <p>Frustré, pris de pannique; le seul secours ne pouvait que venir de moi, ainsi qu'on l'a dit depuis la Belgique d'où il venait d'un stage de création de site web avec WordPress </p>
                    <p>Pour résoudre le problème, il fallu accéder par FTP à la racine du serveur du site. Et par la suite éditer le fichier <span style="font-weight: bold;">wp-config.php</span> <br>
                    Enfin de prévenir ce problème pour l'avenir, j'ai du ajouter 2 ligne de code au début du fichier wp-config.php</p>
                    <h3>Technologies utilisées</h3>
                    <span class="badge">HTML</span>
                    <span class="badge">CSS</span>
                    <span class="badge">PHP</span>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Result
    ========================================================-->
    <div class="container-fluid project-item"><!-- use class project-item to fix padding-->
        <section class="row section">
            <div class="container">
               <h2 class="text-center">Le résultat</h2>
                <div class="row">
				<div class="col-xs-12 text-center section-intro">
                    <p>Pour ne rien vous caché, mon client a repris son site et tout marche bien depuis lors</p>
                </div>
			</div>
                <div class="row">
                    <img src="../img/project/csb-dashboard.PNG" alt="csb" width="100%">
                </div>
            </div>
        </section>
    </div>
    
    <!-- Think
    ========================================================-->
    <div class="container-fluid project-item">
        <section class="row section">
            <div class="container">
               <h2 class="text-center">Que pense le client?</h2><br>
                <div class="row">
				<p>Au si tôt que j'ai appris à mon client que son interface d'administration était maintenant accessible, il était ébloui.</p>
                   <p> Et voici sa réaction</p>
                    <q>Qu'avez-vous fait, s'il vous plait? Il n'y a plus rien que je puisse vous demander. Tout marche à merveille. Merci!</q>
			</div>
                
            </div>
        </section>
    </div>
    
    <?php include ("../includes/project-footer.php"); ?>
<?php include ("../includes/footer.php"); ?>
    
</body>

</html>