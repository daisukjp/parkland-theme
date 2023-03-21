<?php
/**
 * Template part for creating the project which display on the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package parkland-theme
 */

?>

<!-- What goes inside the loop is up to us. Use markup around the content -->
<div class="blog-flex-item">
    
<?php
  $image = get_field('blog_image');
?>
<?php if( !empty( $image ) ): ?>
  <a href="<?php the_permalink(); ?> "><img src="<?php echo esc_url($image['sizes']['blog-size']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="blog-img"></a>
<?php endif ?>
    <h4><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
</div>
