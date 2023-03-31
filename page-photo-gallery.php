<?php

    // template for displaying all photos

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package parkland-theme

?>

<?php get_header(); ?>

<main>
    <section>
        <div class="photo-gallery-container">

            <div class="photo-gallery-banner">
                <h2>Photo Gallery</h2>

                <div class="photo-gallery-rectangle">
                </div>
            </div>

        </div>

        <div class="photo-gallery-section">
            <h2>Photos of Parkland<img src="/wp-content/themes/parkland-theme/images/brushstroke.svg" alt="styled brush stroke"></h2>
        </div>

        <div class="gallery">

            <?php 
            $args = array(
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'orderby' => 'post_date',
            'order' => 'desc',
            'posts_per_page' => '30',
            'post_status'    => 'inherit'
            );

            $loop = new WP_Query( $args );

            while ( $loop->have_post() ) : $loop->the_post();

            $image = wp_get_attachment_image_src( get_the_ID() ); 
            echo "<img src='" . $image[0] . "'>";

            endwhile;
            ?>

        </div>
    </section>


</main>

<?php get_footer(); ?>