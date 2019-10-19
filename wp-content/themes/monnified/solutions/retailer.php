<?php
/* Template Name: Retailer */ 
get_header(); ?>
 <main class="case">
    <!-- Introduction -->
    <?php   $intro = get_field('intro');  ?>
    <section class="intro_">
        <div class="container">
            <div class="info">
                <div class="sub-hd">
                    <label data-aos="fade-up" data-aos-delay="100"><?php  the_title();  ?></label>
                </div>
                <h2 data-aos="fade-up" data-aos-delay="200"><?php echo $intro['header']; ?></h2>
                <div data-aos="fade-up" data-aos-delay="400">
                    <p><?php echo $intro['sub_text']; ?></p>
                </div>
            </div>
        </div>
        <div class="decoration">
            <div class="dec-slide">
            <div class="dec-item" style="display: block;">
                <img src="<?php the_post_thumbnail_url(); ?>" class="dec-image animated fadeInX delay-x1s man_">
                <img src="<?php bloginfo('template_directory') ?>/./assets/img/png/shutter-5-shadow.png" class="dec-shadow  animated fadeIn delay-x2s">
            </div>
            </div>
            </div>
        <div class="mb-decoration">
            <div class="item-1">
            <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/img_1.svg" alt="banner" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1000" class="aos-init aos-animate">
            </div>
        </div>
    </section>
    <!-- Features -->
    <?php   $features_tier_one = get_field('features_tier_one');  ?>
    <?php   $features_tier_two_header = get_field('features_tier_two_header');  ?>
    <section class="features">
        <div class="t_curve_1">
            <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/triangle_transparent.svg">
        </div>
        <div class="t_curve_2">
            <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/Rectangle.svg">
        </div>
        <div class="container">
            <div class="tier_one">
                <?php echo $features_tier_one; ?>
                <div class="scroll"><i class="icon" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/arrow_down.svg" alt="arrow"></i> </div>
            </div>
            <div class="tier_two"  id="feat">
                <h3 data-aos="fade-up" data-aos-delay="300"><?php echo $features_tier_two_header ?></h3>
                <?php  if( have_rows('features_tier_two_content') ): ?>
                    <?php   $delay = 100; ?>
                    <div class="row">
                        <?php while( have_rows('features_tier_two_content') ): the_row(); 
                            $icon= get_sub_field('icon');
                            $content = get_sub_field('content');
                        ?>
                            <div class="col-lg-4">
                                <div class="stacked" data-aos="fade-up" data-aos-delay="<?php echo $delay;?>" data-aos-duration="500">
                                    <div class="top">
                                        <div class="icon">
                                            <img src="<?php echo $icon; ?>" >
                                        </div>
                                    </div>
                                    <?php echo $content ?>
                                </div>
                            </div>
                            <?php  $delay = $delay + 200; ?>
                        <?php endwhile; ?>
                    </div>
                <?php  endif; ?>
            </div>
        </div>
        <div class="decorate">
            <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/three-dot-pattern.svg" alt="dot-pattern">
        </div>
    </section>
    <!-- Services -->
    <?php   $service_tier_one_header = get_field('service_tier_one_header');  ?>
    <?php   $service_tier_two_header = get_field('service_tier_two_header');  ?>
    <?php   $service_tier_five_cont = get_field('service_tier_five_content');  ?>
    <section class="services">
        <div class="container">
            <div class="tier_one" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-5">
                        <h3 data-aos="fade-up" data-aos-delay="100" data-aos-duration="500"><?php echo $service_tier_one_header; ?></h3>
                    </div>
                    <div class="col-lg-7">
                        <?php  if( have_rows('service_tier_one_content') ): ?>
                            <div class="row methods">
                                <?php while( have_rows('service_tier_one_content') ): the_row(); 
                                    $icon= get_sub_field('icon');
                                    $content = get_sub_field('content');
                                ?>
                                    <div class="col-lg-6">
                                        <div class="stacked" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1000">
                                            <div class="top">
                                            <div class="icon">
                                                <img src="<?php echo $icon; ?>" >
                                            </div>
                                            </div>
                                            <?php echo $content; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php  endif; ?>
                    </div>
                </div>
            </div>
            <div class="tier_two" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-5">
                        <h3 data-aos="fade-up" data-aos-delay="300"><?php echo $service_tier_two_header; ?></h3>
                    </div>
                    <div class="col-lg-7">
                    <?php  if( have_rows('service_tier_two_content') ): ?>
                        <div class="row methods">
                            <?php while( have_rows('service_tier_two_content') ): the_row(); 
                                $icon= get_sub_field('icon');
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                            ?>
                                <div class="col-lg-12">
                                    <div class="card" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                                        <div class="icon_wrap">
                                            <div class="icon">
                                                <img src="<?php echo $icon; ?>" >
                                            </div>
                                        </div>
                                        <div class="content_">
                                            <label><?php echo $title; ?></label>
                                            <?php echo $content; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php  endif; ?>
                    </div>
                </div>
            </div>
            <div class="tier_three" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="row">
                    <div class="col-lg-5">
                        <?php     
                        $index = 1; 
                        if( have_rows('testimonial_image_slides') ): ?>
                        <?php while( have_rows('testimonial_image_slides') ): the_row(); 
                            $image_slides = get_sub_field('image_slides'); 

                        ?>
                            <?php  if(get_row_index() == 1) : ?>
                            <div class="image img_<?php echo $index;?> active"
                                style="background-image: url('<?php echo $image_slides;  ?>')">
                            </div>
                        <?php else : ?>
                            <div class="image img_<?php echo $index;?>"
                                style="background-image: url('<?php echo $image_slides;  ?>')">
                            </div>
                        <?php endif; ?>
                        <?php ++$index; ?>
                        <?php endwhile; ?>
                        <?php  endif; ?>
                    </div>
                    <div class="col-lg-7">
                        <?php if( have_rows('testimonial_content') ): ?>
                            <?php 
                                $index = 1;  
                            ?>
                            <?php while( have_rows('testimonial_content') ): the_row(); 
                                $msg = get_sub_field('message');
                                $author = get_sub_field('author'); 
                                $company = get_sub_field('company'); 
                            ?>
                                <?php  if(get_row_index() == 1) : ?>
                                    <div class="wrapr t_<?php echo $index; ?> active animated fadeIn">
                                        <div>
                                            <i class="icon">
                                                <svg width="58" height="41" viewBox="0 0 58 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M20.4167 0L12.25 16.3333H24.5V40.8333H0V16.3333L8.16667 0H20.4167ZM53.0833 0L44.9167 16.3333H57.1667V40.8333H32.6667V16.3333L40.8333 0H53.0833Z"
                                                        fill="#FDB515" />
                                                </svg>
                                            </i>
                                            <?php echo $msg; ?>
                                            <label><?php echo $author; ?><br><span><?php echo $company; ?></span></label>
                                        </div>
                                    </div>
                                <?php else : ?>
                                <div class="wrapr t_<?php echo $index; ?>  animated fadeIn">
                                        <div>
                                            <i class="icon">
                                                <svg width="58" height="41" viewBox="0 0 58 41" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M20.4167 0L12.25 16.3333H24.5V40.8333H0V16.3333L8.16667 0H20.4167ZM53.0833 0L44.9167 16.3333H57.1667V40.8333H32.6667V16.3333L40.8333 0H53.0833Z"
                                                        fill="#FDB515" />
                                                </svg>
                                            </i>
                                            <?php echo $msg; ?>
                                            <label><?php echo $author; ?><br><span><?php echo $company; ?></span></label>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php ++$index; ?>
                            <?php endwhile; ?>
                        <?php  endif; ?>
                    </div>
                </div>
            </div>
            <div class="tier_four">
                <div class="scroll-wrap">
                <div class="quote-slide" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    <?php if( have_rows('testimonial_brand_logo') ): ?>
                        <?php while( have_rows('testimonial_brand_logo') ): the_row(); 
                            $brand_logo = get_sub_field('brand_logo');
                        ?>
                        <?php  if(get_row_index() == 1) : ?>
                            <div class="item card active">
                                <img src="<?php  echo $brand_logo; ?>"  />
                            </div>
                        <?php else : ?>
                        <div class="item card">
                            <img src="<?php echo $brand_logo; ?>"  />
                        </div>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    <?php  endif; ?>
                    </div>
                </div>
            </div>
            <div class="tier_five">
                <div class="row">
                    <div class="col-lg-4">
                        <?php echo $service_tier_five_cont; ?>
                    </div>
                    <div class="col-lg-8">
                    <div class="form-wrap" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="decorate"><img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/flower-shaped.svg" alt="flower-shaped"></div>
                        <form class="signup-form">
                        <label class="title">Get started here</label>
                        <div class="row">
                            <input type="text" name="name" required="" placeholder="Business Name" class="input">
                        </div>
                        <div class="row">
                            <input type="email" name="email" required="" placeholder="Your Email" class="input">
                        </div>
                        <div class="row">
                            <input type="password" name="password" required="" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&amp;]).{8,10}$" minlength="8" placeholder="Password" class="input">
                            <div class="pass-strength">
                            <ul class="unordered">
                                <li>At least 1 lowercase alphabetical character </li>
                                <li>At least 1 uppercase alphabetical character</li>
                                <li>At least 1 numeric character</li>
                                <li>At least 1 special character e.g @,#,&amp;</li>
                                <li>At least 8 characters long</li>
                            </ul>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn btn-submit">Sign up</button>
                        </div>
                        </form>
                        <div class="decorate_dot"><img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/dot-pattern.svg" alt="dot pattern"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>

