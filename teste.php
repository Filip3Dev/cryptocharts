<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="opa.css" media="screen" title="no title" charset="utf-8">
    <script src="new.js"></script>
    <meta charset="utf-8">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <title>Teste</title>
  </head>
  <body>
    <div class="header">
    <h1>Animated Fixed Header (Scroll Down)</h1>
  </div>
  <div class="content">
  </div>



  </body>
  <script type="text/javascript">
  $(function(){
   var shrinkHeader = 300;
    $(window).scroll(function() {
      var scroll = getCurrentScroll();
        if ( scroll >= shrinkHeader ) {
             $('.header').addClass('shrink');
          }
          else {
              $('.header').removeClass('shrink');
          }
    });
  function getCurrentScroll() {
      return window.pageYOffset || document.documentElement.scrollTop;
      }
  });
  </script>
</html>
