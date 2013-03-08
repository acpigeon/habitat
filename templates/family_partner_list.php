<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php include('../requests/base.php'); ?>
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Family Partner List | Austin Habitat for Humanity</title>

  <link rel="stylesheet" href="css/normalize.css" />
  
  <link rel="stylesheet" href="css/foundation.css" />
  
  <!--Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome-ie7.min.css" />
  <link rel="stylesheet" href="css/font-awesome.css" />
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
    <nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1><a href="#">Habitat</a></h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
        <li class="divider"></li>
        <li class="has-dropdown"><a href="#">Actions</a>
            <ul class="dropdown">
                <li><a href="#">List family members</a></li>
                <li><a href="#">Add family members</a></li>
            </ul>
        </li>
        <li class="divider"></li>
      <li>
        <a class="button" href="#">Log out</a>
      </li>
    </ul>
  </section>
</nav>

	<div class="row">
		<div class="large-12 columns">
			<h2 class="logo_brand">Austin Habitat for Humanity</h2>
		</div>
	</div>
        <div class="row">
            <div class="large-offset-2 large-8 columns">
                <a class="button" href="#">Add New Family Partner</a>
            </div>
        </div>

	<div class="row">
            
            <div class="large-offset-2 large-8 columns">
                <table >
                <thead>
                    <tr>
                    <th width="70%">Family partner</th>
                    <th>Total hours</th>

                    </tr>
                </thead>
                <tbody>
										<?php 
											$request = New Request;
											//var_dump($request->listFamilies()); 
											$families = $request->listFamilies();
											foreach($families as $family){
												echo '<tr>' . "\n";
												echo '<td><a href="/profiles.php?family=' . $family['FamilyId'] . '">' . $family['FamilyName'] . '</a></td>' . "\n";
												echo '<td>' . $family['SweatHours'] . '</td>' . "\n";
												echo '</tr>' . "\n";
											}
										?>

                </tbody>
            </table>
            </div>    
	</div>
        
        <div class="row">
            <div class="large-offset-2 large-8 columns">
                <a class="button" href="#">Add New Family Partner</a>
            </div>
        </div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>