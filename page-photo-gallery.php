<?php

    // template for displaying all photos

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package parkland-theme

?>

<?php get_header(); 

$picture = $image['sizes']['blog-size'];

?>

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

        <div class="container">

            <?php if (have_posts()) ; while (have_posts()) ; the_post(); ?>

            <?php the_content(); ?>



            <img src="<?php echo $picture;?>">

        </div>
    </section>


</main>

<?php get_footer(); ?>