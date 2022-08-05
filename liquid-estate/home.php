
<?php
/*
Template Name: home
*/

?>

<?php get_header(); ?>

<main class="main">

<section class="theFastestWay">
  <div class="container">
    <div class="row">
      <h1 class="title-h1 col-lg-6 col-11 col-sm-8">The Fastest way to become a global landlord</h1>
      <h2 class="subtitle-h1 col-lg-8  col-11">Invest in real estate with as little as 10$, Transactions using the blockchain, Earn rent immediately, Real legal ownership, Sell any time</h2>
    </div>
  </div>
</section> 

<section class="section uneilingANewDimension ">
  <div class="container">
    <div class="row">
      <div class="content-text">
        <h2 class="title-h2">Uneiling A New Dimension To Real Estate Investment</h2>
        <h3 class="subtitle-h2 col-lg-8">Finally, investors from all over the world can participate in the global real estate market via fractional, tokenized ownership that is compliant and running on the blockchain.</h3>  
      </div>
      <ul class="list">

        <?php
            global $post;

            $myposts = get_posts( array(
                'post_type' => 'home-page',
                'numberposts' => -1,
                'category_name'    => "Benefits",
            ) );

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                    <li class="list-item">
                        <div class="list-item-icon">
                           

                            <img src="<?php the_field('benefits_img'); ?>" alt="benefits">
                        </div>
                        <div class="list-item-title"><?php the_field('benefits_title'); ?></div>
                    </li>
                    <?php 
                }
            }

            wp_reset_postdata(); 
        ?>

        
      </ul>
    </div>
  </div>
</section>

<section class="section theProblem">
  <div class="container">
    <div class="row">

      <div class="content-img col-md-6 col-12 col-sm-8">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/compresed/problemPict.png" alt="Problem">
      </div>

      <div class="content-text col-md-6 col-12 col-sm-12">
        <div class="title-h2 ">The Problem</div>
      <h3 class="subtitle-h2 ">While investing in traditional real estate is relatively safer and more stable than investing in stocks, it comes with some inconvenient downsides. The traditional way of investing in real estate is a very bureaucratic, time-consuming, and expensive process. Moreover, selling a property can be difficult as it takes time to find a buyer, and ownership changes are often associated with high fees. Real estate assets are considered iliquid assets.</h3>
      </div>
    </div>
  </div>
</section>

<section class="section theSolution">
  <div class="container">
    <div class="row">

      <div class="content-text col-md-6 col-12 col-sm-12">
        <div class="title-h2 ">The Solution</div>
        <h3 class="subtitle-h2 ">Liquid Estate proposes an innovative solution to eliminate all these barriers by harnessing the power of blockchain. Our team of specialists will pick real estate assets with good ROI, tokenize and fund them via crowd sale on our platform, therefore creating liquidity in a traditionally illiquid market. Compliant and tokenized real-life assets that generate dividends can now be fractionally owned and traded freely, hence democratizing a traditionally resource-intensive class of assets.</h3>
      </div>

      <div class="content-img col-md-6 col-12 col-sm-8">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/compresed/slutionPict.png" alt="Problem">
      </div>
      
    </div>
  </div>
</section>

<section class="section howItWorks">
  <div class="container">
    <div class="row">

      <div class="content-img col-md-5 col-12 col-sm-8">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/compresed/howItWorksPict.png" alt="Problem">
      </div>  

      <div class="content-text col-md-6 col-12 col-sm-12">
        <div class="title-h2 ">How it works</div>
        <h3 class="subtitle-h2 ">
          With Liquid Estate, you can acquire fractional shares in real estate. Each property listed for sale on our platform will be tokenized in tokens of $1, with a minimum buy of 100. <br><br> As a result, real estate investing will be a democratic procedure, allowing people with limited resources to invest in attractive deals without the need for great capital.  
        </h3>

        <h2 class="ps-title">Eg. you own 5% of the property, you get 5% of the rent value. It’s that simple!</h2>
        
      </div>

    </div>
  </div>
