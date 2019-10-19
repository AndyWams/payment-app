<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="title" content="<?php  the_title();  ?>">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="">
  <meta name="author" content="Monnify">
  <title><?php  the_title();  ?></title>
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Rubik:400,500,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/assets/img/png/favicon.png" type="image/x-icon">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body class="page">
  <header class="header" data-aos="fade-down" data-aos-duration="400">
    <div class="container">
      <div class="logo">
        <a href="/monnify/">
          <img class="large" src="<?php bloginfo('template_directory') ?>/assets/img/svg/site-logo.svg" alt="Monnify" />
          <img class="small" src="<?php bloginfo('template_directory') ?>/assets/img/svg/site-icon.svg" alt="monnify" />
        </a>
      </div>
      <nav class="nav">
        <?php $defaults = array(  
          'theme_location' => 'main-menu',
          'container' => 'ul',
          'link_before' => '<span class="title"><span>',
          'link_after' => '</span>',
          'walker'  => new Walker_Sublevel_
        ); ?> 
         <?php wp_nav_menu( $defaults ); ?> 
      </nav>
      <div class="actions">
        <a class="btn btn-secondary" href="http://teamapt.com/monnify">Merchant Login</a>
        <a class="btn btn-primary" href="http://teamapt.com/monnify">Get Started</a>
      </div>
      <div class="menu-trigger">
        <a href="#">
          <span>Menu</span>
          <i class="icon">
            <svg width="25" height="14" viewBox="0 0 25 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 1C0 0.447715 0.447715 0 1 0H24C24.5523 0 25 0.447715 25 1C25 1.55228 24.5523 2 24 2H1C0.447715 2 0 1.55228 0 1Z"
                fill="#00B8C2" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 12.0263C0 11.474 0.447715 11.0263 1 11.0263H24C24.5523 11.0263 25 11.474 25 12.0263C25 12.5786 24.5523 13.0263 24 13.0263H1C0.447715 13.0263 0 12.5786 0 12.0263Z"
                fill="#00B8C2" />
            </svg>
          </i>
        </a>
      </div>
    </div>
  </header>
  <div class="sidenav animated fadeIn">
    <div class="close">
      <a>
        <i class="icon">
          <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M11.6328 9.9945L19.7328 1.8945C19.9149 1.68194 20.01 1.40852 19.9992 1.12888C19.9884 0.849242 19.8724 0.583977 19.6746 0.386094C19.4767 0.188211 19.2114 0.0722855 18.9318 0.0614842C18.6521 0.050683 18.3787 0.145801 18.1662 0.327831L10.0662 8.42783L1.96616 0.316719C1.7536 0.13469 1.48019 0.0395727 1.20055 0.0503739C0.920905 0.0611752 0.65564 0.1771 0.457757 0.374982C0.259874 0.572865 0.143948 0.838131 0.133147 1.11777C0.122346 1.39741 0.217464 1.67083 0.399494 1.88339L8.49949 9.9945L0.388382 18.0945C0.272069 18.1941 0.177602 18.3167 0.11091 18.4545C0.044217 18.5924 0.00673853 18.7425 0.000827977 18.8955C-0.00508257 19.0486 0.0207018 19.2012 0.0765624 19.3437C0.132423 19.4863 0.217154 19.6158 0.325438 19.7241C0.433721 19.8324 0.563218 19.9171 0.705801 19.973C0.848384 20.0288 1.00098 20.0546 1.154 20.0487C1.30702 20.0428 1.45717 20.0053 1.59502 19.9386C1.73287 19.8719 1.85544 19.7775 1.95505 19.6612L10.0662 11.5612L18.1662 19.6612C18.3787 19.8432 18.6521 19.9383 18.9318 19.9275C19.2114 19.9167 19.4767 19.8008 19.6746 19.6029C19.8724 19.405 19.9884 19.1398 19.9992 18.8601C20.01 18.5805 19.9149 18.3071 19.7328 18.0945L11.6328 9.9945Z"
              fill="#F9FBFD" />
          </svg>
        </i>
      </a>
    </div>
    <div class="wrapper">
        <?php $defaults = array(  
          'theme_location' => 'main-menu',
          'container' => 'ul',
          'menu_class' => 'menu',
          'link_before' => '<span class="title"><span>',
          'link_after' => '</span>',
          'walker'  => new Walker_Sublevel_
        ); ?> 
         <?php wp_nav_menu( $defaults ); ?> 
      <!-- <ul class="menu">
        <li class="has-children">
          <a href="#" class="btn btn-link">Solutions
            <i class="icon">
              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                  d="M6 12C2.6915 12 0 9.3085 0 6C0 2.692 2.6915 0 6 0C9.3085 0 12 2.692 12 6C12 9.3085 9.3085 12 6 12ZM6 1C3.243 1 1 3.243 1 6C1 8.757 3.243 11 6 11C8.757 11 11 8.757 11 6C11 3.243 8.757 1 6 1ZM6.3535 7.3535C6.256 7.451 6.128 7.5 6 7.5C5.872 7.5 5.744 7.451 5.6465 7.3535L3.6465 5.3535C3.451 5.1585 3.451 4.8415 3.6465 4.6465C3.842 4.451 4.158 4.451 4.3535 4.6465L6 6.293L7.6465 4.6465C7.842 4.451 8.158 4.451 8.3535 4.6465C8.549 4.8415 8.549 5.1585 8.3535 5.3535L6.3535 7.3535Z"
                  fill="#063A4F" />
              </svg>
            </i>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="solutions/01-betting.html">
                <span class="title"> Betting Companies</span>
              </a>
            </li>
            <li>
              <a href="solutions/02-fcmgs.html">
                <span class="title"> FCMGs
                  <span class="caption">
                    Distributors, 0il & Gas Stations, Retail Stores etc...</span>
                </span>

              </a>
            </li>
            <li>
              <a href="solutions/03-wallet.html">
                <span class="title">
                  Wallet, Savings, Loans & Investments</span>
              </a>
            </li>
            <li>
              <a href="solutions/04-government.html">
                <span class="title">Governments</span>
              </a>
            </li>
            <li>
              <a href="solutions/05-religious.html">
                <span class="title">Religious Organizations</span>
              </a>
            </li>
            <li>
              <a href="solutions/06-education.html">
                <span class="title">Educational Institutions</span>
              </a>
            </li>
            <li>
              <a href="solutions/07-retailer.html">
                <span class="title">Supermarket & Retailers</span>
              </a>
            </li>
            <li>
              <a href="solutions/08-airline.html">
                <span class="title">Airlines</span>
              </a>
            </li>
            <li>
              <a href="solutions/09-logistics.html">
                <span class="title">Logistics</span>
              </a>
            </li>
            <li>
              <a href="solutions/10-electricity.html">
                <span class="title">Electricity Companies</span>
              </a>
            </li>
            <li>
              <a href="solutions/11-pension.html">
                <span class="title">Pension & Insurance</span>
              </a>
            </li>
          </ul>
        </li>
        <li><a href="pricing.html" class="btn btn-link">Pricing</a></li>
        <li><a href="http://teamapt.com/monnify" target="_blank" class="btn btn-link">Documentation</a></li>
        <li><a href="contact.html" class="btn btn-link">Contact</a></li>
      </ul> -->
    </div>
    <section>
      <div class="actions_">
        <a class="btn btn-secondary" href="http://teamapt.com/monnify">Merchant Login</a>
        <a class="btn btn-primary" href="http://teamapt.com/monnify">Get Started</a>
      </div>
    </section>
  </div>