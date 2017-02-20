<?php get_header(); ?>
<?php get_template_part('content', 'headertop'); ?> 
<div class="bgrecrutement" id="" > 
    <div class="container" >
        <div class="staticblockrecrutement">
            <h3 class="text-center titleespcon">Offres disponibles</h3>   
            
        </div>
        <div class="uk-flex  blockgriddiv uk-flex-wrap" id="gridrecrut">    
        <?php
            if( have_posts() ):
                    while( have_posts() ): the_post(); ?> 
                    <div class="uk-width-1-2">
                            <div class="bgblanc"> 
                                <div class="titlecontent"> 
                                    <h3 class="titlrecuretment"><?php the_title();?></h3> 
                                    <?php the_excerpt();?>
                                </div>
                                <div class="blockred">
                                    <span class="spanleft"><?php // the_field('idoffert'); ?></span> 
                                    <span class="spanright">Publiée le <?php the_field('jour'); echo ','; ?> <?php the_field('date'); ?></span>  
                                </div>
                            </div>
                        <a href="<?php the_permalink();?>?key=jono&id=<?php the_field('idoffert'); ?>" class="postuler posbtnpost">Détail de l’offre</a>   
                    </div> 
                   
                    <?php endwhile;   
            endif;
            ?>
            <a href="<?php the_permalink();?>?key=joe&id=1"   class="postuler archiveposbtnpost">Candidature spontanée</a>
        </div>  
        <a href="#" class="loadmore uk-icon-button uk-icon-angle-double-down" id="loadMore"></a>  
    </div>
</div>
<?php get_footer(); ?>  