</section>

<section class="section decisions">
  <div class="container">
    <div class="row">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/compresed/decisionsPict.png" alt="Your Money, Your Decisions" class="decisions-bg">
      <div class="content-text">
        <h2 class="title-h2">Your Money, Your Decisions</h2>
        <h3 class="subtitle-h2 col-md-8">A DAO is created for every property, and all property decisions are put to the vote by owners through our governance structure. These choices include everything from addressing repair requests to choosing the tenant. A supermajority (60 percent or more) decides which decisions win, and those results are automatically forwarded to the property manager to carry through</h3>
      </div>
    </div>
  </div>
</section>

<section class="section real-LifeMeets">
  <div class="container">
    <div class="row">
      <div class="container-text">
        <h2 class="title-h2">Real-Life Meets Metaverse</h2>
        <h3 class="subtitle-h2 col-md-8">Owning a real-life property gives you a sense of ownership, while just looking at some numbers in an app doesn’t. Can you imagine being able to virtually access your property from anywhere in the world straight from your phone or computer?</h3>  
      </div>

      <div class="content-video ">
        <img  class="content-video-item" src="<?php bloginfo('template_url'); ?>/assets/video/GIF.gif" alt="gif">
        <!-- <video autoplay muted loop controls preload="auto" class="content-video-item" style="object-fit: cover">
          <source  src="../neverlend/Animation.mp4" type="gif">
        </video>  -->
      </div>
    </div>  
  </div>
</section>

<section class="section perfectInvestment">
  <div class="container">
    <div class="row">
      <div class="content-text">
        <h2 class="title-h2">Find Your Perfect Investment</h2>
      </div>

      <div class="content-property">

      <?php
            global $post;

            $myposts = get_posts( array(
                'post_type' => 'home-page',
                'numberposts' => -1,
                'category_name'    => "perfect-investment",
            ) );

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                            <div class="content-property-item">
                                <div class="content-property-item-type">
                                    <div class="content-property-item-type-icon">
                                    <img src="<?php the_field('investment_type_icon'); ?>"  alt="Industrial">
                                    </div>
                                    <p class="content-property-item-type-title"><?php the_field('investment_type_title'); ?></p>
                                </div>
                                <img src="<?php the_field('investment_picture'); ?>" alt="" class="content-property-item-pict">
                                <div class="content-property-item-title">
                                    <div class="content-property-item-title-LE"><?php the_field('investment_le_numder'); ?></div>
                                    <div class="content-property-item-title-name"><?php the_field('investment_title'); ?></div>
                                </div>
                                <div class="content-property-item-location">
                                    <div class="content-property-item-location-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/location.svg" alt="location">
                                    </div>
                                    <p class="content-property-item-location-title"><?php the_field('investment_location'); ?></p>
                                </div>
                                <hr>
                                <div class="content-property-item-info">
                                    <div class="content-property-item-info-investment">
                                    <p class="content-property-item-info-investment-title">Total Investment</p>
                                    <p class="content-property-item-info-investment-value"><?php the_field('investment_total_investment'); ?></p>
                                    </div>
                                    <div class="content-property-item-info-price">
                                    <p class="content-property-item-info-price-title">Token Price</p>
                                    <p class="content-property-item-info-price-value"><?php the_field('investment_token_price'); ?></p>
                                    </div>
                                    <div class="content-property-item-info-mounthlyRent">
                                    <p class="content-property-item-info-mounthlyRent-title">Net Monthly Rent</p>
                                    <p class="content-property-item-info-mounthlyRent-value"><?php the_field('investment__net_monthly_rent'); ?></p>
                                    </div>
                                    <div class="content-property-item-info-expectedIncome">
                                    <p class="content-property-item-info-expectedIncome-title">Expected Income</p>
                                    <p class="content-property-item-info-expectedIncome-value"><?php the_field('investment_expected_income'); ?></p>
                                    </div>
                                </div>
                                
                                <a href="<?php the_field('investment_btn_link'); ?>">
                                    <button class="btn-blue">View Details</button>
                                </a>
                            </div>
                    <?php 
                }
            }

            wp_reset_postdata(); 
        ?>

        
      </div>
      <a href="#" class="btn-aBitBlue-link btn-link">
        <button class="btn-aBitBlue">
        <div class="btn-title">View All Properties</div>
        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/blue-arrow.svg" alt="blue-arrow">
      </button>
      </a>
      

      <div class="in-depthUnderstanding">
        <div class="in-depthUnderstanding-bg">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/compresed/viewWhitepaperPict.png" alt="Get an in-depth understanding " class="in-depthUnderstanding-bg-pict">
        </div>
        <div class="in-depthUnderstanding-content">
          <p class="in-depthUnderstanding-content-title">Get an in-depth understanding of the Liquid Estate ecosystem.</p>
          

          <a href="#" class="btn-white-link btn-link">
            <button class="btn-white">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Word file.svg" alt="file">
              <div class="btn-title">View All Properties</div>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/blue-arrow.svg" alt="blue-arrow">
            </button>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>


