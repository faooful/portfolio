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

<link rel="stylesheet" href="css/magnific-popup.css">

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
            <li> <a href="index.html#contact">Contact</a></li>
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
          <!-- GALLERY -->

    <?php
              
        $feed = simplexml_load_file('http://feed6.photobucket.com/albums/f83/faooful/img-gallery/feed.rss'); 
        $channel = $feed->channel;

#LEFT
        echo '<div id="gallery-l"><div class="popup-gallery">';
        $i = 0;
        
          foreach($channel->item as $item):
                if ( $i %2 == 0 ) { 
                  $i++;
                  continue; 
                }
                $image = $item->children('media', true)->content->attributes()->url;
                $i++;
          ?>

              <a href="<?= $image; ?>"><img src='<?= $image; ?>' alt=''/></a> 

        <?php endforeach;
        echo '</div></div>';

#RIGHT
        echo '<div id="gallery-r"><div class="popup-gallery">';
        $i = 0;

          foreach($channel->item as $item):
                if ( $i %2 != 0 ) { 
                  $i++;
                  continue; 
                }
                $image = $item->children('media', true)->content->attributes()->url;
                $i++;
          ?>

              <a href="<?= $image; ?>"><img src='<?= $image; ?>' alt=''/></a> 

        <?php endforeach;
        echo '</div></div>';

    ?> 

<!-- GALLERY END -->
      </div>

    </section>

    <footer class="container">
      <p>Copyright © 2014 Joseph Williams.</p>
    </footer>

  </div>
</body>

<script src="js/jquery-1.9.1.min.js" charset="utf-8"></script>

<script src="js/jquery.magnific-popup.min.js"></script> 
<script>
$(document).ready(function() {
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },

    zoom: {
    enabled: true, // By default it's false, so don't forget to enable it

    duration: 200, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function 

    // The "opener" function should return the element from which popup will be zoomed in
    // and to which popup will be scaled down
    // By defailt it looks for an image tag:
    opener: function(openerElement) {
      // openerElement is the element on which popup was initialized, in this case its <a> tag
      // you don't need to add "opener" option if this code matches your needs, it's defailt one.
      return openerElement.is('img') ? openerElement : openerElement.find('img');
    }
  },

    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return '<small>by Joseph Williams</small>';
      }
    }
  });
});
</script>

<script src="js/showhide.js"></script>
<script>
$(document).ready(function(){

   $('.show_hide').showHide({
        speed: 1000,  // speed you want the toggle to happen
        easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
        changeText: 1, // if you dont want the button text to change, set this to 0
        showText: 'MENU',// the button text to show when a div is closed
        hideText: 'CLOSE' // the button text to show when a div is open
    }); 
});
</script>

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

<script src="js/headroom.js" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
// grab an element
var myElement = document.querySelector("header");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init(); 
</script>

</html>