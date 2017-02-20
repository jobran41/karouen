<?php get_header();   ?>
<?php get_template_part('content', 'headertop'); ?>
<div class="singlebgrecrutement bgrecrutement" id="" >  
    <div class="container" style=" margin-top: 7%;padding-top: 40px; " >  
        <div class="staticblockrecrutement">
            <!--<h3 class="text-center titleespcon">Offres disponibles</h3> -->   
        </div>
        <?php
           //$joeinter = $_GET_['key'];   
           $joeinter = $wp_query->query_vars['key'];  
           $idoffert = $wp_query->query_vars['id'];
                   if($joeinter=="jono"){ 
            if( have_posts() ):
                    while( have_posts() ): the_post(); ?> 
                    <div class="uk-width-1-1">
                        <div class="bgblanc bgsize"> 
                            <div class="titlecontent"> 
                                <h3 class="titlrecuretment"><?php the_title();?></h3>  
                                <?php the_content();?>
                            </div>
                            
                            <div class="blockred singblockred">   
                                
                                <span class="spanright sparisingle">Publié le <?php the_field('jour'); echo ','; ?>  <?php the_field('date'); ?></span>  
                            </div>
                            <a href="<?php the_permalink();?>?key=joe&id=<?php echo $idoffert?>" data-id="<?php echo $idoffert ?>"  class="postuler singleposbtnpost">Postuler</a>   
                        </div>
                    </div> 
                    <?php endwhile; 
            endif;
             }else{
                 //echo $idoffert;  
                 //echo '<input id="addidoffert" type="hidden" value="'.$idoffert.'">';
                 echo '<p class="texthautform">Veuillez remplir dûment le formulaire de recrutement ci dessous.</p>';   
                 echo do_shortcode('[gravityform id="1" name="recrutement" field_values="idf=id"]');  
             }
            ?>
    </div>
</div>
<?php get_footer(); ?>  