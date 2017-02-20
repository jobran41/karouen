<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="shortcut icon" href="<?php  bloginfo('template_url');  ?>/img/fav/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" href="<?php  bloginfo('template_url');  ?>/img/fav/apple-touch-icon.png">
		<?php wp_head(); ?>
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;
		
	?>
	
	<body <?php body_class( $awesome_classes ); ?>>
		
		<div class="container-fluid menutop" >   
			<div class="row">
				<div class="col-xs-12 col-lg-12"> 
                                    <nav class="navbar  navbar-fixed-top   ">   
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span> 
                                                <span class="icon-bar"></span>
                                              </button>
                                             <!-- <a class="navbar-brand" href="#">Awesome Theme</a>-->
                                            </div> 
                                            <div class="collapse navbar-collapse navbar-left " id="bs-example-navbar-collapse-1">
                                                <?php 
                                                        wp_nav_menu(array( 
                                                                'theme_location' => 'primary',
                                                                'container' => false,
                                                                'menu_class' => 'nav navbar-nav navbar-right',
                                                                'walker' => new Walker_Nav_Primary()
                                                                )
                                                        );
                                                ?>
                                            </div>
                                        <div class="nextmenu"> 
                                            <ul class="flexli"> 
                                                <li>
                                                    <a href="">
                                                        Liens utiles
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                      Plan du site 
                                                    </a>
                                                </li>
                                                
                                            </ul> 
                                            <ul class="socialmedia">  
                                                <li class="LinkYoutube"><a href="" target="_blank"><i class="uk-icon-twitter uk-icon-medium"></i></a></li>
                                                <li class="LinkFb"><a href="" target="_blank"><i class="uk-icon-facebook uk-icon-medium"></i></a></li>
                                                <li class="LinkTwitter"><a href="#" target="_blank"><i class="uk-icon-instagram uk-icon-medium"></i></a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                    
                                    
				</div>
			</div>
	</div>		


			
			