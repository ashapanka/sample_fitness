<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <!--Header-->
                <?php get_header(); ?>    
            </div>
            <div class="row">
                <div class="col">
                    <!-- Main section -->
                    <section>
                        <h2>Top Story</h2>
                        <div class="row">
                            <?php
                                //the query
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status'   => 'publish',
                                    'posts_per_page'    => 1,
                                    	'tax_query' => array(
                                            array(
                                                'taxonomy' => 'post_tag',
                                                'field' => 'slug',
                                                'terms' => 'top-story'
                                            )
                                        )
                                );    
                                $top_story = new WP_Query($args);    
                            
                                //the loop
                                if ( $top_story->have_posts() ) {
                                    while ( $top_story->have_posts() ) {
                                        $top_story->the_post(); 
                                        ?>
                                            
                                        <div class="col-8 top_story">
                                            <?php echo the_post_thumbnail();?>
                                        </div>
                                        <div class="col-4">
                                            <a href="<?php echo get_permalink();?>"><?php echo get_the_title()?></a>
                                            <p><?php echo the_excerpt();?></p>
                                        </div>
                            
                                        <?php
                                    } // end while
                                wp_reset_postdata();    
                                } // end if
                            
                            
                            ?>
                        </div>
                        <h2>Latest Products</h2>
                        <div class="row">
                            <?php
                                //the query
                                $args = array(
                                    'post_type' => 'product',
                                    'post_status'   => 'publish',
                                    'posts_per_page'    => 3,
                                    
                                );    
                                $product_list = new WP_Query($args);    
                            
                                //the loop
                                if ( $product_list->have_posts() ) {
                                        while ( $product_list->have_posts() ) {
                                            $product_list->the_post(); 
                                            ?>
                                                
                                                <div class="col product">
                                                    <?php echo the_post_thumbnail();?>
                                                    <a href="<?php echo get_permalink();?>"><?php echo get_the_title()?></a>,
                                                    <span>Cost: $<?php echo get_field(cost);?></span>
                                                </div>
                            
                                            <?php
                                        } // end while
                                    wp_reset_postdata();    
                                } // end if
                            
                            ?>
                        </div>
                        <h2>More posts</h2>
                            <ul>
                                <?php
                                    //the query
                                    $args = array(
                                        'post_type' => array('post', 'product'),
                                        'post_status'   =>  'publish',
                                        'posts_per_page'    =>  7,
                                    );
                                
                                    $posts_list = new WP_Query($args);
                                
                                    //the loop
                                    if ( $posts_list->have_posts() ) {
                                        while ( $posts_list->have_posts() ) {
                                            $posts_list->the_post(); 
                                            ?>
                                                <li><a href="<?php echo get_permalink()?>"><?php echo get_the_title()?></a></li>
                                            <?php
                                        } // end while
                                    wp_reset_postdata();    
                                    } // end if
                                ?>
                            </ul>
                    </section>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="row">
                <?php get_footer(); ?>
            </div>
        </div>
    </body>
</html>