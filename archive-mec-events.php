<?php
/** no direct access **/
defined('MECEXEC') or die();

$main = MEC::getInstance('app.libraries.main');
$settings = $main->get_settings();

$title_tag = (isset($settings['archive_title_tag']) and trim($settings['archive_title_tag'])) ? $settings['archive_title_tag'] : 'h1';

/**
 * The Template for displaying events archives
 * 
 * @author Webnus <info@webnus.net>
 * @package MEC/Templates
 * @version 1.0.0
 */
get_header('mec'); ?>

    <div class="weather-app">
        <a class="weatherwidget-io" href="https://forecast7.com/en/53d54n113d90/spruce-grove/" data-label_1="SPRUCE GROVE" data-label_2="Weather" data-font="Roboto" data-icons="Climacons Animated" data-theme="weather_one" >SPRUCE GROVE Weather</a>
        <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>
    </div>


<div class="class-information">
    <div class="classes-header" >
        <h1>Classes</h1>
    </div>


    
    <div class="class-types">
        <h2>At Parkland we offer 3 different types of classes.</h2>
    
        <div class="class-types-flex-container">
            <div class="beginner">
                <p>This is the beginner column.</p>
            </div>
            <div class="intermediate">
                <p>This is the intermediate column.</p>
            </div>
            <div class="advanced">
                <p>This is the advanced column.</p>
            </div>
        </div>
        <div class="all-levels">
                <p>We also offer an all-levels Chi Kung class once a week where various techniques are presented and practiced. Everyone is welcome to join.</p>
        </div>
    </div>
</div>
	
    <section id="<?php echo apply_filters('mec_archive_page_html_id', 'main-content'); ?>" class="<?php echo apply_filters('mec_archive_page_html_class', 'mec-container'); ?>">


        <?php do_action('mec_before_main_content'); ?>

        <?php if(have_posts()): ?>

            <?php do_action('mec_before_events_loop'); ?>

                <?php while(have_posts()): the_post(); ?>

                    <?php if(trim($title)): ?><<?php echo esc_html($title_tag); ?>><?php echo MEC_kses::element($title); ?></<?php echo esc_html($title_tag); ?>><?php endif; ?>

                    <?php the_content(); ?>

                <?php break; /** Only one post should be shown **/ endwhile; // end of the loop. ?>

            <?php do_action('mec_after_events_loop'); ?>

        <?php else: ?>

        <p><?php esc_html_e('No event found!', 'modern-events-calendar-lite'); ?></p>

        <?php endif; ?>
    </section>

    <?php do_action('mec_after_main_content'); ?>

<?php get_footer('mec');