<section class="section roadmap">
  <div class="container">
    <div class="row">

      <div class="content-text">
        <h3 class="title-h2">Roadmap</h3>
      </div>
      <div class="roadmap-bg">

        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Roadmap-desc.svg" class="roadmap-bg-desc" alt="Roadmap">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Roadmap-tab.svg" class="roadmap-bg-tablet" alt="Roadmap">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Roadmap-mob.svg" class="roadmap-bg-mobile" alt="Roadmap">

      </div>

      <div class="roadmap-content">
        <ul class="roadmap-content-list">
          <li class="roadmap-content-list-item item-past">Community Gathering</li>
          <li class="roadmap-content-list-item item-past">Research and Development</li>
          <li class="roadmap-content-list-item item-past">Whitepaper Release</li>
          <li class="roadmap-content-list-item item-past">Marketing Site Launch</li>
        </ul>

        <ul class="roadmap-content-list">
          <li class="roadmap-content-list-item item-past">Incorporation</li>
          <li class="roadmap-content-list-item item-past">Token Sale</li>
          <li class="roadmap-content-list-item item-past">Start Developing the Platform</li>
          <li class="roadmap-content-list-item item-past">Setting Up Legal Infrastructure</li>
        </ul>

        <ul class="roadmap-content-list">
          <li class="roadmap-content-list-item item-presently">Token Distribution</li>
          <li class="roadmap-content-list-item item-presently">Setting</li>
          <li class="roadmap-content-list-item item-presently">Crowdsale of the First Property(off-blockchain MVP/SAFT)</li>
        </ul>

        <ul class="roadmap-content-list">
          <li class="roadmap-content-list-item item-future">Beta Platform Launch</li>
          <li class="roadmap-content-list-item item-future">Testing</li>
          <li class="roadmap-content-list-item item-future">Smart Contracts Audit</li>
        </ul>

        <ul class="roadmap-content-list">
          <li class="roadmap-content-list-item item-future">Platform Launch</li>
          <li class="roadmap-content-list-item item-future">Deployment of LE Tokens onthe Blockchain</li>
          <li class="roadmap-content-list-item item-future">Secondary Product Launch</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section joinOurCommunity">
  <div class="content-text">
    <h3 class="title-h2">Join Our Community</h3>
  </div>

  <ul class="content-list">
        <?php
            global $post;

            $myposts = get_posts( array(
                'post_type' => 'home-page',
                'numberposts' => -1,
                'category_name'    => "community",
            ) );

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                            
                            <li class="content-list-item">
                                <div class="content-list-item-icon">
                                
                                    <img src="<?php the_field('community_icon'); ?>" alt="<?php the_field('community_icon_title'); ?>">
                                </div>
                                <div class="content-list-item-brand" style="color: <?php the_field('community_icon_title_color'); ?>;"><?php the_field('community_icon_title'); ?></div>
                                <div class="content-list-item-btn">
                                    <a href="<?php the_field('community_button_link'); ?>" class="btn-join-link btn-link">
                                    <button class="btn-join">
                                        <p class="btn-join-title"><?php the_field('community_button_title'); ?></p>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/black-arrow.svg" alt="black-arrow">
                                        

                                    </button>
                                    </a>
                                </div>
                            </li>
                            
                    <?php 
                }
            }

            wp_reset_postdata(); 
        ?>

    <!-- <li class="content-list-item">
      <div class="content-list-item-icon">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Discord.svg" alt="">
      </div>
      <div class="content-list-item-brand" style="color: #7289DA;">Discord</div>
      <div class="content-list-item-btn">
        <a href="#" class="btn-join-link btn-link">
          <button class="btn-join">
            <p class="btn-join-title">Join Server</p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/black-arrow.svg" alt="black-arrow">
          </button>
        </a>
      </div>
    </li>

    <li class="content-list-item">
      <div class="content-list-item-icon">
       
        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/telegram.svg" alt="Telegram">
      </div>
      <div class="content-list-item-brand" style="color: #1E96C8;">Telegram</div>
      <div class="content-list-item-btn">
        <a href="#" class="btn-join-link btn-link">
          <button class="btn-join">
            <p class="btn-join-title">Join Server</p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/black-arrow.svg" alt="black-arrow">

          </button>
        </a>
      </div>
    </li>

    <li class="content-list-item">
      <div class="content-list-item-icon">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Twitter.svg" alt="Twitter">
      </div>
      <div class="content-list-item-brand" style="color: #2DAAE1;">Twitter</div>
      <div class="content-list-item-btn">
        <a href="#" class="btn-join-link btn-link">
          <button class="btn-join">
            <p class="btn-join-title">Join Server</p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/black-arrow.svg" alt="black-arrow">
          </button>
        </a>
      </div>
    </li>

    <li class="content-list-item">
      <div class="content-list-item-icon">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/Medium.svg" alt="Medium">
      </div>
      <div class="content-list-item-brand" style="color: #000000;">Medium</div>
      <div class="content-list-item-btn">
        <a href="#" class="btn-join-link btn-link">
          <button class="btn-join">
            <p class="btn-join-title">Join Server</p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/black-arrow.svg" alt="black-arrow">
          </button>
        </a>
      </div>
    </li> -->
  </ul>
