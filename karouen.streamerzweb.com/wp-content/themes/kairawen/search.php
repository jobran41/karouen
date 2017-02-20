<?php get_header(); ?>
<?php get_template_part('content', 'headertop'); ?>

<div class="container" style="margin-top: 20%">
<div class="row">
	
	<div class="col-xs-12 col-sm-12 col-lg-12">
		
		<div class="searchstylform">   

		<?php/*
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); */?>
				
				<?php // get_template_part('content', 'search');  
                                 personalise_search();     
                                ?>
                    
			
			<?php/* endwhile;
			
		endif;*/
				
		?>
		</div>
	
	</div>
	
</div>
</div>

<?php get_footer(); ?>