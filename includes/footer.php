 <!-- Modal for CV link on the footer
    ==============================================================-->
    <div class="modal fade" id="view-cv" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Choisissez le format d'affichage</h4>
                </div>
                <div class="modal-body">
                    <a href="cv.html" class="col-xs-6">
                        <img alt="web" src="#">
                        <h4>Web</h4></a>
                    <a href="#" class="col-xs-6">
                        <img alt="pdf" src="#">
                        <h4>Pdf</h4></a>
                    
                </div>
                <div class="modal-footer">
                    <p data-dismiss="modal" class="btn btn-info">Annuler</p>
                </div>
            </div>
        </div>
    </div> 

<!-- Footer
    ==================================================================-->
    <footer>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <h3 class="footer-title">Restons connecté</h3>
                        <p>Et si vous vouliez m'insulter ou me dire simplement bonjour?
                            <br /> Je suis sympa, n'hesitez pas :)</p>
                        
                        <div><a href="blog.abelmbula.url.ph">Visiter mon blog</a></div>
                        <br>
                        
                        <!--Ajouter social icons-->
                        <div id="social">
                            <a class="btn btn-primary" href="https://www.twitter.com/abelmbula" id="twitter"><i class="fa fa-twitter fa-2x"></i></a>
                            <a class="btn btn-primary" href="#"><i class="fa fa-facebook fa-2x"></i></a>
                            <!--<a class="btn btn-primary" href="#"><i class="fa fa-google-plus fa-2x"></i></a>-->
                            <!--<a class="btn btn-primary" href="#"><i class="fa fa-skype fa-2x"></i> </a>-->
                            
                            <a class="btn btn-primary" href="https://github.com/Bam92"><i class="fa fa-github fa-2x"></i></a> 
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <h3 id="contact" class="footer-title">Contact</h3>
                            
                            <div><span class ="glyphicon
                            glyphicon-earphone" style="font-size:1.0em; padding-right: 5px;"></span><a href="tel:+243992097516"> 099-209-7516</a></div>
                            <div><span class ="glyphicon
                            glyphicon-envelope" style="font-size:1.0em; padding-right: 5px;"></span><a href="mailto:me@abelmbula.url.ph"> me[at]abelmbula[dot]url[dot]ph</a></div>
                            <div><span class ="glyphicon glyphicon-map-marker" style="font-size:1.0em; padding-right: 5px;"></span><strong> Abel Lifaefi Mbula</strong><br> 286, Sotraco II, Minzoto, Mangobo, Kisangani (RDC)</div>
                            
                            
                       

                    </div>
                    
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <h3 class="footer-title">Statut</h3>
                        <p>A la recherche d'un télétravail sur le metier passionnant du web
                            <br /> Voir mon <a data-toggle="modal" data-target="#view-cv">CV</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="copyright">
            <div class="container">
                <p class="col-xs-12">© Abel Lifaefi Mbula 2016 - Tous droits reservés</p>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/jquery.js"></script> <!--jQuery in local (index)-->
    <script src="../js/jquery.js"></script> <!--jQuery in local-->
    
    
    <!-- Javascript for Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script><!--JS for Bootstrap in local (index)-->
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="../js/bootstrap.min.js"></script><!--JS for Bootstrap in local-->
   <script>
        $(function () {
          $('.carousel').carousel({interval: 5000});
          });
    </script>