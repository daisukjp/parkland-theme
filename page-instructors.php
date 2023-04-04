<?php

    // template for displaying instructors

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package parkland-theme

?>

<?php get_header(); ?>

<main>
    <section>

        <div class="instructors-page-container">

            <div class="instructors-banner">
                <h2>Instructors</h2>

                <div class="instructors-rectangle">
                </div>
            </div>

        </div>
    
        <div class="instructors-section">

            <h2>Meet Our Instructors <img src="/wp-content/themes/parkland-theme/images/brushstroke.svg" alt="styled brush stroke"></h2>


            <div>
                <?php
                    $args = array(
                        'post_type'      => 'parkland-instructors',
                        'posts_per_page' => 15,
                        'order' => 'DESC',
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        get_template_part('template-parts/content', 'instructors');
                    }?>
            </div>




            <div class="instructor-container-1">

                <div class="instructor-image">
                    <img src="/wp-content/themes/parkland-theme/images/ptc-john.webp" alt="picture of John" width="360" height="240">
                </div>

                <div class="instructor-information">
                    <h3>John</h3>
                    <h4>Instructor Information</h4>
                    <p>Hi, I am John Tummers,</p>
                    <p>I have been studying and teaching Tai Chi and Chi Kung for over 40 years.</p>
                    <p>In 1991, I founded the Parkland Tai Chi Association as a 100% non-profit organization and with many other volunteers continue to pass on the techniques and practices. It gives me utmost pleasure to share this with others.</p>
                </div>

            </div>
            <div class="instructor-container-2">
                <div class="instructor-image">
                    <img src="/wp-content/themes/parkland-theme/images/ptc-grace.webp" alt="picture of John" width="360" height="240">
                </div>

                <div class="instructor-information">
                    <h3>Grace</h3>
                    <h4>Instructor Information</h4>
                    <p>Hi, I am Grace,</p>
                    <p>For years I admired the slow, calm, rhythmic movements of Tai Chi. I joined Parkland Tai Chi in 2000, and from the very first couple of moves I was hooked.</p>
                    <p>Tai Chi is definitely for me, and I am very passionate about it. I enjoy teaching both beginner and intermediate classes immensely and I hope that my passion for the practice is reflected in my teaching.</p>
                </div>
            </div>

            <div class="instructor-container-3">
                <div class="instructor-image">
                    <img src="/wp-content/themes/parkland-theme/images/ptc-charlene.webp" alt="picture of John" width="360" height="240">
                </div>

                <div class="instructor-information">
                    <h3>Charlene</h3>
                    <h4>Instructor Information</h4>
                    <p>Hi, I am Charlene,</p>
                    <p>I started my Tai Chi journey in 2018. I needed to do some exercise and thought Tai Chi would be good as it is low impact. I soon got hooked on learning about how Tai Chi can greatly improve all areas of my life. I will continue to learn and grow..</p>
                </div>
            </div>

            <div class="instructor-container-4">
                <div class="instructor-image">
                    <img src="/wp-content/themes/parkland-theme/images/ptc-alex.webp" alt="picture of John" width="360" height="240">
                </div>

                <div class="instructor-information">
                    <h3>Alex</h3>
                    <h4>Instructor Information</h4>
                    <p>Hi, I am Alex</p>
                    <p>I have been studying and teaching Tai Chi and Chi Kung for over 40 years.</p>
                    <p>In 1991, I founded the Parkland Tai Chi Association as a 100% non-profit organization and with many other volunteers continue to pass on the techniques and practices. It gives me utmost pleasure to share this with others.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>