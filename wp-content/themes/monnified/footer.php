  <!-- Footer -->
  <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-12">
            <div class="brand-logo-dark">
              <a href="index.html"><img src="<?php bloginfo('template_directory') ?>/./assets/img/svg/brand-logo-dark.svg" alt="brand logo dark"></a>
            </div>
          </div>
          <div class="col-lg-10  col-md-12 link-menu">
            <div class="items">
              <h4>Product</h4>
              <?php $footer_menu = array(  
                  'theme_location' => 'footer-menu',
                  'container' => 'ul',
                  ); 
              ?> 
              <?php wp_nav_menu( $footer_menu ); ?> 
            </div>
            <div class="items" style="margin: 0em 4em 0em 0em;">
              <h4>Contact</h4>
              <ul>
                <li><a href="#" class="btn btn-link">(234) 1 631 6270</a></li>
                <li><a href="#" class="btn btn-link">12, Wole Ariyo, Lekki Phase 1, Lagos, Nigeria</a></li>
                <li><a href="#" class="btn btn-link">info@teamapt.com</a></li>
              </ul>
            </div>
            <div class="items">
              <h4>Community</h4>
              <div class="social_icons">
                <a href="https://www.facebook.com/Monnify-102435331122100/?modal=admin_todo_tour" id="soc_fb"
                  target="_blank">
                  <i class="icon">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M21.8751 0H3.12506C1.40162 0 6.10352e-05 1.40156 6.10352e-05 3.125V21.875C6.10352e-05 23.5984 1.40162 25 3.12506 25H12.5001V16.4062H9.37506V12.5H12.5001V9.375C12.5001 6.78594 14.5985 4.6875 17.1876 4.6875H20.3126V8.59375H18.7501C17.8876 8.59375 17.1876 8.5125 17.1876 9.375V12.5H21.0938L19.5313 16.4062H17.1876V25H21.8751C23.5985 25 25.0001 23.5984 25.0001 21.875V3.125C25.0001 1.40156 23.5985 0 21.8751 0Z"
                        fill="#063A4F" />
                    </svg>
                  </i>
                </a>
                <a href="https://www.instagram.com/monnifyhq/" id="soc_ig" target="_blank">
                  <i class="icon">
                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17.8543 0H8.47931C4.16525 0 0.666809 3.49844 0.666809 7.8125V17.1875C0.666809 21.5016 4.16525 25 8.47931 25H17.8543C22.1684 25 25.6668 21.5016 25.6668 17.1875V7.8125C25.6668 3.49844 22.1684 0 17.8543 0ZM23.3231 17.1875C23.3231 20.2031 20.8699 22.6562 17.8543 22.6562H8.47931C5.46368 22.6562 3.01056 20.2031 3.01056 17.1875V7.8125C3.01056 4.79688 5.46368 2.34375 8.47931 2.34375H17.8543C20.8699 2.34375 23.3231 4.79688 23.3231 7.8125V17.1875Z"
                        fill="#063A4F" />
                      <path
                        d="M13.1668 6.25C9.71525 6.25 6.91681 9.04844 6.91681 12.5C6.91681 15.9516 9.71525 18.75 13.1668 18.75C16.6184 18.75 19.4168 15.9516 19.4168 12.5C19.4168 9.04844 16.6184 6.25 13.1668 6.25ZM13.1668 16.4062C11.0137 16.4062 9.26056 14.6531 9.26056 12.5C9.26056 10.3453 11.0137 8.59375 13.1668 8.59375C15.3199 8.59375 17.0731 10.3453 17.0731 12.5C17.0731 14.6531 15.3199 16.4062 13.1668 16.4062Z"
                        fill="#063A4F" />
                      <path
                        d="M19.8855 6.6139C20.3454 6.6139 20.7183 6.24104 20.7183 5.7811C20.7183 5.32115 20.3454 4.94828 19.8855 4.94828C19.4256 4.94828 19.0527 5.32115 19.0527 5.7811C19.0527 6.24104 19.4256 6.6139 19.8855 6.6139Z"
                        fill="#063A4F" />
                    </svg>
                  </i>
                </a>
                <a href="https://twitter.com/monnify" id="soc_tw" target="_blank">
                  <i class="icon">
                    <svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M25.3333 2.74844C24.4036 3.15625 23.4129 3.42656 22.3801 3.55781C23.4426 2.92344 24.2536 1.92656 24.6348 0.725C23.6442 1.31562 22.5504 1.73281 21.3848 1.96563C20.4442 0.964063 19.1036 0.34375 17.6411 0.34375C14.8036 0.34375 12.5192 2.64688 12.5192 5.47031C12.5192 5.87656 12.5536 6.26719 12.6379 6.63906C8.377 6.43125 4.60669 4.38906 2.07388 1.27813C1.63169 2.04531 1.37231 2.92344 1.37231 3.86875C1.37231 5.64375 2.28638 7.21719 3.64888 8.12812C2.82544 8.1125 2.01763 7.87344 1.33325 7.49688C1.33325 7.5125 1.33325 7.53281 1.33325 7.55312C1.33325 10.0437 3.10981 12.1125 5.4395 12.5891C5.02231 12.7031 4.56763 12.7578 4.09575 12.7578C3.76763 12.7578 3.43638 12.7391 3.12544 12.6703C3.7895 14.7 5.67388 16.1922 7.9145 16.2406C6.17075 17.6047 3.95669 18.4266 1.55981 18.4266C1.1395 18.4266 0.736377 18.4078 0.333252 18.3563C2.60356 19.8203 5.29419 20.6562 8.19575 20.6562C17.627 20.6562 22.7833 12.8438 22.7833 6.07187C22.7833 5.84531 22.7754 5.62656 22.7645 5.40938C23.7817 4.6875 24.6364 3.78594 25.3333 2.74844Z"
                        fill="#063A4F" />
                    </svg>
                  </i>
                </a>
              </div>
              <div class="subscription">
                <p>Stay Excited, Subscribe to our Newsletter</p>
                <form>
                  <input type="text" placeholder="Your Email" class="subscribe">
                  <button class="btn btn-sub">
                    <i class="icon">
                      <svg width="21" height="13" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M20.5725 6.66609C20.6597 6.87572 20.6597 7.1121 20.5725 7.3226C20.5294 7.42698 20.4673 7.52102 20.3879 7.59952V7.60038L15.2308 12.7455C15.0626 12.9128 14.8434 12.9965 14.6234 12.9965C14.4035 12.9965 14.1835 12.9128 14.0152 12.7455C13.6797 12.4107 13.6797 11.8672 14.0152 11.5325L17.705 7.85143H0.872186C0.396844 7.85143 0.012085 7.46753 0.012085 6.99391C0.012085 6.5203 0.396844 6.13726 0.872186 6.13726H17.705L14.0152 2.45617C13.6797 2.12145 13.6797 1.57795 14.0152 1.24323C14.3508 0.908507 14.8952 0.908507 15.2308 1.24323L20.3879 6.38831C20.3879 6.38831 20.3879 6.38831 20.3879 6.38917C20.4673 6.46767 20.5294 6.56171 20.5725 6.66609Z"
                          fill="#F05822" />
                        <defs>
                          <linearGradient id="paint0_linear" x1="9.65449" y1="-4.27386" x2="16.4882" y2="14.4198"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F0AA22" />
                            <stop offset="1" stop-color="#F05822" />
                          </linearGradient>
                        </defs>
                      </svg>
                    </i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-lg-12">
            <div class="legal">
              <p class="copyright">© 2019 TeamApt, Ltd. All rights reserved</p>
              <p class="copyright">
                © 2018 TeamApt, Ltd. All rights reserved All text, graphics, audio files, code,
                downloadable material, and other works on this web site are the copyrighted works of TeamApt, Inc.
                All Rights Reserved. Any unauthorized redistribution or reproduction of any copyrighted materials on
                this web site is strictly prohibited. Other product and company names are trademarks of their respective
                owners.
                This web site contains simulated images; actual appearance may vary.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </main>

  <div class="apt-modal">
    <div class="item success">
      <i class="icon">
        <svg width="141" height="141" viewBox="0 0 141 141" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M129.25 65.0944V70.4994C129.243 83.1684 125.14 95.4957 117.555 105.643C109.969 115.79 99.3068 123.213 87.1577 126.805C75.0087 130.397 62.0239 129.966 50.14 125.575C38.2561 121.185 28.1098 113.07 21.2144 102.442C14.3189 91.8141 11.0438 79.2418 11.8774 66.6003C12.7109 53.9588 17.6086 41.9254 25.8399 32.2947C34.0712 22.6641 45.1951 15.9523 57.5526 13.1603C69.9101 10.3683 82.8391 11.6457 94.4113 16.8019"
            stroke="url(#paint0_linear)" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M129.25 23.5L70.5 82.3088L52.875 64.6838" stroke="url(#paint1_linear)" stroke-width="8"
            stroke-linecap="round" stroke-linejoin="round" />
          <defs>
            <linearGradient id="paint0_linear" x1="66.6804" y1="-39.829" x2="160.108" y2="108.916"
              gradientUnits="userSpaceOnUse">
              <stop stop-color="#F0AA22" />
              <stop offset="1" stop-color="#F05822" />
            </linearGradient>
            <linearGradient id="paint1_linear" x1="88.5797" y1="-2.29818" x2="129.272" y2="81.8391"
              gradientUnits="userSpaceOnUse">
              <stop stop-color="#F0AA22" />
              <stop offset="1" stop-color="#F05822" />
            </linearGradient>
          </defs>
        </svg>
      </i>
      <h3>Success!!!</h3>
      <p>Please check your email to activate your Monnify account</p>
      <a class="btn btn-primary modal-close" href="#">Close</a>
    </div>
    <div class="item error">
      <i class="icon">
        <svg width="149" height="100" viewBox="0 0 149 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M40.439 21.8479C54.0564 -10.1234 102.605 -5.979 110.894 27.5711C120.17 29.3473 128.261 35.4653 132.209 44.1489C159.641 56.5822 151.747 100 119.775 100H29.1898C-1.40001 100 -10.4783 59.7398 14.1909 45.5303C16.9539 32.8997 27.611 23.4267 40.439 21.8479ZM48.5305 78.4884C45.5702 81.6461 40.6364 76.9096 43.794 73.7519C51.2935 66.0551 63.9241 63.0948 74.3839 63.0948C84.8436 63.0948 97.6716 66.0551 105.171 73.7519C108.131 76.9096 103.395 81.6461 100.435 78.4884C94.1192 72.1731 83.0674 69.8049 74.3839 69.8049C65.8977 69.8049 54.6485 72.1731 48.5305 78.4884ZM94.9087 40.9912C91.3563 40.9912 88.396 43.9515 88.396 47.5039C88.396 50.8589 91.3563 53.8192 94.9087 53.8192C98.2637 53.8192 101.224 50.8589 101.224 47.5039C101.224 43.9515 98.2637 40.9912 94.9087 40.9912ZM54.0564 40.9912C57.6088 40.9912 60.5691 43.9515 60.5691 47.5039C60.5691 50.8589 57.6088 53.8192 54.0564 53.8192C50.5041 53.8192 47.7411 50.8589 47.7411 47.5039C47.7411 43.9515 50.5041 40.9912 54.0564 40.9912ZM125.893 50.6615C148.786 57.7663 143.655 91.5138 119.775 91.5138H29.1898C6.09944 91.5138 -0.018529 59.3451 21.8877 51.2536C22.4798 39.4124 32.1501 29.9394 44.1887 29.9394C44.9781 29.9394 45.7676 29.9394 46.3596 29.9394C54.4511 -1.83457 101.619 2.30986 103.592 35.2679C103.987 35.2679 104.579 35.2679 105.171 35.2679C114.841 35.2679 123.13 41.7806 125.893 50.6615Z"
            fill="#FF5C5C" />
        </svg>
      </i>
      <h3>Oops!!!</h3>
      <p>Unable to create your account at this time, try again soon</p>
      <a class="btn btn-primary modal-close" href="#">Close</a>
    </div>
  </div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php wp_footer(); ?>
<script type="text/javascript">
    var initalIndex = 0;
    carousel();
    function carousel() {
      var i;
      var slides = document.getElementsByClassName("dec-item");
      var indicator = document.getElementsByClassName("tgs");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < indicator.length; i++) {
        indicator[i].className = indicator[i].className.replace(" active", "");
      }
      initalIndex++;
      if (initalIndex > slides.length) {
        initalIndex = 1;
      }

      slides[initalIndex - 1].style.display = "block";
      indicator[initalIndex - 1].className += " active";
      setTimeout(carousel, 15000); // Change image every 8 seconds
    }

        //Operations Scroll Slider
        $(document).ready(function () {
      $(window).scroll(function (e) {
        var scrollVal = $(window).scrollTop();
        var x1 = $(".methods.mtd-easier").offset().top - 200;
        var x2 = $(".methods.mtd-faster").offset().top - 200;
        var x3 = $(".methods.mtd-cheaper").offset().top - 200;
        //console.log(scrollVal, x1, x2, x3);
        if (scrollVal >= x1 && scrollVal < x2) {
          //Easier active
          $("#transit h4").removeClass("active");
          $("#transit h4.h-easier").addClass("active");
          $("#transit .counter").text("01");
          $(".methods").removeClass("active");
          $(".methods.mtd-easier").addClass("active");

        }
        if (scrollVal >= x2 && scrollVal < x3) {
          //Faster active
          $("#transit h4").removeClass("active");
          $("#transit h4.h-faster").addClass("active");
          $("#transit .counter").text("02");

          $(".methods").removeClass("active");
          $(".methods.mtd-faster").addClass("active");

        }
        if (scrollVal >= x3) {
          //Easier active
          $("#transit h4").removeClass("active");
          $("#transit h4.h-cheaper").addClass("active");
          $("#transit .counter").text("03");

          $(".methods").removeClass("active");
          $(".methods.mtd-cheaper").addClass("active");

        }
      })
    });
</script>
</body>
</html>


