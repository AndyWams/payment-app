<?php
/* Template Name: Contact */
 get_header(); ?>
<main class="pricing help">
        <!-- Help and Support -->
        <?php   $title_header = get_field('title_header'); 
            $contact_cards = get_field('contact_cards');
            $contact_sales = $contact_cards['contact_sales'];  
            $contact_support = $contact_cards['contact_support']; 
            $contact_sales_link_url = $contact_sales['url']; 
            $contact_sales_link_title = $contact_sales['title']; 
            $contact_sales_link_target = $contact_sales['target'];
            $contact_support_link_url = $contact_support['url']; 
            $contact_support_link_title = $contact_support['title']; 
            $contact_support_link_target = $contact_support['target'];
        ?>
        <section class="support alt">
            <div class="container">
                <div class="title">
                    <?php echo $title_header; ?>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="300">
                            <div class="top">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/sales-icon.svg" alt="Sales Icon">
                                </div>
                            </div>
                            <div class="center">
                            <h1><?php echo $contact_cards['left_header']; ?></h1>
                            </div>
                            <div class="bottom">
                                <p><?php echo $contact_cards['left_sub_text']; ?></p>
                                <a class="btn btn-primary"  href="<?php echo $contact_sales_link_url ; ?>" target="<?php echo esc_attr($contact_sales_link_target ); ?>"><span><?php echo esc_html($contact_sales_link_title); ?></span></a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="500">
                            <div class="top">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/support-icon.svg" alt="Support">
                                </div>
                            </div>
                            <div class="center">
                                <h1><?php echo $contact_cards['right_header']; ?></h1>
                            </div>
                            <div class="bottom">
                                <p><?php echo $contact_cards['right_sub_text']; ?></p>
                                <a class="btn btn-primary"  href="<?php echo $contact_support_link_url ; ?>" target="<?php echo esc_attr($contact_support_link_target ); ?>"><span><?php echo esc_html($contact_support_link_title); ?></span></a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="decorate">
                        <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/three-dot-pattern.svg" alt="dot-pattern">
                    </div>
                </div>
            </div>
        </section>

        <!-- Faqs -->
        <?php   
            $faq_header = get_field('faq_header'); 
            $general_faq_header = get_field('general_faq_header'); 
            $gs_faq_header = get_field('gs_faq_header'); 
            $us_faq_header = get_field('us_faq_header'); 
         ?>
        <section class="faq main">
            <div class="container">
                <div class="decorate">
                    <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/art-logo-mask.svg" alt="Art-Logo-Mask" data-aos="fade-in"
                        data-aos-delay="100">
                </div>
                <div class="title">
                    <?php echo $faq_header; ?>
                </div>
                <!-- General Faqs -->
                <div class="sub-title">
                    <h4 data-aos="fade-up" data-aos-delay="100"><?php echo $general_faq_header; ?></h4>
                </div>
                <div class="faqs">
                    <hr>
                    <?php if( have_rows('general_faq') ): ?>
                        <?php 
                            $index = 1;  
                        ?>
                        <?php while( have_rows('general_faq') ): the_row(); 
                                $title = get_sub_field('title'); 
                                $content = get_sub_field('content'); 
                        ?>
                            <div class="wrap collapsed" data-target="#faq_g<?php echo $index; ?>" data-toggle="collapse" aria-expanded="false">
                                <label><?php echo $title; ?></label>
                                <div class="icon">
                                    <i class="plus">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                d="M20.0001 11.4285H11.4287V20H8.57152V11.4285H0V8.57139H8.57152V0H11.4287V8.57139H20.0001V11.4285Z"
                                                fill="#063A4F" />
                                        </svg>
                                    </i>
                                    <i class="minus">
                                        <svg width="21" height="3" viewBox="0 0 21 3" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5" d="M21 3H0L0.000779629 0.00314999L21 0V3Z" fill="#063A4F" />
                                        </svg>
                                    </i>
                                </div>
                            </div>
                            <div class="kontent">
                                <div class="collapse" id="faq_g<?php echo $index; ?>">
                                    <?php echo $content; ?>
                                </div>
                            </div>
                            <hr>         
                            <?php ++$index; ?>
                        <?php endwhile; ?>
                    <?php  endif; ?>
                </div>
                <!-- Getting Started  Faq -->
                <div class="sub-title">
                    <h4 data-aos="fade-up" data-aos-delay="100"><?php echo $gs_faq_header; ?></h4>
                </div>
                <div class="faqs">
                    <hr>
                    <?php if( have_rows('gs_faq') ): ?>
                        <?php 
                            $index = 1;  
                        ?>
                        <?php while( have_rows('gs_faq') ): the_row(); 
                                $title = get_sub_field('title'); 
                                $content = get_sub_field('content'); 
                        ?>
                            <div class="wrap collapsed" data-target="#faq_gs<?php echo $index; ?>" data-toggle="collapse" aria-expanded="false">
                                <label><?php echo $title; ?></label>
                                <div class="icon">
                                    <i class="plus">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                d="M20.0001 11.4285H11.4287V20H8.57152V11.4285H0V8.57139H8.57152V0H11.4287V8.57139H20.0001V11.4285Z"
                                                fill="#063A4F" />
                                        </svg>
                                    </i>
                                    <i class="minus">
                                        <svg width="21" height="3" viewBox="0 0 21 3" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5" d="M21 3H0L0.000779629 0.00314999L21 0V3Z" fill="#063A4F" />
                                        </svg>
                                    </i>
                                </div>
                            </div>
                            <div class="kontent">
                                <div class="collapse" id="faq_gs<?php echo $index; ?>">
                                    <?php echo $content; ?>
                                </div>
                            </div>
                            <hr>         
                            <?php ++$index; ?>
                        <?php endwhile; ?>
                    <?php  endif; ?>
                </div>
                <!-- Using Monnify Faq -->
                <div class="sub-title">
                    <h4 data-aos="fade-up" data-aos-delay="100"><?php echo $us_faq_header; ?></h4>
                </div>
                <div class="faqs">
                    <hr>
                    <?php if( have_rows('us_faq') ): ?>
                        <?php 
                            $index = 1;  
                        ?>
                        <?php while( have_rows('us_faq') ): the_row(); 
                                $title = get_sub_field('title'); 
                                $content = get_sub_field('content'); 
                        ?>
                            <div class="wrap collapsed" data-target="#faq<?php echo $index; ?>" data-toggle="collapse" aria-expanded="false">
                                <label><?php echo $title; ?></label>
                                <div class="icon">
                                    <i class="plus">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                d="M20.0001 11.4285H11.4287V20H8.57152V11.4285H0V8.57139H8.57152V0H11.4287V8.57139H20.0001V11.4285Z"
                                                fill="#063A4F" />
                                        </svg>
                                    </i>
                                    <i class="minus">
                                        <svg width="21" height="3" viewBox="0 0 21 3" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5" d="M21 3H0L0.000779629 0.00314999L21 0V3Z" fill="#063A4F" />
                                        </svg>
                                    </i>
                                </div>
                            </div>
                            <div class="kontent">
                                <div class="collapse" id="faq<?php echo $index; ?>">
                                    <?php echo $content; ?>
                                </div>
                            </div>
                            <hr>         
                            <?php ++$index; ?>
                        <?php endwhile; ?>
                    <?php  endif; ?>
                </div>
            </div>
        </section>
<?php get_footer(); ?>