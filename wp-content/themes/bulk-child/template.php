<?php get_header();
/* Template Name: Template */
?>

<div class="side-margin">

<div class="template-font margin-bottom">Le contenu de la page : </div>

    <?php the_content();
        $args = array( 'numberposts' => '1');
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){
        echo '<a href="' . get_permalink($recent["ID"]) . '">Latest Post</a><br>';
        }

        $page = array( 'post_type' => 'page',
                        'numberposts' => '1');
        $recent_page = wp_get_recent_posts( $page );
        foreach( $recent_page as $recent ){
        echo '<a href="' . get_permalink($recent["ID"]) . '">Latest Page</a><br>';
        }
        

        get_footer();
        if (current_user_can('administrator')){
            echo 'Vous êtes admin';
        }
        
    ?>
</div>