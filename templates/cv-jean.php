<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include ("../includes/head-import.php"); ?>
    
    <title>Abel Lifaefi Mbula | Portfolio: Architecte</title>

    
</head>

<body>
    <?php include ("../includes/menus-other.php"); ?>
    <header class="jumbotron" style="padding-top: 100px;" id="architect-bg">
        <div class="container">
            <div class="row row-header">
                <div class="col-md-4">
                    <h1>La maison d'architecte</h1>
                    <ul style="font-style: italic; display: inline-block;">
                        <li><span aria-hidden="true">#</span>intégration</li>
                        <li><span aria-hidden="true">#</span>développement</li>

                    </ul>
                    <p style="text-align: center;"> Site vitrine pour une jeune entreprise spécialisée dans les bâtiments. Il se veut responsive et one page</p>
                    <p class="text-center"><a href="#" class="more"><button class="myButton">Voir le site</button></a></p>
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
                        <p><a href="#">La maison d'architecte</a> est une entreprise spécialisée dans dans tous types de construction. Constituée d'une équipe jeune, reactive et compétente, <strong>La maison d'architecte</strong>   prend en charge un projet de A à Z. </p>
                        <p>La maison d'architecte privilégie le dialogue client pour s'assurer de la satifaction de ce dernier </p>
                    </div>
                </div>
                <div class="col-md-offset-1 col-xs-12 col-md-6">
                    <h2>Le Projet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <h3>Technologies utilisées</h3>
                    <span class="badge">HTML</span>
                    <span class="badge">CSS</span>
                    <span class="badge">Bootstrap</span>
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
                    <div class="col-md-offset-1"><img src="../img/project/confusion.PNG" alt="confusion"></div><!-- put an img showing what i did (desktop, tablette, mobi)-->
                </div>
            </div>
        </section>
    </div>
    <?php include ("../includes/project-footer.php"); ?>
<?php include ("../includes/footer.php"); ?>

</body>

</html>