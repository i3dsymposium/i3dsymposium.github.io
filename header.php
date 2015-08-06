<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title><?php echo (strlen($pagetitle) ? "$pagetitle | " : "") ?>i3D 2016</title>
    <meta name="author" content="Wesley Griffin <wesley.griffin@nist.gov">

    <link href="css/reset.css" rel="stylesheet" media="screen">
    <!-- use a fluid, instead of a fixed layout
      <link href="css/960.css" rel="stylesheet" media="screen">
    -->
    <link href="css/960-fluid.css" rel="stylesheet" media="screen">
    <link href="css/i3d.css" rel="stylesheet" media="screen">

    <!-- comment out viewport/responsive.css to use a fixed layout -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/responsive.css" rel="stylesheet" media="screen">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
      $(function () {
        // Set the active button based on the current url.
        var filename = window.location.pathname.split('/').reverse()[0];
        $('a[href$="' + filename + '"]').parent().addClass('active');
        // If there are no objects with the active class,
        if ($('.active').length == 0) {
          // assume the index is the current url.
          $('a[href$="index.php"]').parent().addClass('active');
        }
      });
    </script>
  </head>

  <body>

    <!-- put the header outside of the grid container -->
    <div id="header">
      <p class="text-left float-left subhead tight"><small>ACM SIGGRAPH Symposium on<br>
      Interactive 3D Graphics and Games<br>
      <!-- San Francisco, CA : February 27 - March 1, 2015 --></small></p>
    </div> <!-- #header -->
    <div class="clearfix"></div>


    <!-- container_12 is a 12-cell grid -->
    <div class="container_12">

      <!-- grid_2 is a 2-wide cell -->
      <div id="nav" class="grid_2">
        <!-- nav and nav-list are styled in css/i3d.css -->
        <ul class="nav nav-list">
          <li><a href="index.php">Home</a></li>
          <li><a href="program.php">Program</a></li>
          <li><a href="keynotes.php">Keynotes</a></li>
          <li><a href="cfp.php">Call for Participation</a></li>
          <li><a href="papers.php">Papers</a></li>
          <li><a href="posters.php">Posters &amp; Demos</a></li>
          <li><a href="registration.php">Registration</a></li>
          <li><a href="venue.php">Venue</a></li>
          <li><a href="sponsors.php">Corporate Sponsors</a></li>
          <li><a href="conference.php">Past Conferences</a></li>
          <li><a href="committee.php">Committee</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="http://www.acm.org/sigs/volunteer_resources/officers_manual/anti-harassment-policy">Code of Conduct</a></li>
        </ul>

        <!-- social media links -->
        <ul class="social">
          <li>
            <a href="https://twitter.com/I3DCONF"><b>I3D</b> on Twitter</a>
          </li>
          <li>
            <a href="http://www.facebook.com/pages/I3D-Symposium-on-Interactive-3D-Graphics-and-Games/147772558570274"><b>I3D</b> on Facebook</a>
          </li>
          <li>
            <a href="https://plus.google.com/108443903002417824594/"><b>I3D</b> on Google+</a>
          </li>
        </ul>
<!--
        <h5 class="text-right">Title Sponsors</h5>
        <ul class="sponsors">
          <li class="text-right">
          </li>
          <li class="text-right">
          </li>
          <li class="text-right">
          </li>
        </ul>
-->
        <h5 class="text-right">Benefactors</h5>
        <ul class="sponsors text-right">
          <li class="text-right">
            <a href="http://activision.com">
              <img width="160" height="38" src="img/sponsor_Activision_logo.png" style="padding: 5px; background: #fff" alt="Activision">
            </a>
          </li>
          <li class="text-right">
            <a href="http://www.autodesk.com">
              <img width="160" height="27" src="img/sponsor_Autodesk_Logo.png" style="padding: 5px; background: #fff" alt="Autodesk">
            </a>
          </li>
          <li class="text-right">
            <a href="http://google.com/intl/en/about">
              <img width="160" height="56" src="img/sponsor_google_logo11w.png" style="padding: 5px; background: #fff" alt="Activision">
            </a>
          </li>
          <li class="text-right">
            <a href="http://intel.com/software/vcsource">
              <img width="75" height="57" src="img/sponsor_intel_4c_100.png" style="background:#fff" alt="Intel">
            </a>
          </li>
          <li class="text-right">
            <a href="http://research.microsoft.com">
              <img width="160" height="44" src="img/sponsor_MSResearch_h_rgb_72dpi.jpg" style="padding: 5px; background: #fff" alt="Microsoft Research">
            </a>
          </li>
          <li class="text-right">
            <a href="http://www.narkii.com">
              <img width="160" height="44" src="img/sponsor_NARKII_h_rgb_72dpi.jpg" style="padding: 5px; background: #fff" alt="Narkii">
            </a>
          </li>
        </ul>

        <h5 class="text-right">Supporters</h5>
        <ul class="sponsors text-right">
          <li class="text-right">
            <a href="http://www.2k.com">
              <img width="75" height="49" src="img/sponsor_2K_Only_logo.png" style="padding: 5px; background: #fff" alt="2K">
            </a>
          </li>
          <li class="text-right">
            <a href="http://www.adobe.com">
              <img width="60" height="75" src="img/sponsor_adobe_logo_standard.png" style="padding: 5px; background: #fff" alt="Adobe">
            </a>
          </li>
          <li class="text-right">
            <a href="http://www.disneyresearch.com">
              <img width="75" height="64" src="img/sponsor_DR-logo-stacked_vector_RED.png" style="padding: 5px; background: #fff">
            </a>
          </li>
          <li class="text-right">
            <a href="http://www.facebook.com">
              <img width="75" height="36" src="img/sponsor_facebook_logo.png" style="padding: 5px; background: #fff">
            </a>
          </li>
          <li class="text-right">
            <a href="http://research.nvidia.com">
              <img width="75" height="55" src="img/sponsor_NVLogo_2D.jpg" style="padding: 5px; background: #fff">
            </a>
          </li>
        </ul>

      </div> <!-- #nav -->
      <!-- grid_6 is a 6-wide cell for the main content
      grid_6 is needed for a fixed layout
      <div id="main" class="grid_6"> -->

      <!-- grid_7 is a 7-wide cell for the main content -->
      <div id="main" class="grid_7">
