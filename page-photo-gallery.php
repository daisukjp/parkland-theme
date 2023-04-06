<?php

    // template for displaying all photos

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package parkland-theme

?>

<?php get_header(); ?>

<main>



    <div class="photo-gallery-banner">
            <h2>Photo Gallery</h2>
    </div>



    <div class="photo-gallery-section">
        <h2>Photos of Parkland<img src="/wp-content/themes/parkland-theme/images/brushstroke.svg" alt="styled brush stroke"></h2>

    </div>

    <section>
        <div class="gallery-container">
            <?php
                while ( have_posts() ) :
                    the_post();

                    // Retrieve the gallery data
                    $gallery = get_post_gallery(get_the_ID(), false);
                    $ids = explode(',', $gallery['ids']);
                ?>
            <ul class="image-gallery">
                <?php
                foreach ($ids as $id) {
                    $image = wp_get_attachment_image_src( $id, 'large' ); 
                    echo '<li><a href="' . $image[0] . '"><img src="' . $image[0] . '" /></a></li>';
                }
                ?>
            </ul>
            <?php
            endwhile;
            ?>

        </div>
    </section>


</main>

<?php get_footer(); ?>