</section>

<section class="section foundingTeam">
  <div class="container">
    <div class="row">
      <div class="content-text">
        <h3 class="title-h2">Founding Team</h3>
      </div>

      <ul class="content-list">
        <?php
            global $post;

            $myposts = get_posts( array(
                'post_type' => 'home-page',
                'numberposts' => -1,
                'category_name'    => "team",
            ) );

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                            
                        <li class="content-list-item">
                            <div class="content-list-item-person">
                                <div class="content-list-item-person-pict">
                                <img src="<?php the_field('founding_team_photo'); ?>" alt="George Wolfe">
                                </div>
                                <div class="content-list-item-person-bio">
                                <p class="content-list-item-person-bio-name"><?php the_field('founding_team_name'); ?></p>
                                <p class="content-list-item-person-bio-jobTitle"><?php the_field('founding_team_job_title'); ?></p>
                                </div>
                            </div>

                            <div class="content-list-item-title">
                                <?php the_field('founding_team_bio'); ?>
                            </div>
                        </li>
                            
                    <?php 
                }
            }

            wp_reset_postdata(); 
        ?>


        <!-- <li class="content-list-item">
          <div class="content-list-item-person">
            <div class="content-list-item-person-pict">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/compresed/team-1.png" alt="Valentin Nicoara">
            </div>
            <div class="content-list-item-person-bio">
              <p class="content-list-item-person-bio-name">Valentin Nicoara</p>
              <p class="content-list-item-person-bio-jobTitle">CEO</p>
            </div>
          </div>

          <div class="content-list-item-title">
            Valentin holds an M.Sc. in engineering from a prestigious Danish university, has a keen sense of design, and a meticulous attention to detail. He has extensive expertise in international business, speaks five languages, and has lived and visited over 40 countries.
          </div>
        </li>

        <li class="content-list-item">
          <div class="content-list-item-person">
            <div class="content-list-item-person-pict">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/compresed/team-2.png" alt="George Wolfe">
            </div>
            <div class="content-list-item-person-bio">
              <p class="content-list-item-person-bio-name">George Wolfe</p>
              <p class="content-list-item-person-bio-jobTitle">CFO</p>
            </div>
          </div>

          <div class="content-list-item-title">
            George Wolfe, J.D., is a practicing associate general counsel of U.S. Commercial for a Fortune 200 company. George specializes in competition law, regulatory compliance, and commercial contracting. George has also previously served at the United States Department of Justice and Federal Trade Commission.
          </div>
        </li>

        <li class="content-list-item">
          <div class="content-list-item-person">
            <div class="content-list-item-person-pict">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/compresed/team-3.png" alt="Kyle Teague">
            </div>
            <div class="content-list-item-person-bio">
              <p class="content-list-item-person-bio-name">Kyle Teague</p>
              <p class="content-list-item-person-bio-jobTitle">CTO</p>
            </div>
          </div>

          <div class="content-list-item-title">
            Kyle is a 3x startup founder based out of New York with over 20 years of software development experience. He has worked as a Data Scientist, VP of Engineering, and CTO. Kyle was also the lead blockchain developer for Loom Network, which had a successful ICO in 2018 and raised $24 MM in private sales.
          </div>
        </li> -->
      </ul>
    </div>
  </div>
