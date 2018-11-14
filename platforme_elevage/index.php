<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>ivoire</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?f amily=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>



   <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
   <link href="js/plugins/magnific-popup/magnific-popup.css" type="text/css" rel="stylesheet" media="screen,projection">
  
   <!--animate css-->
  
  <link href="js/plugins/animate-css/animate.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>
<style>
    body
    .promo {
        border-radius: 5px;
        margin-top: 0.5cm;
       
        height: 5cm;
        
        transition: all 0.2s ease;
        
    } 
    
    .promo:hover {
        filter: grayscale(0%);
        opacity: 2.6;
        transform: translateY(-0.5cm);
    }
    
    .promo:active {
        transform: scale(1.03);
    }
    
    .promo h4 {
        padding-top: 1.4cm;
        font-weight: bold;
        font-color:black;
    }
    
    #page {
        margin-top: 2cm;
        height: 6cm;
        overflow: auto;
    }
    
    #fond {
        height: 100%;
        width: 100%;
       
        position: fixed;
        z-index: 0;
        top: 0px;
        left: 0px;
    }
    
    #choix {
        color: rgba(255, 255, 255, 0.664);
        font-weight: bold;
        margin-top: 2.8cm;
    }
</style>


<body >
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper  brown darken-1">
                    <ul class="left">                      
                    
                    </ul>
                  
                    <ul class="right hide-on-med-and-down">

                      <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" ><i class="mdi-action-add-shopping-cart"><small class="notification-badge">5</small></i>
                      
                  <li><a href="authentification.php" class="waves-effect waves-block waves-light notification-button" ><i class="mdi-action-account-circle"></i>
                        
                        </a></li>
                       
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                    
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
     <div id="media-slider">
           
  
              <div class="col s12 ">
              
                <div class="slider">
                  <ul class="slides">
                    <li>
                      <img src="images/gallary/1.png" alt="img-1">
                      <!-- random image -->
                      <div class="caption center-align">
                        <h3>Big Data</h3>
                        <h5 class="light grey-text text-lighten-3"></h5>
                      </div>
                    </li>
                    <li>
                      <img src="images/gallary/2.png" alt="img-2">
                      <!-- random image -->
                      <div class="caption left-align">
                        <h3>Intelligence Artificielle.</h3>
                        <h5 class="light grey-text text-lighten-3"></h5>
                      </div>
                    </li>
                    <li>
                      <img src="images/gallary/3.png" alt="img-3">
                      <!-- random image -->
                      <div class="caption right-align">
                        <h3>Blockchain</h3>
                        <h5 class="light grey-text text-lighten-3">.</h5>
                      </div>
                    </li>
                    <li>
                      <img src="images/gallary/2.png" alt="img-4">
                      <!-- random image -->
                      <div class="caption center-align">
                        <h3>Programme</h3>
                        <h5 class="light grey-text text-lighten-3">.</h5>
                      </div>
                    </li>
                  </ul>
                </div>

           
            </div>
  




  <div class="container">
    <div class="section">
     
   <a href="authentification.php"><button type="button" class="btn waves-effect waves-light light-blue accent-3 animated infinite rubberBand " class="center">s inscrire</button></a>

     <div class="row">
             
              <div class="col s12 m3 l3">
                <div class="card small">
                  <div class="card-image">
                    <img src="images/sample-1.jpg" alt="sample">
                
                  </div>
                  <div class="card-content">
                   
                  </div>
                  <div class="card-action">
                    <p class="center"> <a href="bovin.php" class="waves-effect waves-light  btn teal darken-4">elevage</a></p> 
                  </div>
                </div>
              </div>


               <div class="col s12 m3 l3">
                <div class="card small">
                  <div class="card-image">
                    <img src="images/sample-1.jpg" alt="sample">
                
                  </div>
                  <div class="card-content">
                   
                  </div>
                  <div class="card-action">
                    <p class="center"> <a href="phyto.php" class="waves-effect waves-light  btn teal darken-4">phyto-sani</a></p> 
                  </div>
                </div>
              </div>

               <div class="col s12 m3 l3">
                <div class="card small">
                  <div class="card-image">
                    <img src="images/sample-1.jpg" alt="sample">
                
                  </div>
                  <div class="card-content">
                 
                  </div>
                  <div class="card-action">
                    <p class="center"><a href="agri.php"  class="waves-effect waves-light  btn teal darken-4">Agriculture</a></p> 
                  </div>
                </div>
              </div>

               <div class="col s12 m3 l3">
                <div class="card small">
                  <div class="card-image">
                    <img src="images/sample-1.jpg" alt="sample">
                
                  </div>
                  <div class="card-content">
                  
                  </div>
                  <div class="card-action">
                    <p class="center"> <a href="agent.php" class="waves-effect waves-light  btn teal darken-4">Agents-Agricole</a></p> 
                  </div>
                </div>
              </div>


               <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <i class="mdi-action-search prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">recherche</label>
                    </div>
                </form>
            </div>
            </li>
            <li class="li-hover">
                <ul class="chat-collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                    <div class="collapsible-body recent-activity">
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">just now</a>
                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Yesterday</a>
                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Last Week</a>
                                <p>Jessy Jay open a new store at S.G Road.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                    <div class="collapsible-body sales-repoart">
                        <div class="sales-repoart-list  chat-out-list row">
                            <div class="col s8">Target Salse</div>
                            <div class="col s4"><span id="sales-line-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Payment Due</div>
                            <div class="col s4"><span id="sales-bar-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Delivery</div>
                            <div class="col s4"><span id="sales-line-2"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Progress</div>
                            <div class="col s4"><span id="sales-bar-2"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                    <div class="collapsible-body favorite-associates">
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Eileen Sideways</p>
                                <p class="place">Los Angeles, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Zaham Sindil</p>
                                <p class="place">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Renov Leongal</p>
                                <p class="place">Cebu City, Philippines</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Weno Carasbong</p>
                                <p>Tokyo, Japan</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Nusja Nawancali</p>
                                <p class="place">Bangkok, Thailand</p>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </li>
        </ul>
      </aside>
     </div>

