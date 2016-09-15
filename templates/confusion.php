<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include ("../includes/head-import.php"); ?>
    
    <title>Abel Lifaefi Mbula | Portfolio: con Fusion</title>

    
</head>

<body>
    <?php include ("../includes/menus-other.php"); ?>
    <header class="jumbotron" style="padding-top: 100px;" id="confusion-bg">
        <div class="container">
            <div class="row row-header">
                <div class="col-md-4">
                    <h1>con Fusion</h1>
                    <ul style="font-style: italic; display: inline-block;">
                        <li><span aria-hidden="true">#</span>intégration</li>
                        <li><span aria-hidden="true">#</span>développement</li>

                    </ul>
                    <p class="text-center"> Un site de restaurant qui permet aux clients de faire des reservations en ligne. Il se veut attractif sur tout support de visualisation. </p>
                    <p class="text-center"><a href="../xp/conFusion/index.php" class="more"><button id="myButton">Voir le site</button></a></p>
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
                        <div class="col-md-offset-1 col-md-5"><img src="../img/project/logo-confusion.png" alt="logo" /></div>
                    </div>
                    <div class="row">
                        <p>con Fusion est un restaurant indien qui propose une cuisine totalement inédite en proposant des menus faits de la combinaison de la cuisine indienne et chinoise.</p>
                        
                    </div>
                </div>
                <div class="col-md-offset-1 col-xs-12 col-md-6">
                    <h2>Le Projet</h2>
                    <p>Mon client m'a contacté pour lui proposer un site dont l'objectif sera de permettre à ses clients de faire des reservations depuis Internet. Son second objectif était de pouvoir convertir de nouveaux prospects en clients.</p>
                     
                    <h3>Le travail réalisé</h3>
                     <p>Ce projet a été mené de A à Z. Après constitution du cachier des charges et proposition de la maquette, j'ai commencé l'intégration du site en HTML5, CSS3 et Bootstrap. Les interactivités ont été réalisées en JS et jQuery; et le tout dynamisé avec PHP</p>
                    
                    <h3>Technologies utilisées</h3>
                    <span class="badge">HTML</span>
                    <span class="badge">CSS</span>
                    <span class="badge">Bower</span>
                    <span class="badge">Bootstrap</span>
                    <span class="badge">JS</span>
                    <span class="badge">jQuery</span>
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
                    <p>Pour ne rien vous cacher, voici l'interface du site </p>
                </div>
			</div>
                <div class="row">
                    <img src="../img/project/confusion.PNG" alt="confusion"><!-- put an img showing what i did (desktop, tablette, mobi)-->
                </div>
            </div>
        </section>
    </div>
    
    <?php include ("../includes/project-footer.php"); ?>
<?php include ("../includes/footer.php"); ?>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/jquery.js"></script> <!--jQuery in local-->
    
    <!-- Javascript for Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script><!--JS for Bootstrap in local-->
</body>

</html>