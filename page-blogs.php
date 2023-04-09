<?php

    // template for displaying blogs

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package parkland-theme

?>

<?php get_header(); ?>

<main>
    <div class="blog-post-banner">
        <div class="blog-post-wrap">
            <h2>BLOG</h2>
        </div>
    </div>
    <section>
        <?php
            the_content(); 
        ?>
            
            <div>
                <h2><?php the_field('blog_page_heading');?></h2>
            </div>
            
                <?php
                    $args = array(
                        'post_type'      => 'the-blogs',
                        'posts_per_page' => 15,
                        'order' => 'DESC',
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        get_template_part('template-parts/content', 'blog');
                    }?>
    </section>
</main>

<?php get_footer(); ?>