<?php
/***
* The template for displaying individual blog posts (full article/blog post).
*
* @package parkland-theme
* @since 1.0.0
*/
//display header
get_header();

?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <article <?php post_class();?> id="post-<?php the_ID();?>" >

        <div class="individual-blog-heading" ><?php the_title('<h1 class="entry-title">', '</h1>'); ?></div>

            <div class="individual-blog-flex-container">

                <div>
                         <?php the_field('blog_content'); ?>
                </div>

                <div>
                <?php
                    $image = get_field('blog_image');
                    ?>
                    <?php if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['sizes']['blog-single-size']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endif ?>
                </div>

            </div>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>