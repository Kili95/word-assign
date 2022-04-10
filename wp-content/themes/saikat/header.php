<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="background-image: url('<?php echo get_bloginfo('template_url') ?>/images/bg-body-1.jpg'); background-repeat: no-repeat; background-size: cover;">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
	      		<li class="nav-item">
	        		<a class="nav-link" href="<?php echo home_url(); ?>">Home</a>
				</li>
				<li class="nav-item">
			        <a class="nav-link" href="<?php echo home_url("/contact-us"); ?>">Contact Us</a>
		      	</li>
	    	</ul>
	  	</div>
	</nav>
	<div class="container">