</section>

<section  class="section FAQ">
  <div class="container">
    <div class="row">
      <div class="content-text">
        <h3 class="title-h2">F.A.Q.</h3>
      </div>

      <div class="content-box">
        <div class=" content-accordion-list ">


          <?php
            global $post;

            $myposts = get_posts( array(
                'post_type' => 'home-page',
                'numberposts' => -1,
                'category_name'    => "questions-left",
            ) );

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                            
                      

                      <div class="accordion" id="accordion-<?php the_field('faq_id'); ?>">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading-<?php the_field('faq_id'); ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php the_field('faq_id'); ?>" aria-expanded="false" aria-controls="collapse-<?php the_field('faq_id'); ?>">
                              <img src="<?php the_field('faq_left_column_icon'); ?>" alt="">
                              <div class="accordion-button-title"><?php the_field('faq_left_column_question'); ?></div>
                            </button>
                          </h2>
                          <div id="collapse-<?php the_field('faq_id'); ?>" class="accordion-collapse collapse " aria-labelledby="heading-<?php the_field('faq_id'); ?>" data-bs-parent="#accordion-<?php the_field('faq_id'); ?>">
                            <div class="accordion-body">
                              
                              <div class="accordion-body-title"><?php the_field('faq_left_column_question'); ?></div>
                              <div class="accordion-body-subtitle"><?php the_field('faq_left_column_answer'); ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                            
                    <?php 
                }
            }

            wp_reset_postdata(); 
          ?>

          <!-- <div class="accordion" id="accordion-One">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-One">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-One" aria-expanded="true" aria-controls="collapse-One">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/user-gear-user 1.svg" alt="user">
                  <div class="accordion-button-title">How can I participate in the presale?</div>
                </button>
              </h2>
              <div id="collapse-One" class="accordion-collapse collapse show" aria-labelledby="heading-One" data-bs-parent="#accordion-One">
                <div class="accordion-body">
                  
                  <div class="accordion-body-title">How can I participate in the presale?</div>
                  <div class="accordion-body-subtitle">Each property will be owned by an SPV (special purpose vehicle – a unique entity created with the sole purpose of holding the building) which in turn will be owned by a Series LLC, each series owning an SPV and the LLC membership interests of the series being divided into equal tokens which are being owned by investors like you. A more detailed explanation can be found in the whitepaper.</div>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion" id="accordion-Two">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-Two">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Two" aria-expanded="false" aria-controls="collapse-Two">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/currency-dollar-simple 1.svg" alt="">
                  <div class="accordion-button-title">How will rent be paid?</div>
                </button>
              </h2>
              <div id="collapse-Two" class="accordion-collapse collapse " aria-labelledby="heading-Two" data-bs-parent="#accordion-Two">
                <div class="accordion-body">
                  
                  <div class="accordion-body-title">How will rent be paid?</div>
                  <div class="accordion-body-subtitle">Each property will be owned by an SPV (special purpose vehicle – a unique entity created with the sole purpose of holding the building) which in turn will be owned by a Series LLC, each series owning an SPV and the LLC membership interests of the series being divided into equal tokens which are being owned by investors like you. A more detailed explanation can be found in the whitepaper.</div>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion" id="accordion-Thre">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-Thre">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-Thre" aria-expanded="false" aria-controls="collapse-Thre">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/faq-gear-six 1.svg" alt="gear-six">
                  <div class="accordion-button-title">How can I participate in the presale?</div>
                </button>
              </h2>
              <div id="collapse-Thre" class="accordion-collapse collapse " aria-labelledby="heading-Thre" data-bs-parent="#accordion-Thre">
                <div class="accordion-body">
                  
                  <div class="accordion-body-title">How can I participate in the presale?</div>
                  <div class="accordion-body-subtitle">Each property will be owned by an SPV (special purpose vehicle – a unique entity created with the sole purpose of holding the building) which in turn will be owned by a Series LLC, each series owning an SPV and the LLC membership interests of the series being divided into equal tokens which are being owned by investors like you. A more detailed explanation can be found in the whitepaper.</div>
                </div>
              </div>
            </div>
          </div> -->

          
        </div>

        <div class=" content-accordion-list ">
          <?php
            global $post;

            $myposts = get_posts( array(
                'post_type' => 'home-page',
                'numberposts' => -1,
                'category_name'    => "questions-right",
            ) );

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                            
                      

                      <div class="accordion" id="accordion-<?php the_field('faq_id'); ?>">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading-<?php the_field('faq_id'); ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php the_field('faq_id'); ?>" aria-expanded="false" aria-controls="collapse-<?php the_field('faq_id'); ?>">
                              <img src="<?php the_field('faq_right _column_icon'); ?>" alt="">
                              <div class="accordion-button-title"><?php the_field('faq_right_column_question'); ?></div>
                            </button>
                          </h2>
                          <div id="collapse-<?php the_field('faq_id'); ?>" class="accordion-collapse collapse " aria-labelledby="heading-<?php the_field('faq_id'); ?>" data-bs-parent="#accordion-<?php the_field('faq_id'); ?>">
                            <div class="accordion-body">
                              
                              <div class="accordion-body-title"><?php the_field('faq_right_column_question'); ?></div>
                              <div class="accordion-body-subtitle"><?php the_field('faq_right _column_answer'); ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                            
                    <?php 
                }
            }

            wp_reset_postdata(); 
          ?>
        </div>
      </div>

      <a href="#" class="btn-aBitBlue-link btn-link">
        <button class="btn-aBitBlue">
          <div class="btn-title">View All Properties</div>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/blue-arrow.svg" alt="blue-arrow">
        </button>
      </a>

      
      
    </div>
  </div>
</section>
</main>
    

<?php get_footer(); ?>
