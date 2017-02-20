<?php get_header(); ?> 
<div class="section slider">
    <div data-uk-slideshow>
        <ul class="uk-slideshow">
            <li>
                <img  src="<?php  bloginfo('template_url');  ?>/img/bannier55.png" class="  img-responsive" />    
            </li>
            <li>
                <img  src="<?php  bloginfo('template_url');  ?>/img/bannier5.png" class="  img-responsive" />    
            </li>
        </ul>
        <img  src="<?php  bloginfo('template_url');  ?>/img/logo.png" class=" center-block imglogo img-responsive" />
        <a href="" class="leftslide navigationstyl" data-uk-slideshow-item="previous"><</a>
        <a href="" class="rightslide navigationstyl" data-uk-slideshow-item="next">></a>  
    </div>
    <div class="searchbar">
        <div class="container-fluid">
            <div class="uk-grid"> 
                <div class="uk-width-1-2">
                    <div class="parent">
                            <div class="fils">
                                <a href="">Fr</a> 
                            </div>
                            <div class="fils">
                                <a href="">En</a>
                            </div>
                            <div class="fils">
                                <a href="">Ar</a>
                            </div> 
                            <div class="fils datefils">  
                                Mardi, 10 Janvier 2017, 9:07 	
                            </div>
                        </ul>
                    </div>
                </div>    
                <div class="uk-width-1-2"> 
                    <div class="formstyle">
                        <div class="formshadow">
                            <?php get_search_form(); ?>  
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>
<div class="main section">  
    <div class="container">
        <div data-uk-grid="{gutter: 20}">
            <div class="uk-width-small-1-6 uk-width-medium-2-10">
                <div class="bgdecouvert">
                    <h4>Découverte</h4>
                    <img  src="<?php  bloginfo('template_url');  ?>/img/decouvertimg.png" class="  img-responsive" />
                    <?php 
                            wp_nav_menu(array( 
                                    'theme_location' => 'decouvert',
                                    'container' => false,
                                    'menu_class' => 'menusidebar', 
                                    'walker' => new Walker_Nav_Primary()
                                    )
                            );
                    ?>
                </div>
                <div class="bgdecouvert">
                    <h4>Vie culturelle</h4> 
                    <img  src="<?php  bloginfo('template_url');  ?>/img/culturel.png" class="  img-responsive" /> 
                    <?php 
                            wp_nav_menu(array( 
                                    'theme_location' => 'culturel',
                                    'container' => false,
                                    'menu_class' => 'menusidebar', 
                                    'walker' => new Walker_Nav_Primary()
                                    )
                            );
                    ?>
                </div>
                
            </div>
            <div class="uk-width-small-4-6 uk-width-medium-6-10">
                <div class="bgbigarticle">
                    <div class="titlearticle ">
                        <i class="uk-icon-plus uk-icon-medium"></i>
                        Patrimoine
                    </div> 
                    <?php 
                $args  = array(
                    'post_type' => 'patrimoine', 
                    'posts_per_page'=> 1
                );
                $the_query = new WP_Query( $args );  
                ?>
                    <?php if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                    <div class="uk-grid uk-grid-collapse articlebody"> 
                        <div class="uk-width-1-2">
                           <?php $image = get_field('image'); 
                                    if( !empty($image) ): ?>
                                        <img class="img-responsive center-block img<?php echo $i ;?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                <?php endif; ?>
                        </div>
                            <div class="uk-width-1-2"> 
                                <div class="padingtextarticle"> 
                                    <p>
                                        <?php the_content();?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>">>>> En savoir plus </a>
                                </div>
                            </div>
                    </div>
                    <?php  endwhile;
                        endif; 
                        wp_reset_postdata();
                        ?> 
                </div>
                <div class="bgbigarticle uk-margin-top">
                    <div class="titlearticle ">
                        <i class="uk-icon-plus uk-icon-medium"></i>
                        Histoire
                    </div> 
                    <?php 
                $args  = array(
                    'post_type' => 'histoire',   
                    'posts_per_page'=> 1
                );
                $the_query = new WP_Query( $args );  
                ?>
                    <?php if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                    <div class="uk-grid uk-grid-collapse articlebody"> 
                        <div class="uk-width-1-2">
                           <?php $image = get_field('image'); 
                                    if( !empty($image) ): ?>
                                        <img class="img-responsive center-block img<?php echo $i ;?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                <?php endif; ?>
                        </div>
                            <div class="uk-width-1-2"> 
                                <div class="padingtextarticle"> 
                                    <p>
                                        <?php the_content();?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>">>>> En savoir plus </a>
                                </div>
                            </div>
                    </div>
                    <?php  endwhile;
                        endif; 
                        wp_reset_postdata();
                        ?> 
                </div>
                <div class="bgbigarticle uk-margin-top">  
                    <div class="titlearticle ">
                        <i class="uk-icon-plus uk-icon-medium"></i> 
                        Produits culturels 
                    </div> 
                    <?php 
                $args  = array(
                    'post_type' => 'produitsculturel',  
                    'posts_per_page'=> 1
                );
                $the_query = new WP_Query( $args );  
                ?>
                    <?php if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                    <div class="uk-grid uk-grid-collapse articlebody"> 
                        <div class="uk-width-1-2">
                           <?php $image = get_field('image'); 
                                    if( !empty($image) ): ?>
                                        <img class="img-responsive center-block img<?php echo $i ;?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                                <?php endif; ?>
                        </div>
                            <div class="uk-width-1-2"> 
                                <div class="padingtextarticle"> 
                                    <p>
                                        <?php the_content();?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>">>>> En savoir plus </a>
                                </div>
                            </div>
                    </div>
                    <?php  endwhile;
                        endif; 
                        wp_reset_postdata();
                        ?> 
                </div>
            </div>
            <div class="uk-width-small-1-6 uk-width-medium-2-10">
                <div class="bgclick">
                    <a href="">
                        <img  src="<?php  bloginfo('template_url');  ?>/img/projet.png" class="  img-responsive" />
                    </a>
                </div>
                <div class="bgclick uk-margin-top">
                    <a href="">
                        <img  src="<?php  bloginfo('template_url');  ?>/img/maptunis.png" class="  img-responsive" />
                    </a>
                </div>
                <div class="bgdecouvert uk-margin-top"> 
                    <h4>Vie pratique</h4>
                    <img  src="<?php  bloginfo('template_url');  ?>/img/pratique.png" class="  img-responsive" />
                    <?php 
                            wp_nav_menu(array( 
                                    'theme_location' => 'pratique',
                                    'container' => false,
                                    'menu_class' => 'menusidebar', 
                                    'walker' => new Walker_Nav_Primary()
                                    )
                            );
                    ?>
                </div>
            </div> 
        </div>
    </div>    
</div>
<div class="contact">
    <div class="container">
	    <div class="uk-grid">
	     	<div class="uk-width-1-2 leftform">  
	     		<h3>Contactez-nous</h3>
			<div class="testcontact">Pour plus d’information, veuillez utiliser le formulaire ci-dessous:</div>
			<?php echo do_shortcode( '[contact-form-7 id="21" title="Formulaire de contact 1"]' ); ?>
	     	</div>
	     	<div class="uk-width-1-2 rightform"> 
	     		<img src="<?php  bloginfo('template_url');  ?>/img/map.png" class="img-responsive center-block" width="">
	     	</div>
	     </div>
	</div>     
</div>
<?php get_footer(); ?>    