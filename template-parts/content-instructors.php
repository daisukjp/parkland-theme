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
<div class="instructor-container-1">
    
<?php
  $image = get_field('instructor_image');
  get_field('instructor_content')
?>
<?php if( !empty( $image ) ): ?>
  <img src="<?php echo esc_url($image['sizes']['instructor-size']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
<?php endif ?>
<?php the_title(); ?>
<?php the_field('instructor_content'); ?>
</div>
