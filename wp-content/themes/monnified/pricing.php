<?php 
/* Template Name: Pricing */
get_header(); ?>
    <main class="pricing">
        <!-- Best Prices -->
        <?php   $title_header = get_field('title_header');  ?>
        <?php $pricing_cards = get_field('pricing_cards'); ?>
        <section class="best-prices">
            <div class="container">
                <div class="title">
                <?php echo $title_header; ?>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="300">
                            <div class="top">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/account-transfer.svg" alt="account-transfer">
                                </div>
                                <label>FOR<br> ACCOUNT TRANSFERS</label>
                            </div>
                            <div class="center">
                                <h1><?php echo $pricing_cards['left_top_header']; ?></h1>
                                <p><?php echo $pricing_cards['left_top_sub_text']; ?></p>
                                <div class="d-flex">
                                    <label class="opt">OR</label>
                                    <hr />
                                </div>
                                <h1><?php echo $pricing_cards['left_bottom_header']; ?><span>Flat rate</span></h1>
                            </div>
                            <div class="bottom">
                                <p><?php echo $pricing_cards['left_bottom_description']; ?></p>
                                <span>VAT Exclusive</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card" data-aos="fade-up" data-aos-delay="500">
                            <div class="top">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/for-cards.svg" alt="cards">
                                </div>
                                <label>FOR<br> CARDS</label>
                            </div>
                            <div class="center">
                                <h1><?php echo $pricing_cards['right_top_header']; ?></h1>
                                <p><?php echo $pricing_cards['right_top_sub_text']; ?></p>
                                <hr />
                                &nbsp;
                            </div>
                            &nbsp;
                            <div class="bottom">
                                <p><?php echo $pricing_cards['right_bottom_description']; ?></p>
                                <span>VAT Exclusive</span>
                            </div>
                        </div>
                    </div>
                    <div class="decorate">
                        <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/three-dot-pattern.svg" alt="dot-pattern">
                    </div>
                </div>
            </div>
        </section>
        <!-- Calculator -->
        <?php 
            $contact_sales = get_field('contact_sales');  
            $contact_sales_link_url = $contact_sales['url']; 
            $contact_sales_link_title = $contact_sales['title']; 
            $contact_sales_link_target = $contact_sales['target'];
            $center_header = get_field('center_header');  
            $quote = get_field('quote');  
            $faq_header = get_field('faq_header'); 
            $contact_us = get_field('contact_us');  
            $contactus_link_url = $contact_us['url'];
            $contactus_link_title = $contact_us['title']; 
            $contactus_link_target = $contact_us['target']
        ?>
        <section class="calculator">
            <div class="container">
                <div class="tier_one">
                    <div class="menu">
                        <ul>
                            <?php  if( have_rows('menu_list') ): ?>
                                <?php while( have_rows('menu_list') ): the_row(); 
                                    $menus = get_sub_field('menus');
                                ?>
                                    <li><span><?php echo $menus; ?></span></li>
                                <?php endwhile; ?>
                            <?php  endif; ?>
                        </ul>
                    </div>
                    <div class="decorate">
                        <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/art-logo-mask.svg" alt="Art-Logo-Mask" data-aos="fade-in"
                            data-aos-delay="100">
                    </div>
                    <div class="contact_">
                    <a class="btn btn-primary" data-aos="fade-up" data-aos-delay="100"
                        href="<?php echo $contact_sales_link_url ; ?>" target="<?php echo esc_attr($contact_sales_link_target ); ?>"><span><?php echo esc_html($contact_sales_link_title); ?></span></a>
                        <div>
                           <?php echo $center_header; ?>
                        </div>
                    </div>
                </div>
                <div class="tier_two">
                    <div class="container">
                        <div class="row rev">
                            <div class="col-lg-7">
                                <div class="form-wrap" data-aos="fade-up" data-aos-delay="100">
                                    <div class="decorate"><img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/flower-shaped.svg"
                                            alt="flower-shaped"></div>
                                    <form autocomplete="off" id="pricing">
                                        <div class="select-tab">
                                            <a class="item active" data-id="acct">Account Transfer</a>
                                            <a class="item" data-id="card">Card</a>
                                        </div>
                                        <label class="title">Your customer pays</label>
                                        <div class="row">
                                            <i class="naira_">
                                                <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M2.112 18V11.832H0.24V10.296H2.112V8.328H0.24V6.792H2.112V0.863999H4.608L6.888 6.792H9.72V0.863999H11.616V6.792H13.488V8.328H11.616V10.296H13.488V11.832H11.616V18H9.096L6.816 11.832H3.984V18H2.112ZM3.936 6.792H4.944L3.936 3.816H3.84L3.936 6.792ZM3.984 10.296H6.24L5.52 8.328H3.936L3.984 10.296ZM8.16 10.296H9.768L9.72 8.328H7.44L8.16 10.296ZM9.72 14.616H9.816L9.744 11.832H8.736L9.72 14.616Z"
                                                        fill="#F9FBFD" />
                                                </svg>
                                            </i>
                                            <input type="text" maxlength="11" placeholder="10,000.00" class="input"
                                                id="pricingFormat" name="user_val">
                                            <button type="button" class="btn btn-sub calculate">
                                                <i class="icon">
                                                    <svg width="21" height="13" viewBox="0 0 21 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M20.5725 6.66609C20.6597 6.87572 20.6597 7.1121 20.5725 7.3226C20.5294 7.42698 20.4673 7.52102 20.3879 7.59952V7.60038L15.2308 12.7455C15.0626 12.9128 14.8434 12.9965 14.6234 12.9965C14.4035 12.9965 14.1835 12.9128 14.0152 12.7455C13.6797 12.4107 13.6797 11.8672 14.0152 11.5325L17.705 7.85143H0.872186C0.396844 7.85143 0.012085 7.46753 0.012085 6.99391C0.012085 6.5203 0.396844 6.13726 0.872186 6.13726H17.705L14.0152 2.45617C13.6797 2.12145 13.6797 1.57795 14.0152 1.24323C14.3508 0.908507 14.8952 0.908507 15.2308 1.24323L20.3879 6.38831C20.3879 6.38831 20.3879 6.38831 20.3879 6.38917C20.4673 6.46767 20.5294 6.56171 20.5725 6.66609Z"
                                                            fill="#FDB515"></path>
                                                        <defs>
                                                            <linearGradient id="paint0_linear" x1="9.65449"
                                                                y1="-4.27386" x2="16.4882" y2="14.4198"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#F0AA22"></stop>
                                                                <stop offset="1" stop-color="#F05822"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </i>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="decorate_dot"><img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/dot-pattern.svg"
                                            alt="dot pattern"></div>
                                    <div class="naration">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-7">
                                                <label>Amount Settled to you</label>
                                                <h1>₦9,925.00</h1>
                                                <p class="cap">Cap of <span>2000</span> applied</p>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <label>Our charges</label>
                                                <h1>0.75% </h1>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="quote">
                                        <p>We can offer you the cheapest rates
                                            because we are a switch - payment processing infrastructure</p>
                                    </div> -->
                                </div>

                            </div>
                            <div class="col-lg-5">
                                <div class="quote">
                                    <?php echo $quote; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="container">
                <div class="title">
                    <?php echo $faq_header; ?>
                </div>
                <div class="faqs">
                    <hr>
                    <?php if( have_rows('faqs') ): ?>
                        <?php 
                            $index = 1;  
                        ?>
                        <?php while( have_rows('faqs') ): the_row(); 
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
                <div class="d-flex bottom">
                    <label>Have more <br>questions?</label>
                    <a class="btn btn-primary"
                        href="<?php echo $contactus_link_url?>" target="<?php echo esc_attr($contactus_link_target); ?>"><span><?php echo esc_html($contactus_link_title); ?></span></a>
                </div>
            </div>
        </section>
        <!-- Testimonials -->
        <?php   $testimonial_tier_four = get_field('testimonial_tier_four');  ?>

        <section class="testimonials">
            <div class="container">
                <div class="tier_two" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-lg-5">
                            <?php     
                            $index = 1; 
                            if( have_rows('testimonial_images') ): ?>
                            <?php while( have_rows('testimonial_images') ): the_row(); 
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
                <div class="tier_three">
                    <div class="scroll-wrap">
                        <div class="quote-slide" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                            <?php if( have_rows('testimonial_brand') ): ?>
                                <?php while( have_rows('testimonial_brand') ): the_row(); 
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

                <div class="tier_four" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-lg-4">
                            <?php echo $testimonial_tier_four; ?>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-wrap" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1500">
                                <div class="decorate"><img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/flower-shaped.svg" alt="flower-shaped">
                                </div>
                                <form class="signup-form">
                                    <label class="title">Get started here</label>
                                    <div class="row">
                                        <input type="text" name="name" required placeholder="Business Name"
                                            class="input">
                                    </div>
                                    <div class="row">
                                        <input type="email" name="email" required placeholder="Your Email"
                                            class="input">
                                    </div>
                                    <div class="row">
                                        <input type="password" name="password" required
                                            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,10}$"
                                            minlength="8" placeholder="Password" class="input">
                                        <div class="pass-strength">
                                            <ul class="unordered">
                                                <li>At least 1 lowercase alphabetical character </li>
                                                <li>At least 1 uppercase alphabetical character</li>
                                                <li>At least 1 numeric character</li>
                                                <li>At least 1 special character e.g @,#,&</li>
                                                <li>At least 8 characters long</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button class="btn btn-submit">Sign up</button>
                                    </div>
                                </form>
                                <div class="decorate_dot"><img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/dot-pattern.svg" alt="dot pattern">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>

 