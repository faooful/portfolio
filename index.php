<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/desktopnav.css">

        <link rel="shortcut icon" href="img/favicon.ico">

        <title>Joseph WIlliams | Multimedia Designer</title>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!--

     _   _  _____  _____     _____     _   _  _  _      _      ___    ___   
    ( ) ( )(  _  )(_   _)   (  _  )   ( ) ( )( )( )    ( )    (  _`\ |  _`\ 
    | `\| || ( ) |  | |     | (_) |   | |/'/'| || |    | |    | (_(_)| (_) )
    | , ` || | | |  | |     |  _  |   | , <  | || |  _ | |  _ |  _)_ | ,  / 
    | |`\ || (_) |  | |     | | | |   | |\`\ | || |_( )| |_( )| (_( )| |\ \ 
    (_) (_)(_____)  (_)     (_) (_)   (_) (_)(_)(____/'(____/'(____/'(_) (_) maybe.


    -->

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <nav>
            <ul>
                <li><a href="#design">Design</a></li>
                <li><a href="#web">Web</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#cv">CV</a></li>
            </ul>
        </nav>


                <!-- Start Nav Structure 
                <button class="cn-button" id="cn-button">+</button>
                <div class="cn-wrapper" id="cn-wrapper">
                    <ul>
                      <li><a href="#"><span class="icon-picture"></span></a></li>
                      <li><a href="#"><span class="icon-headphones"></span></a></li>
                      <li><a href="#"><span class="icon-home"></span></a></li>
                      <li><a href="#"><span class="icon-facetime-video"></span></a></li>
                      <li><a href="#"><span class="icon-envelope-alt"></span></a></li>
                     </ul>
                </div>
                <div id="cn-overlay" class="cn-overlay"></div>
                 End Nav Structure -->

        <div class="header-container">

            <header class="wrapper clearfix">
                        <div class="profile-img"></div>
                        <h1 class="title">Joseph Williams</h1>
                        <p class="bio">I'm Joseph Williams a fanatic of design and web development. I'm a uncomfortably fast learner while able to follow breifs or contribute creatively. I also like working with food.</p>
                    </header>
                <a id="design"></a>
            </div>




            <div class="main-container">
                <div class="main wrapper clearfix">
                        <h2 class="facebook-title">Design</h2>
                            <p class="bio">Here is a collection of various digital art that I have created.</p>
                                <div class="gallery">
                                    <?php
                                        
                                        $feed = simplexml_load_file('http://feed6.photobucket.com/albums/f83/faooful/img-gallery/feed.rss'); 
                                        $channel = $feed->channel;

                                          include 'includes/image-orientation.php';

                                          foreach($channel->item as $item):
                                                $image = $item->children('media', true)->content->attributes()->url;
                                                $orientation = getOrientation($image);
                                          ?>
                                              <div class="image">
                                                  <img src="<?= $image; ?>" class="<?= $orientation ?>">
                                              </div>
                                        <?php endforeach;
                                    ?> 
                                </div>
                            </div> <!-- #main -->
                        </div> <!-- #main-container -->

        <div class="main-container">
            <div class="main wrapper clearfix">
                <h2 class="facebook-title">Web</h2>
                <a id="web"></a>
                <h2 class="sub-title">Facebook developer tools</h2>
                <p class="bio">I recently did an internship for Holiday Extras and one of my tasks was to make a Facebook booking engine for the Show & Stay brand.</p>
                <img class="facebook-img" src="http://faooful.com/img/facebook-engine.jpg">
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="main-container">
            <div class="main wrapper clearfix">
                <h2 class="contact-title">Contact</h2>
                <a id="contact"></a>
                <p class="contact-bio">You can contact me at faooful@gmail.com</p>
                <div class="socialicons">
                    <div class="fsocial-img"></div>
                    <div class="lsocial-img"></div>
                    <div class="ssocial-img"></div>
                </div>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Lazy Load -->
<script src="js/jquery.lazyload.js" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    $(function() {          
        $("img.lazy").show().lazyload({
            effect      : "fadeIn",
            failurelimit : 0
        });
    });
</script>
<!-- Lazy Load End -->

<script src="js/polyfills.js"></script>
<script src="js/demo1.js"></script>

<script src="js/scroll.js" charset="utf-8"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
