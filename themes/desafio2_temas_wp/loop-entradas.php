<div class="col-md-6 gtco-news">
     <h2>
        Noticias
    </h2> 
    <?php 
            if( have_posts() ): 
                // If there are posts matching the query then start the loop
                while ( have_posts()): the_post(); 
                    ?>
                    <ul>
                        <li>
                            <a href="#">
                                <span class="post-date">
                                    <?php the_date(); ?>   
                                </span>
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                               
                            </a>
                        </li>  
                    </ul>
            
                   
        
    <?php endwhile; ?>
    
<?php endif; ?>
 </div> 
   