<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

   <?php wp_enqueue_script("jquery"); ?>
   <?php wp_head(); ?>
  </head>
  <body>

   <nav class="navbar navbar-inverse navbar-static-top" role="banner">
      <div class="container-fluid">
		  <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".nav-collapse" aria-expanded="false">
		<span class="sr-only">Toggle Navigation</span>
		<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
	</button>
	<!--Navbar links <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>-->
</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
      	<div class="nav-collapse collapse">
   <!--  Pages list in the dropdown     <ul class="nav navbar-nav">

              <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?> -->
				
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
	  	</li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
</nav>

  <div class="container">
	  
