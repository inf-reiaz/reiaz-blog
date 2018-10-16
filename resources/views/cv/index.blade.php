
<!DOCTYPE html>
<html lang="en-US">
<head>
    @include('cv.partials.head')
</head>
<body class="home blog dark">
<div class="switherHead"></div>

<div class="hfeed site" id="page">
  <header role="banner" class="site_header" id="header">
    @include('cv.partials.header')
  </header>
  <div id="main" >
    <div class="content_area" id="primary">
      <div role="main" class="site_content" id="content">
        @include('cv.partials.profile_section')
        <div id="mainpage_accordion_area"> 
          
          <!-- RESUME -->
        @include('cv.partials.resume_section')  
          <!-- /RESUME--> 
          
          <!-- PORTFOLIO -->
        @include('cv.partials.portfolio_section')  
          <!-- /PORTFOLIO --> 
          
          <!-- CONTACTS -->
        @include('cv.partials.contact_section')  
          <!-- /CONTACT --> 
        </div>
        <!-- #mainpage_accordion_area --> 
      </div>
      <!-- #content --> 
    </div>
    <!-- #primary --> 
  </div>
  <!-- #main -->
  
  <footer role="contentinfo" class="site_footer" id="footer">
    <div class="footer_copyright"> Reiaz &copy; All Rights Reserved </div>
  </footer>
</div>
<!-- #page --> 

<!-- connect js --> 
<script type="text/javascript" src="/public/cv/js/jquery.min.js"></script> 
<script type="text/javascript" src="/public/cv/js/jquery.tools.custom.js"></script> 
<script type="text/javascript" src="/public/cv/js/jquery.flexslider.min.js"></script> 
<script type="text/javascript" src="/public/cv/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="/public/cv/js/jquery.isotope.min.js"></script> 
<script type="text/javascript" src="/public/cv/js/jquery.cookie.js"></script> 
<script type="text/javascript" src="/public/cv/js/mediaelement.min.js"></script> 
<script type="text/javascript" src="/public/cv/js/jquery.qrcode-0.6.0.min.js"></script> 
<script type="text/javascript" src="/public/cv/js/googlemap_init.js"></script> 
<script type="text/javascript" src="/public/cv/js/jquery.easing.js"></script> 
<script type="text/javascript" src="/public/cv/js/jquery.reject.js"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="/public/cv/js/utils.js"></script> 
<script type="text/javascript" src="/public/cv/js/lib.js"></script>
</body>
</html>
