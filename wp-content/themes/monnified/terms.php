<?php 
/* Template Name: Terms */
get_header(); ?>
   <main class="terms">
   <?php   
    $title_header = get_field('title_header'); 
    $content = get_field('content'); 
   ?>
    <section class="t_and_c">
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

 