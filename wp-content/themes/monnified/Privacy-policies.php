<?php 
/* Template Name: Privacy Policies */
get_header(); ?>
    <?php   
        $title_header = get_field('title_header'); 
        $content = get_field('content'); 
    ?>
    <main class="terms">
        <section class="t_and_c privacy">
        <div class="container">
            <div class="title">
            <h1 data-aos="fade-up" data-aos-delay="100"><?php echo $title_header; ?></h1>
            </div>
            <div class="content" data-aos="fade-up" data-aos-delay="400">
                <?php echo $content; ?>
            </div>
        </div>
        </section>

<?php get_footer(); ?>

 