</div></div>
  <footer class="page-footer brown darken-1">
    <div class="container">
      <div class="row">
       
        </div>
        <div class="col l3 s12">
        
        </div>
        <div class="col l3 s12">
          
         
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown darken-1-text text-lighten-3" href="">Apaulo</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>  
     <link href="js/plugins/jquery.nestable/nestable.css" type="text/css" rel="stylesheet" media="screen,projection"> 
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript" src="js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script> 
     <script src="js/plugins/masonry.pkgd.min.js"></script>
 <script type="text/javascript">
      /*
       * Masonry container for Gallery page
       */
      var $containerGallery = $(".masonry-gallery-wrapper");
      $containerGallery.imagesLoaded(function() {
        $containerGallery.masonry({
            itemSelector: '.gallary-item img',
           columnWidth: '.gallary-sizer',
           isFitWidth: true
        });
      });

      //popup-gallery
      $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: true,    
        fixedContentPos: true,
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          verticalFit: true,
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function(item) {
            return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
          },
        zoom: {
          enabled: true,
          duration: 300 // don't foget to change the duration also in CSS
        }
        }
      });
    </script>
    <script type="text/javascript">

      
  function testAnim(x) {
      $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass();
        });
      };
    
      $(document).ready(function(){
        $('.js--triggerAnimation').click(function(e){
          e.preventDefault();
          var anim = $('.js--animations').val();
          testAnim(anim);
        });
    
        $('.js--animations').change(function(){
          var anim = $(this).val();
          testAnim(anim);
        });
      });


    </script>


    <script>
        function envoi(id) {
            var imp = document.getElementById('info');
            var imp2 = document.getElementById('info2');
            var form = document.getElementById('form');
            var texte = document.getElementById(id);
            imp2.value = texte.innerHTML;
            imp.value = id;
            form.submit()
        }
    </script>


  </body>
</html>
