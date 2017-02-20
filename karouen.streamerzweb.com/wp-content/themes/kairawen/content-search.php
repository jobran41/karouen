
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
    <a class="txtsearch" href="<?php the_permalink();?>" ><?php the_title(); ?></a>
      <?php 
       /*  $the_query = get_posts_children(get_the_ID()); echo '<pre>'; 
        print_r($the_query);
        echo '</pre>';
        foreach($the_query as $post) {
         echo $post->post_name; echo '<br>'; 
         echo $post->ID;  
       }*/
      
      ?>
   
	<hr>

</article> 