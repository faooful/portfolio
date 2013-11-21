<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content=" ***Website Description Here*** "/>

<meta name="author" content="Joseph Williams"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

<title>Joseph Williams | Multimedia Designer</title>

<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/mobile.css" type="text/css" media="screen" />

<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

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




<link rel="shortcut icon" href="images/favicon.ico">

<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
  <div class="page-wrapper">

    <header>

      <div class="container">

        <aside>
          <ul class="social">
            <li>
              <a href="https:/facebook.com/faooful">
                <span class="social_icon"><img src="images/webicon-facebook-s.png">
              </a>
            </li>
            <li>
              <a href="https:/twitter.com/faooful">
                <span class="social_icon"><img src="images/webicon-twitter-s.png">
              </a>
            </li>
            <li>
              <a href="https:/github.com/faooful">
                <span class="social_icon"><img src="images/GitHub-Mark-32px.png">
              </a>
            </li>
            <li>
              <a href="https:/faooful.tumblr.com">
                <span class="social_icon"><img src="images/webicon-tumblr-s.png">
              </a>
            </li>
          </ul>
        </aside>

        <nav>
          <ul>
            <li> <a href="index.html">Home</a></li>
            <li> <a href="design.php">Design</a></li>
            <li> <a href="web.html">Web</a></li>
            <li> <a href="index.html">Contact</a></li>
          </ul>
      </nav>
      </div>
    </header>

    <section class="container">

      <div class="name-info">
        <span class="designtitle">Design</span>
        <img class="designicon" src="images/designicon.png"></img>
        <span class="designbio">Here is a colaboration of my Photoshop and Illistrator work.</span>
      </div>

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

    </section>

    <footer class="container">
      <p>Copyright © 2013 Joseph Williams.</p>
    </footer>

  </div>
</body>

<script src="js/jquery-1.9.1.min.js" charset="utf-8"></script>

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

</html>