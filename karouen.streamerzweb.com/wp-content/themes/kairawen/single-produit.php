<?php get_header(); ?>
<?php get_template_part('content', 'headertop'); ?>
<div class="container" style="margin-top: 20%">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <div class="cadre2">
                        <div class="uk-grid switchprod">
                            <div class="uk-width-7-10">
                                 <div class="uk-modal-header">
                                    <h3 class="modaltitle  "> 
                                     <?php the_title();?>
                                    </h3>
                                </div>
                             <p class="txtpoup"> <?php echo get_the_content();?></p> 
                            </div>
                            <div class="uk-width-3-10">
                                <div class="imgsearch"> <img src="<?php echo get_field('image');  ?>"> </div>
                            </div>
                        </div>
                    </div>
                     <?php /*
                     $curentid=get_the_ID();
                     $cond=childrea($curentid);
                     //echo '<pre>' ; print_r($cond); echo '<pre>';
                     if(!empty($cond)){
                       $parents=propost($curentid);
                       //echo '<pre>' ; print_r($data); echo '<pre>'; 
                       foreach ($parents as $parent) { 
                           $fils=parampost($parent[1]); 
                       foreach ($fils as $fil) {
                           echo '<a class="txtsearch" href="'.$fil[4].'">'; echo $fil[0]; echo '</a>';echo'<br>'; 
                           $souscond=childrea($fil[2]);
                           if(!empty($souscond)){
                               $fils2=parampost($fil[2]);
                               foreach ($fils2 as $fil2) {
                                   echo '<a class="txtsearch" href="'.$fil2[4].'">'; echo $fil2[0]; echo '</a>';echo'<br>'; 
                               }
                           }
                         }    
                       }
                     }*/
                     
                    ?> 
            </div>
    <?php endwhile; ?>
    <?php else : ?>

            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h1>Not Found</h1> 
            </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?> 