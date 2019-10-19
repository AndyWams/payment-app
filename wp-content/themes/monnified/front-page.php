<?php get_header(); ?>
<main class="home">
    <?php   $intro = get_field('intro');  ?>
    <!-- Introduction -->
    <section class="intro">
        <div class="container">
            <div class="info">
                <h2 data-aos="fade-up" data-aos-delay="200"><?php echo $intro['main-title']; ?></h2>
                <div data-aos="fade-up" data-aos-delay="400">
                    <p><?php echo $intro['sub_title']; ?></p>
                </div>
                <div data-aos="fade" data-aos-delay="800">
                    <a class="btn btn-primary"
                        href="<?php echo $intro['link']; ?>"><?php echo $intro['link_text']; ?></a>
                    <div class="tags_" data-aos="fade" data-aos-delay="1000">
                        <label class="tgs" id="tag"></label>
                        <label class="tgs yellow" id="tag"></label>
                    </div>
                </div>
                <div class="scroll_" data-aos="fade-down" data-aos-duration="600" data-aos-delay="1200">
                    <i class="icon">
                        <svg width="25" height="119" viewBox="0 0 25 119" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4"
                                d="M8.9 3.67289C8.9 3.07956 8.99 2.56956 9.17 2.14289C9.35 1.71622 9.58667 1.39289 9.88 1.17289C10.1733 0.952891 10.49 0.836224 10.83 0.822891C10.89 0.822891 10.94 0.842891 10.98 0.882891C11.02 0.922891 11.04 0.972891 11.04 1.03289V1.92289C11.04 2.00289 11.0233 2.06289 10.99 2.10289C10.9633 2.14956 10.9167 2.19289 10.85 2.23289C10.6233 2.29956 10.4333 2.45289 10.28 2.69289C10.1267 2.93289 10.05 3.25956 10.05 3.67289C10.05 4.14622 10.1267 4.50289 10.28 4.74289C10.44 4.98289 10.66 5.10289 10.94 5.10289C11.1267 5.10289 11.28 5.03956 11.4 4.91289C11.52 4.79289 11.6233 4.60956 11.71 4.36289C11.7967 4.12289 11.9033 3.76289 12.03 3.28289C12.2167 2.49622 12.4633 1.91956 12.77 1.55289C13.0833 1.19289 13.5267 1.01289 14.1 1.01289C14.4867 1.01289 14.83 1.11622 15.13 1.32289C15.43 1.53622 15.6667 1.83956 15.84 2.23289C16.0133 2.63289 16.1 3.09622 16.1 3.62289C16.1 4.16956 16.0033 4.64289 15.81 5.04289C15.6167 5.44289 15.3733 5.74622 15.08 5.95289C14.7933 6.16622 14.5067 6.27956 14.22 6.29289C14.16 6.29289 14.11 6.27289 14.07 6.23289C14.03 6.19289 14.01 6.14289 14.01 6.08289V5.15289C14.01 5.01289 14.0733 4.91622 14.2 4.86289C14.4133 4.82289 14.59 4.68956 14.73 4.46289C14.8767 4.23622 14.95 3.95622 14.95 3.62289C14.95 3.24956 14.88 2.95622 14.74 2.74289C14.6 2.52956 14.3967 2.42289 14.13 2.42289C13.9433 2.42289 13.79 2.47622 13.67 2.58289C13.55 2.68956 13.4433 2.85622 13.35 3.08289C13.2567 3.31622 13.1533 3.64956 13.04 4.08289C12.9067 4.66956 12.7567 5.13622 12.59 5.48289C12.4233 5.83622 12.2133 6.09622 11.96 6.26289C11.7067 6.42956 11.3833 6.51289 10.99 6.51289C10.5633 6.51289 10.19 6.39289 9.87 6.15289C9.55667 5.91956 9.31667 5.58622 9.15 5.15289C8.98333 4.72622 8.9 4.23289 8.9 3.67289ZM8.9 9.78891C8.9 9.05557 9.10333 8.46891 9.51 8.02891C9.91667 7.59557 10.48 7.36557 11.2 7.33891L11.6 7.32891L12 7.33891C12.72 7.36557 13.2833 7.59557 13.69 8.02891C14.0967 8.46891 14.3 9.05557 14.3 9.78891C14.3 10.3089 14.2067 10.7489 14.02 11.1089C13.8333 11.4756 13.6033 11.7456 13.33 11.9189C13.0633 12.0989 12.81 12.1956 12.57 12.2089C12.5033 12.2156 12.4467 12.1922 12.4 12.1389C12.3533 12.0922 12.33 12.0356 12.33 11.9689V11.0889C12.33 11.0222 12.3433 10.9689 12.37 10.9289C12.4033 10.8956 12.4567 10.8622 12.53 10.8289C12.79 10.7289 12.9767 10.5956 13.09 10.4289C13.2033 10.2689 13.26 10.0622 13.26 9.80891C13.26 9.46891 13.15 9.20224 12.93 9.00891C12.7167 8.81557 12.39 8.71224 11.95 8.69891L11.58 8.68891L11.25 8.69891C10.3767 8.72557 9.94 9.09557 9.94 9.80891C9.94 10.0689 9.99667 10.2789 10.11 10.4389C10.2233 10.5989 10.41 10.7289 10.67 10.8289C10.7433 10.8622 10.7933 10.8956 10.82 10.9289C10.8533 10.9689 10.87 11.0222 10.87 11.0889V11.9689C10.87 12.0356 10.8467 12.0922 10.8 12.1389C10.7533 12.1922 10.6967 12.2156 10.63 12.2089C10.3967 12.1956 10.1467 12.1022 9.88 11.9289C9.61333 11.7556 9.38333 11.4889 9.19 11.1289C8.99667 10.7689 8.9 10.3222 8.9 9.78891ZM9 13.4918C9 13.4251 9.02333 13.3685 9.07 13.3218C9.11667 13.2751 9.17333 13.2518 9.24 13.2518H13.95C14.0167 13.2518 14.0733 13.2751 14.12 13.3218C14.1733 13.3685 14.2 13.4251 14.2 13.4918V14.3018C14.2 14.3751 14.1767 14.4351 14.13 14.4818C14.0833 14.5285 14.0233 14.5518 13.95 14.5518H13.54C13.7533 14.7118 13.9167 14.9118 14.03 15.1518C14.1433 15.3985 14.2 15.6785 14.2 15.9918V16.4018C14.2 16.4751 14.1767 16.5318 14.13 16.5718C14.09 16.6185 14.0333 16.6418 13.96 16.6418H13.24C13.1733 16.6418 13.1167 16.6185 13.07 16.5718C13.0233 16.5318 13 16.4751 13 16.4018V15.6218C13 15.3085 12.91 15.0618 12.73 14.8818C12.55 14.7018 12.3033 14.6118 11.99 14.6118H9.24C9.17333 14.6118 9.11667 14.5885 9.07 14.5418C9.02333 14.4951 9 14.4351 9 14.3618V13.4918ZM8.9 19.6534C8.9 18.8734 9.1 18.27 9.5 17.8434C9.90667 17.4167 10.46 17.1867 11.16 17.1534L11.6 17.1434L12.04 17.1534C12.7333 17.1867 13.2833 17.42 13.69 17.8534C14.0967 18.2867 14.3 18.8867 14.3 19.6534C14.3 20.42 14.0967 21.02 13.69 21.4534C13.2833 21.8867 12.7333 22.12 12.04 22.1534C11.96 22.16 11.8133 22.1634 11.6 22.1634C11.3867 22.1634 11.24 22.16 11.16 22.1534C10.46 22.12 9.90667 21.89 9.5 21.4634C9.1 21.0367 8.9 20.4334 8.9 19.6534ZM9.89 19.6534C9.89 20.0067 10 20.28 10.22 20.4734C10.4467 20.6667 10.7767 20.7734 11.21 20.7934C11.2767 20.8 11.4067 20.8034 11.6 20.8034C11.7933 20.8034 11.9233 20.8 11.99 20.7934C12.4233 20.7734 12.75 20.6667 12.97 20.4734C13.1967 20.28 13.31 20.0067 13.31 19.6534C13.31 19.3 13.1967 19.0267 12.97 18.8334C12.75 18.64 12.4233 18.5334 11.99 18.5134L11.6 18.5034L11.21 18.5134C10.7767 18.5334 10.4467 18.64 10.22 18.8334C10 19.0267 9.89 19.3 9.89 19.6534ZM9 23.5213C9 23.4547 9.02333 23.398 9.07 23.3513C9.11667 23.3047 9.17333 23.2813 9.24 23.2813H15.86C15.9333 23.2813 15.99 23.3047 16.03 23.3513C16.0767 23.398 16.1 23.4547 16.1 23.5213V24.3513C16.1 24.4247 16.0767 24.4813 16.03 24.5213C15.99 24.568 15.9333 24.5913 15.86 24.5913H9.24C9.17333 24.5913 9.11667 24.568 9.07 24.5213C9.02333 24.4813 9 24.4247 9 24.3513V23.5213ZM9 26.1678C9 26.1011 9.02333 26.0445 9.07 25.9978C9.11667 25.9511 9.17333 25.9278 9.24 25.9278H15.86C15.9333 25.9278 15.99 25.9511 16.03 25.9978C16.0767 26.0445 16.1 26.1011 16.1 26.1678V26.9978C16.1 27.0711 16.0767 27.1278 16.03 27.1678C15.99 27.2145 15.9333 27.2378 15.86 27.2378H9.24C9.17333 27.2378 9.11667 27.2145 9.07 27.1678C9.02333 27.1278 9 27.0711 9 26.9978V26.1678ZM8.9 32.7795C8.9 32.1061 9.11667 31.5895 9.55 31.2295C9.98333 30.8695 10.56 30.6761 11.28 30.6495L11.61 30.6395L11.93 30.6495C12.63 30.6695 13.2 30.8595 13.64 31.2195C14.08 31.5861 14.3 32.1061 14.3 32.7795C14.3 33.4261 14.08 33.9395 13.64 34.3195H15.86C15.9333 34.3195 15.99 34.3428 16.03 34.3895C16.0767 34.4361 16.1 34.4928 16.1 34.5595V35.4095C16.1 35.4828 16.0767 35.5395 16.03 35.5795C15.99 35.6261 15.9333 35.6495 15.86 35.6495H9.24C9.17333 35.6495 9.11667 35.6261 9.07 35.5795C9.02333 35.5395 9 35.4828 9 35.4095V34.6195C9 34.5528 9.02333 34.4961 9.07 34.4495C9.11667 34.4028 9.17333 34.3795 9.24 34.3795H9.61C9.13667 33.9995 8.9 33.4661 8.9 32.7795ZM9.97 33.1495C9.97 33.5361 10.0933 33.8228 10.34 34.0095C10.5867 34.1961 10.89 34.2995 11.25 34.3195C11.33 34.3261 11.46 34.3295 11.64 34.3295C11.8133 34.3295 11.94 34.3261 12.02 34.3195C12.3533 34.3061 12.6367 34.1995 12.87 33.9995C13.11 33.8061 13.23 33.5228 13.23 33.1495C13.23 32.4295 12.7867 32.0461 11.9 31.9995L11.6 31.9895L11.3 31.9995C10.4133 32.0461 9.97 32.4295 9.97 33.1495ZM8.9 39.2823C8.9 38.5023 9.1 37.8989 9.5 37.4723C9.90667 37.0456 10.46 36.8156 11.16 36.7823L11.6 36.7723L12.04 36.7823C12.7333 36.8156 13.2833 37.0489 13.69 37.4823C14.0967 37.9156 14.3 38.5156 14.3 39.2823C14.3 40.0489 14.0967 40.6489 13.69 41.0823C13.2833 41.5156 12.7333 41.7489 12.04 41.7823C11.96 41.7889 11.8133 41.7923 11.6 41.7923C11.3867 41.7923 11.24 41.7889 11.16 41.7823C10.46 41.7489 9.90667 41.5189 9.5 41.0923C9.1 40.6656 8.9 40.0623 8.9 39.2823ZM9.89 39.2823C9.89 39.6356 10 39.9089 10.22 40.1023C10.4467 40.2956 10.7767 40.4023 11.21 40.4223C11.2767 40.4289 11.4067 40.4323 11.6 40.4323C11.7933 40.4323 11.9233 40.4289 11.99 40.4223C12.4233 40.4023 12.75 40.2956 12.97 40.1023C13.1967 39.9089 13.31 39.6356 13.31 39.2823C13.31 38.9289 13.1967 38.6556 12.97 38.4623C12.75 38.2689 12.4233 38.1623 11.99 38.1423L11.6 38.1323L11.21 38.1423C10.7767 38.1623 10.4467 38.2689 10.22 38.4623C10 38.6556 9.89 38.9289 9.89 39.2823ZM9 44.1738C9 44.0871 9.02 44.0171 9.06 43.9638C9.10667 43.9171 9.17 43.8771 9.25 43.8438L13.89 42.4138C13.91 42.4071 13.94 42.4038 13.98 42.4038C14.04 42.4038 14.09 42.4238 14.13 42.4638C14.1767 42.5104 14.2 42.5604 14.2 42.6138V43.3538C14.2 43.4271 14.18 43.4871 14.14 43.5338C14.1 43.5804 14.0567 43.6104 14.01 43.6238L10.7 44.6038L13.98 45.6438C14.04 45.6638 14.09 45.6971 14.13 45.7438C14.1767 45.7971 14.2 45.8638 14.2 45.9438V46.4438C14.2 46.5238 14.1767 46.5871 14.13 46.6338C14.09 46.6871 14.04 46.7238 13.98 46.7438L10.7 47.7838L14.01 48.7638C14.0567 48.7704 14.1 48.7971 14.14 48.8438C14.18 48.8971 14.2 48.9571 14.2 49.0238V49.7638C14.2 49.8238 14.1767 49.8738 14.13 49.9138C14.09 49.9604 14.04 49.9838 13.98 49.9838L13.89 49.9638L9.25 48.5338C9.17 48.5071 9.10667 48.4671 9.06 48.4138C9.02 48.3671 9 48.3004 9 48.2138V47.5638C9 47.3904 9.08333 47.2804 9.25 47.2337L12.41 46.1938L9.25 45.1538C9.08333 45.1004 9 44.9871 9 44.8138V44.1738ZM9 51.1969C9 51.1302 9.02333 51.0735 9.07 51.0269C9.11667 50.9802 9.17333 50.9569 9.24 50.9569H13.96C14.0267 50.9569 14.0833 50.9802 14.13 51.0269C14.1767 51.0735 14.2 51.1302 14.2 51.1969V52.0169C14.2 52.0835 14.1767 52.1402 14.13 52.1869C14.0833 52.2335 14.0267 52.2569 13.96 52.2569H13.55C14.05 52.6502 14.3 53.2069 14.3 53.9269C14.3 54.5402 14.0967 55.0269 13.69 55.3869C13.29 55.7469 12.7433 55.9269 12.05 55.9269H9.24C9.17333 55.9269 9.11667 55.9035 9.07 55.8569C9.02333 55.8169 9 55.7602 9 55.6869V54.8069C9 54.7402 9.02333 54.6835 9.07 54.6369C9.11667 54.5902 9.17333 54.5669 9.24 54.5669H11.99C12.3833 54.5669 12.6867 54.4702 12.9 54.2769C13.12 54.0902 13.23 53.8169 13.23 53.4569C13.23 53.1035 13.12 52.8235 12.9 52.6169C12.68 52.4169 12.3767 52.3169 11.99 52.3169H9.24C9.17333 52.3169 9.11667 52.2935 9.07 52.2469C9.02333 52.2069 9 52.1502 9 52.0769V51.1969Z"
                                fill="#063A4F" />
                            <rect x="1" y="75" width="23" height="43" rx="11.5" stroke="#063A4F" stroke-width="2" />
                            <rect x="10" y="83" width="4" height="10" rx="2" fill="#063A4F" />
                        </svg>
                    </i>
                </div>
            </div>
        </div>
        <div class="decoration">
                <div class="dec-slide">
                    <?php  if( have_rows('decoration') ): ?>
                        <?php while( have_rows('decoration') ): the_row(); 
                            $shutter_image = get_sub_field('shutter-images');
                            $shutter_shadow = get_sub_field('shutter-shadow');
                        ?>  
                        <div class="dec-item">
                            <img src="<?php echo $shutter_image['url']; ?>" alt="<?php echo $shutter_image['alt']; ?>" class="dec-image animated fadeInX delay-x1s" />
                            <img src="<?php echo $shutter_shadow; ?>"  class="dec-shadow  animated fadeIn delay-x2s" />
                        </div>
                    <?php endwhile; ?>
                    <?php  endif; ?>
                </div>
          
            <img src="<?php bloginfo('template_directory') ?>/./assets/img/png/dot-pattern.png" class="dec-dots"
                data-aos="fade-up" data-aos-duration="400" data-aos-delay="800" />
            <img src="<?php bloginfo('template_directory') ?>/./assets/img/png/logo-art.png" class="dec-art"
                data-aos="fade" data-aos-duration="400" data-aos-delay="500" />
        </div>
        <div class="mb-decoration">
            <div class="item-1">
                <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/img_1.svg" alt="banner"
                    data-aos="fade-in" data-aos-delay="300" data-aos-duration="1000" />
            </div>
        </div>
    </section>
    <?php   $features_tier_one = get_field('features_tier_one');  ?>
    <?php   $features_tier_two_left_cont = get_field('features_tier_two_left_content');  ?>
    <?php   $features_tier_three_left_cont = get_field('features_tier_three_left_content');  ?>
    <!-- Features -->
    <section class="features" id="feat">
        <div class="container">
            <div class="tier_one" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-5">
                        <?php   echo $features_tier_one['left_content'];  ?>
                    </div>
                    <div class="col-lg-7" data-aos="fade-up">
                        <?php   echo $features_tier_one['right_side_content'];  ?>
                    </div>
                </div>
            </div>
            <div class="tier_two" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-5">
                        <?php echo $features_tier_two_left_cont; ?>
                    </div>
                    <div class="col-lg-7">
                        <?php  if( have_rows('features_tier_two_right_content') ): ?>
                        <div class="row methods">
                            <?php while( have_rows('features_tier_two_right_content') ): the_row(); 
                                $label_title = get_sub_field('label_title');
                                $main_content = get_sub_field('content');
                                $link = get_sub_field('link');
                                $icon = get_sub_field('icon');
                            ?>
                            <div class="col-lg-12">
                                <div class="card" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                                    <div class="icon_wrap">
                                        <div class="icon"><img src="<?php echo $icon; ?>" ></div>
                                    </div>
                                    <div class="content_">
                                        <label><?php echo $label_title; ?></label>
                                        <?php echo $main_content ?>
                                        <?php
                                        if($link): ?>
                                            <label class="special">
                                                <a href="<?php echo $link; ?>" target="_blank" class="btn btn-primary">
                                                    <span>Goto API Docs</span>
                                                </a>
                                            </label>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php  endif; ?>
                    </div>
                </div>
            </div>
            <div class="tier_three" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-5">
                        <?php echo $features_tier_three_left_cont; ?>
                    </div>
                    <div class="col-lg-7">
                        <?php  if( have_rows('features_tier_three_right_content') ): ?>
                        <div class="row methods" data-aos="fade-up">
                            <?php while( have_rows('features_tier_three_right_content') ): the_row(); 
                                $content = get_sub_field('content');
                                $icon = get_sub_field('icon');
                            ?>
                            <div class="col-lg-6">
                                <div class="stacked" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
                                    <div class="top">
                                        <div class="icon">
                                           <div class="icon"><img src="<?php echo $icon; ?>" ></div>
                                        </div>
                                    </div>
                                    <?php echo $content ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php  endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php   $operations_tier_one_left_cont = get_field('operations_tier_one_left_content');  ?>
    <?php   $operations_tier_two_left_cont = get_field('operations_tier_two_left_content');  ?>
    <!-- Operations -->
    <section class="operations">
        <div class="t_curve_3">
            <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/triangle_transparent.svg">
        </div>
        <div class="t_curve_1">
            <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/Rectangle 2.svg">
        </div>
        <div class="container">
            <div class="tier_one">
                <div class="row">
                    <div class="col-lg-5" id="transit">
                        <div>
                            <label class="counter">01</label>
                            <?php echo $operations_tier_one_left_cont; ?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <?php  if( have_rows('operations_tier_one_right_content_cue_1') ): ?>
                            <div class="row methods mtd-easier active" data-aos="fade-up" data-aos-delay="200">
                                <div class="h-sub">
                                    <label class="counter">01</label>
                                    <h4>Faster Growth</h4>
                                </div>
                                <?php while( have_rows('operations_tier_one_right_content_cue_1') ): the_row(); 
                                    $label_title = get_sub_field('label_title');
                                    $main_content = get_sub_field('content');
                                    $icon = get_sub_field('icon');
                                ?>
                                <div class="col-lg-12">
                                    <div class="card act">
                                        <div class="icon_wrap">
                                        <div class="icon"><img src="<?php echo $icon; ?>" ></div>
                                        </div>
                                        <div class="content_">
                                            <label><?php echo $label_title; ?></label>
                                            <?php echo $main_content ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        <?php  endif; ?>

                        <?php  if( have_rows('operations_tier_one_right_content_cue_2') ): ?>
                            <div class="row methods mtd-faster" data-aos="fade-up" data-aos-delay="200">
                                <div class="h-sub">
                                    <label class="counter">02</label>
                                    <h4>Trusted Partners</h4>
                                </div>
                                <?php while( have_rows('operations_tier_one_right_content_cue_2') ): the_row(); 
                                    $label_title = get_sub_field('label_title');
                                    $main_content = get_sub_field('content');
                                    $icon = get_sub_field('icon');
                                ?>
                                <div class="col-lg-12">
                                    <div class="card act">
                                        <div class="icon_wrap">
                                        <div class="icon"><img src="<?php echo $icon; ?>" ></div>
                                        </div>
                                        <div class="content_">
                                            <label><?php echo $label_title; ?></label>
                                            <?php echo $main_content ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        <?php  endif; ?>

                        <?php  if( have_rows('operations_tier_one_right_content_cue_3') ): ?>
                            <div class="row methods mtd-cheaper" data-aos="fade-up" data-aos-delay="200">
                                <div class="h-sub">
                                    <label class="counter">03</label>
                                    <h4>Reliable</h4>
                                </div>
                                <?php while( have_rows('operations_tier_one_right_content_cue_3') ): the_row(); 
                                    $label_title = get_sub_field('label_title');
                                    $main_content = get_sub_field('content');
                                    $icon = get_sub_field('icon');
                                ?>
                                <div class="col-lg-12">
                                    <div class="card act">
                                        <div class="icon_wrap">
                                        <div class="icon"><img src="<?php echo $icon; ?>" ></div>
                                            <?php 
                                            // $icon_one = get_sub_field("icon");
                                            // $icon_two = get_sub_field("icon");
                                            // if($icon_one == 'Icon-One') {
                                            //     $rendered_icon = get_template_directory_uri(). '/assets/img/svg/icon-success.svg';
                                            // } else if($icon_two == 'Icon-Two') {
                                            //     $rendered_icon  = get_template_directory_uri(). '/assets/img/svg/icon-operation.svg';
                                            // } 
                                            ?>
                                        </div>
                                        <div class="content_">
                                            <label><?php echo $label_title; ?></label>
                                            <?php echo $main_content ?>
                                        </div>
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
                        <div class="dstick">
                            <?php echo $operations_tier_two_left_cont; ?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <?php  if( have_rows('operations_tier_two_right_content') ): ?>
                        <div class="row">
                            <?php while( have_rows('operations_tier_two_right_content') ): the_row(); 
                                $label_title = get_sub_field('label_title');
                                $main_content = get_sub_field('content');
                                $icon = get_sub_field('icon');
                            ?>
                            <div class="col-lg-6">
                                <div class="item card active" data-aos="fade-up" data-aos-delay="400"
                                    data-aos-duration="1000">
                                    <div class="top">
                                       <img src="<?php echo $icon; ?>">
                                    </div>
                                    <div class="bottom">
                                        <label><?php echo $label_title; ?></label>
                                        <?php echo $main_content ?>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php  endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="t_curve_2">
            <img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/Rectangle 2.1.svg">
        </div>
    </section>

    <?php   $testimonials_tier_one_cont = get_field('testimonials_tier_one');  ?>
    <?php   $testimonials_tier_four_cont = get_field('testimonials_tier_four_left_content');  ?>
    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="tier_one" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="row">
                    <div class="col-lg-7">
                        <?php echo $testimonials_tier_one_cont; ?>
                    </div>
                    <div class="col-lg-5"></div>
                </div>
                <section>
                    <?php  if( have_rows('testimonials_tier_one_slide') ): ?>
                    <div class="slyck-slide">
                        <?php while( have_rows('testimonials_tier_one_slide') ): the_row();
                            $icon = get_sub_field('slides');
                         ?>
                            <div class="item card"><img src="<?php echo $icon; ?>" /></div>">
                        <?php endwhile; ?>
                    </div>
                    <?php  endif; ?>
                </section>
            </div>
            <div class="tier_two" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="row">
                    <div class="col-lg-5">
                        <?php     
                        $index = 1; 
                        if( have_rows('testimonials_tier_two_images') ): ?>
                        <?php while( have_rows('testimonials_tier_two_images') ): the_row(); 
                            $image_slides = get_sub_field('image-slides'); 

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
                        <?php if( have_rows('testimonials_tier_two_content') ): ?>
                            <?php 
                                $index = 1;  
                            ?>
                            <?php while( have_rows('testimonials_tier_two_content') ): the_row(); 
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
                    <?php if( have_rows('testimonials_tier_three_brand_logo') ): ?>
                      
                        <?php while( have_rows('testimonials_tier_three_brand_logo') ): the_row(); 
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
                        <?php echo $testimonials_tier_four_cont; ?>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-wrap" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1500">
                            <div class="decorate"><img
                                    src="<?php bloginfo('template_directory') ?>/./assets/img/svg/flower-shaped.svg"
                                    alt="flower-shaped"></div>
                            <form class="signup-form">
                                <label class="title">Get started here</label>
                                <div class="row">
                                    <input type="text" name="name" required placeholder="Business Name" class="input">
                                </div>
                                <div class="row">
                                    <input type="email" name="email" required placeholder="Your Email" class="input">
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
                            <div class="decorate_dot"><img
                                    src="<?php bloginfo('template_directory') ?>/./assets/img/svg/dot-pattern.svg"
                                    alt="dot pattern"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>