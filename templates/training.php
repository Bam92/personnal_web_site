<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include ("../includes/head-import.php"); ?>
    
    <title>Abel Lifaefi Mbula | Formation</title>

</head>

<body>
    <?php include ("../includes/menus-other.php"); ?>
    <!-- Jumbotron - Introduction of this page
        ==============================================================-->
        <header class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-md-3 col-md-push-9" style="margin-top:70px">
                        <img src="../img/prof.jpg" alt="enseignant" id="enseignant" width="100%" height="120%">
                    </div>
                    <div class="col-md-pull-3 col-xs-12 col-md-9">
                        <h1>Ma mission est simple:</h1>
                        
                        <blockquote>Démystifier les <abbr title="Technologies de l'information et de la communication">TIC</abbr> au près du grand public.</blockquote>
                         <p>Je suis donc convaincu que tout le monde peut se mettre à l'informatique et ce quel que soit son âge ou son niveau d'étude.</p>
                <p>Je sais faire ce que les autres ne font pas: <br>
                <strong>traduire le language</strong> des techiciens et ingénieurs en B.A-BA pour les novices</p>
                        <p>N'hésitez pas à me <a data-toggle="modal" data-target="#training-form" data-backdrop="false">contacter</a> pour votre formation</p>
               <!-- Modal Form 'contact-me for your training'
                =======================================-->
                     <div class="modal fade" id="training-form" role="dialog">
                         <div class="modal-dialog modal-xs">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-center">Demande de formation</h4>
                                 </div>
                                 <div class="modal-body">
                                     <form class="form-horizontal well" role="form">
                                         <div class="form-group">
                                             <label for="text">Entreprise/Société</label>
                                             <input type="text" id="text" class="form-control" placeholder="Vodacom">
                                         </div>
                                         <div class="form-group">
                                             <label>Objet</label>
                                             <input type="text" class="form-control" placeholder="Formation du personnel">
                                         </div>
                                         <div class="form-group">
                                             <label>Technologies:</label>
                                             <input type="checkbox">Windows
                                             <input type="checkbox">GNU/Linux
                                             <input type="checkbox">Office
                                             <input type="checkbox">Libre/OOO
                                             <input type="checkbox">Autres
                                             <p id="new-techno">Renseignez la (les) technologie(s) ici:
                                             <input type="text" id="text" class="form-control" placeholder="Programmation web"></p>
                                         </div>
                                         <div class="form-group">
                                              <label>Durée</label>
                                             <select class="form-control">
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                                 <option>6</option>
                                                 <option>7</option>
                                                 <option>8</option>
                                                 <option>9</option>
                                                 <option>10</option>
                                                 <option>Autres</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <div class="col-md-12"><label>Prix</label></div>
                                             <div class="col-md-12">
                                             <input type="text" class="form-control" value="12,5" style="text-align: right;">
                                              <span class="input-group-addon">€</span></div>
                                         </div>
                                         <div class="form-group">
                                              <label>Lieux</label>
                                             <select class="form-control">
                                                 <option>Surplace (entreprise)</option>
                                                 <option>Viéoconférance</option>
                                                 <option>A préciser</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <button type="submit" class="btn btn-default pull-right">Envoyer</button>
                                         </div>
                                         
                                     </form>
                                 </div>
                                 <div class="modal-footer"><p data-dismiss="modal" class="btn btn-info">Annuler</p></div>
                             </div>
                         </div>
                         
                    </div>   
                
                    </div>
                </div>
            </div>
        </header>
    
    <div class="container" role="main">
         
                 
        
        
         <!-- Caroussel
        ================================================== -->

        <section id="slider">
            <div class="row">
                <div class="col-md-12">
                 <div id="carousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                  </ol>

                  <div class="carousel-inner" role="listbox">
                    <div class="item active" > <img alt="" src="../img/slide/img.JPG" class="col-md-6"  width="100%" height="100%">
                        <div class="carousel-caption">
                            <h3 style="color: #29b6f6">Dépannage informatique</h3>
                            <p>Intervation dans le laboratoire de l'Université du CEPROMADE à Kisangani</p>

                        </div>
                    </div>

                    <div class="item"> <img alt="" src="../img/slide/img2.JPG" class="col-md-7"  width="100%" height="100%">
                        <div class="carousel-caption">
                            <h3 style="color: #29b6f6">Séance recréative</h3>
                            <p>Avec la facilitatrice <strong>Catherine Darbelly</strong> de Suisse venue pour certifier les tester ICDL et agréer une représentation locale de l'ICDL à Kisangani</p>

                        </div>
                    </div>
                    <div class="item"> <img alt="" src="../img/slide/img3.JPG" class="col-md-6"  width="100%" height="100%">
                        <div class="carousel-caption text-right">
                            <h3 style="color: #29b6f6">Certification ICDL</h3>
                            <p>Séance de formation sur le tableur Excel. Préparation à la certification ICDL</p>

                        </div>
                    </div>
                    <div class="item"> <img alt="" src="../img/slide/img4.JPG" class="col-md-6"  width="100%" height="100%">
                        <div class="carousel-caption">
                            <h3 style="color: #29b6f6">Pause avec mes étudiants</h3>
                        <p>Après 4 semaines de formation sur l'initiation à l'informatique, nous avons pris une photo de famille ensemble avec mes étudiants. Nous sommes dans l'asbl NTEB à Kisangani, RDC</p>
                        
                    </div>
                </div>

                <a class="left carousel-control" href="#carousel" data-slide="prev"><span class="icon-prev"></span></a>
                <a class="right carousel-control" href="#carousel" data-slide="next"><span class="icon-next"></span></a>
              </div>
            </div>
            </div>
            </div>
        </section>
        
        <!--What I do localy-->
        <section id="local" class="section">
            <h2 class="text-center">En local</h2>
            <div class="row col-lg-12 text-center section-intro">
            Que ce soit en entreprises ou dans les locaux des centres de formations professionnelles, j'anime des sessiosn de formations ICDL et autres
            </div>
            <div class="row">
                <div class="col-lg-4" id="bureatique"><img src="../img/office.svg" alt="image1" class="img-circle img-center">
                    <h4 class="text-center" style="color:#ff9800">Bureautique</h4>
                    <p>Initiation aux concepts des <abbr title="Technologies de l'Information et de la Communication">TIC</abbr>, traitement de texte, présentation, le tableur & navigation web</p>
                    <p>L'apprenant apprend directement à être productif pour son emploi: un avantage et pour lui et pour son employeur</p>
                </div>
                 <div class="col-lg-4"><img src="../img/tools.svg" alt="image1" class="img-circle img-center">
                    <h4 class="text-center" style="color:#ff9800">Maintenance</h4>
                    <p>Tout le monde reve de pouvoir dépanner un ordinateur, et ... c'est le pourquoi de cette partie. Mes 5 ans d'expérience sont ici dévoilées!</p>
                     <p>L'objectif du module est de former les futurs techniciens support des PME</p>
                </div>
                 <div class="col-lg-4"><img src="../img/reseau.svg" alt="image1" class="img-circle img-center">
                    <h4 class="text-center" style="color:#ff9800">Reseau</h4>
                    <p>Imprimer, échanger des fichiers à distance, configurer un <abbr title="Local Area Network">LAN</abbr> (réseau local) sont les maîtres mots de ce module d'initiation au réseau</p>
                     <p>Je dis egalement un mot sur le depannage reseau</p>
                </div>
            </div>
            <div class="row">
                 <div class="col-lg-4"><img src="../img/code.svg" alt="image1" class="img-circle img-center">
                    <h4 class="text-center" style="color:#ff9800">Programmation web</h4>
                    <p>Le developpement web est devenu depuis peu ma specialité. Ajouté à ce qui est inné à moi "le partage de connaissance", je ne peux m'empecher de l'enseigner</p>
                     <p>J'enseigne essentiellement la programmation côté client dans un but professionnel</p>
                </div>
                 <div class="col-lg-4"><img src="../img/wordpress.svg" alt="image1" class="img-circle img-center">
                    <h4 class="text-center" style="color:#ff9800">WordPress</h4>
                    <p>26% des sites web au monde sont faits sur base de WordPress. Ca devient donc presque naturel de pouvoir maitriser ce <abbr title="Content Management System">CMS</abbr> (logiciel de gestion de contenu).</p>
                     <p>Je propose des cours de tous les niveaux sur ce CMS populaire.</p>
                </div>
                 <div class="col-lg-4"><img src="../img/gnu.svg" alt="image1" class="img-circle img-center">
                    <h4 class="text-center" style="color:#ff9800">Autres</h4>
                    <p>Fan du libre et open source, j'anime des sessions de formations sur Wikipedia, Ubuntu, Android et d'autres solutions/alternatives libres</p>
                </div>
                <div class="row col-lg-12 text-center section-end">
                   <p>Retrouvez mes supports sur <a href="#">GitBook</a> ou <a href="#">Slideshare</a></p> 
                </div>
            </div>
        </section>
        
        <!--Visio-->
        <section id="visio" class="section">
            <h2 class="text-center">En visioconférence</h2>
            <div class="row col-lg-12">
                <p class="text-center section-intro">
            Grace aux outils tels aue Skype, Google Hangout, etc. je partage mes connaissances avec la communaute internationale en tant que mentor/coach</p>
            </div>
            <div class="row">
                 <div class="col-md-4"><img src="../img/logo-oc.png" alt="openclassrooms" class="img-circle img-center">
                    <h4 class="text-center" style="color:#ff9800">OpenClassrooms</h4>
                    <p>OpenClassrooms est un site éducatif qui a pour mission de rendre l'éducation accessible à tous et de favoriser un apprentissage communautaire et engageant</p>
                     <p>Il cherche des mentors experts et pédagogues pour accompagner ses élèves...</p>
                     <p>Visiter le <a href="https://www.openclassrooms.com">site</a></p>
                </div>
                 <div class="col-md-4"><img src="../img/logo-livementor.png" alt="livementor" class="img-center">
                    <h4 class="text-center" style="color:#ff9800">LiveMentor</h4>
                    <p>Site de cours particulier en ligne, LiveMentor met en relation un mentor avec un élève. On y trouve des cours du collège, lycée et supérieur et professionnel</p>
                     <p>Voir mon <a href="#">profil</a></p>
                </div>
                 <div class="col-md-4"><img src="../img/logo-codecademy.png" alt="codecademy" width="100px" class="img-center">
                    <h4 class="text-center" style="color:#ff9800">Codecademy</h4>
                    <p>Interface idéale pour apprendre, enseigner et créer l'éducation en ligne du future</p>
                     <p>Il cherche des personnes motivées pour l'aider à construire l'éducation de demain</p>
                     <p>Cliquez <a href="https://www.codecademy.com/about/jobs">ici</a> pour voir les postes disponibles</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"><img src="../img/logo-coursera.svg" alt="coursera" class="img-circle img-center">
                    <h4 class="text-center" style="color:#ff9800">Coursera</h4>
                    <p>1<sup>er</sup> site des <abbr title="Cours ouvert et massif en ligne">MOOC</abbr>, Coursera se donne pour mission d'offrir au monde l'accès libre à l'éducation proposée par des prestigieuses universités</p>
                    <p>Visiter le <a href="https://www.coursera.org">site</a></p>
                </div>
            </div>
        </section>
    </div>
    
    <?php include ("../includes/footer.php"); ?>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/jquery.js"></script> <!--jQuery in local-->
    
    <!-- Javascript for Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.min.js"></script><!--JS for Bootstrap in local-->
   <script>
        $(function () {
          $('.carousel').carousel({interval: 5000});
          });
    </script>
</body>
    
</html>