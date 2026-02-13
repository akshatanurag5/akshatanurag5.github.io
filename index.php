<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>CNB</title>
    <meta name="description" content />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.png"
    />
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link
      rel="stylesheet"
      href="assets/css/swiper-bundle.min.css"
    />
  </head>
  <body>
    <!--test [if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif] -->

<!--    --><?// include 'components/preloader.php'; ?>

    <?php include 'components/header.php';?>

    <section id="home" class="hero-section">
      <div class="container">
        <div class="swiper hero-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row align-items-center position-relative">
                <div class="col-lg-5">
                  <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">
                      SmartYard 123
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                      SmartYard™ is your comprehensive solution for optimizing
                      yard operations, enhancing productivity, and maximizing
                      efficiency. Say goodbye to congestion and hello to
                      seamless yard management with SmartYard™.
                    </p>
                    <a
                      href="smartyard.php"
                      class="main-btn border-btn btn-hover wow fadeInUp"
                      data-wow-delay=".6s"
                      >Know More</a
                    >
                    <a href="#features" class="scroll-bottom">
                      <i class="lni lni-arrow-down"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                    <img
                      src="assets/img/hero/feature-1.svg"
                      width="130%"
                      alt="smart-yard-pic"
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="row align-items-center position-relative">
                <div class="col-lg-5">
                  <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">
                      SmartTransport
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                      MagicCube™ is a BLE 5 based solution, which helps in
                      remote tracking and tracing of cargo and also monitor
                      ambient parameters.
                    </p>
                    <a
                      href="smart-transport.php"
                      class="main-btn border-btn btn-hover wow fadeInUp"
                      data-wow-delay=".6s"
                      >Know More</a
                    >
                    <a href="#features" class="scroll-bottom">
                      <i class="lni lni-arrow-down"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                    <img
                      src="assets/img/hawkE/dynamic-yard-trailer-eta.webp"
                      width="140%"
                      alt="cnb container tracking real time"
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="row align-items-center position-relative">
                <div class="col-lg-5">
                  <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">iHawk™</h1>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                      The mobile application gives a real time location and
                      other process updates of cargo in-transit. The end users
                      such as CHAs, importers/exporters and customs can avail
                      complete information about cargo on their fingertips. The
                      platform is compatible with Android as well as iOS
                      environment and is available on Google play/ App store
                      free of cost.
                    </p>
                    <a
                      href="ihawk.php"
                      class="main-btn border-btn btn-hover wow fadeInUp"
                      data-wow-delay=".6s"
                      >Know More</a
                    >
                    <a href="#features" class="scroll-bottom">
                      <i class="lni lni-arrow-down"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                    <img
                      src="assets/img/about/ihawk_banner.png"
                      width="130%"
                      alt="cnb container tracking real time"
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="row align-items-center position-relative">
                <div class="col-lg-5">
                  <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">HAWK - E</h1>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                      Hawk-E (Enterprise) is an AI-powered IoT platform designed
                      for enterprises seeking complete automation and advanced
                      yard planning. It offers precise locational accuracy (to
                      0.5 m) for container tracking, automates yard planning,
                      and generates tasks for yard equipment and cranes..
                    </p>
                    <a
                      href="hawk-e.php"
                      class="main-btn border-btn btn-hover wow fadeInUp"
                      data-wow-delay=".6s"
                      >Know More</a
                    >
                    <a href="#features" class="scroll-bottom">
                      <i class="lni lni-arrow-down"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                    <img
                      src="assets/img/hawkE/digital-supply-chain-dynamic-yard.webp"
                      width="130%"
                      alt="cnb container tracking real time"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br /><br />
          <div class="swiper-pagination hero-swiper-pagination"></div>
          <!-- <div class="swiper-button-next hero-swiper-button-next"></div> -->
          <!-- <div class="swiper-button-prev hero-swiper-button-prev"></div> -->
          <!-- <div class="swiper-scrollbar hero-swiper-scrollbar"></div> -->
        </div>
      </div>
    </section>

    <section
      id="features"
      class="feature-section pt-120 wow fadeInUp"
      data-wow-delay=".4s"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-shopping-basket"></i>
              </div>
              <div class="content">
                <h1>2,500,000+</h1>
                <p>Containers handling annually</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-cogs"></i>
              </div>
              <div class="content">
                <h1>50+</h1>
                <p>Yards automated</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-construction"></i>
              </div>
              <div class="content">
                <h1>400+</h1>
                <p>Crane installations</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <br /><br /><br /><br />
    <section
      id="clients"
      class="clients-section pt-150 wow fadeInUp"
      data-wow-delay=".4s"
    >
      <div class="container">
        <div class="section-title text-center mb-60">
          <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Our Clients</h2>
          <p class="wow fadeInUp" data-wow-delay=".4s">
            Some of our esteemed clients who trust our solutions.
          </p>
        </div>
        <div class="swiper clients-slider">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/gateway-logo.jpg" alt="Gateway" />
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
              <img
                src="assets/img/clients/hind-terminals-logo.jpg"
                alt="Hind Terminals"
              />
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
              <img
                src="assets/img/clients/Honeycomb-logistics-logo.jpg"
                alt="Honeycomb Logistics"
              />
            </div>
            <!-- Slide 4 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/ICD-Loni.jpg" alt="ICD Loni" />
            </div>
            <!-- Slide 5 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/jmbaxi.jpg" alt="JMBAXI" />
            </div>
            <!-- Slide 6 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/JWC.jpg" alt="JWC" />
            </div>
            <!-- Slide 7 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/logo-apm.jpg" alt="APM" />
            </div>
            <!-- Slide 8 -->
            <div class="swiper-slide">
              <img
                src="assets/img/clients/mumbai-international-logo.jpg"
                alt="Mumbai International"
              />
            </div>
            <!-- Slide 9 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/Navkar-Logo.jpg" alt="Navkar" />
            </div>
            <!-- Slide 10 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/Parekh-logo.jpeg" alt="Parekh" />
            </div>
            <!-- Slide 11 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/allcargo.jpg" alt="Allcargo" />
            </div>
            <!-- Slide 12 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/MSC-LOGO.jpg" alt="MSC" />
            </div>
            <!-- Slide 13 -->
            <div class="swiper-slide">
              <img
                src="assets/img/clients/Albatross-logo.jpg"
                alt="Albatross"
              />
            </div>
            <!-- Slide 14 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/ameya_logo.jpg" alt="Ameya" />
            </div>
            <!-- Slide 15 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/Apollo.jpg" alt="Apollo" />
            </div>
            <!-- Slide 16 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/Balmer.jpg" alt="Balmer" />
            </div>
            <!-- Slide 17 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/Calyx-logo.jpg" alt="Calyx" />
            </div>
            <!-- Slide 18 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/CenturyPly.jpg" alt="CenturyPly" />
            </div>
            <!-- Slide 19 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/CMA-CGM-LOGO.jpg" alt="CMA CGM" />
            </div>
            <!-- Slide 20 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/CONCOR-LOGO.jpg" alt="CONCOR" />
            </div>
            <!-- Slide 21 -->
            <div class="swiper-slide">
              <img src="assets/img/clients/DLI.jpg" alt="DLI" />
            </div>
            <!-- Slide 22 -->
            <div class="swiper-slide">
              <img
                src="assets/img/clients/Gateway-Distriparks-logo.jpg"
                alt="Gateway Distriparks"
              />
            </div>
          </div>
          <!-- Navigation buttons -->
          <!-- <div class="swiper-button-next clients-swiper-button-next"></div> -->
          <!-- <div class="swiper-button-prev clients-swiper-button-prev"></div> -->
          <div class="swiper-pagination clients-swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section
      id="about"
      class="about-section pt-150 wow fadeInUp"
      data-wow-delay=".4s"
    >
      <div class="container">
        <div class="section-title text-center mb-60">
          <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Our Products</h2>
          <p class="wow fadeInUp" data-wow-delay=".4s">
            Some of our esteemed clients who trust our solutions.
          </p>
        </div>
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="about-img">
              <img
                src="assets/img/about/smartYard.svg"
                alt
                class="w-100"
                width="635"
                height="422"
              />
              <img
                src="assets/img/about/about-left-shape.svg"
                alt
                class="shape shape-1"
              />
              <!-- <img
                src="assets/img/about/left-dots.svg"
                alt
                class="shape shape-2" /> -->
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="about-content">
              <div class="section-title mb-30">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                  SmartYard™
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  SmartYard™ is your comprehensive solution for optimizing yard
                  operations, enhancing productivity, and maximizing efficiency.
                  Say goodbye to congestion and hello to seamless yard
                  management with SmartYard™.
                </p>
              </div>
              <ul>
                <li>Fully Automated AI-Based Solution</li>
                <li>Container Tracking and Inventory Management</li>
                <li>Gate Automation and Yard Planning</li>
              </ul>
              <a
                href="smartyard.php"
                class="main-btn btn-hover border-btn wow fadeInUp"
                data-wow-delay=".6s"
                >Discover More</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
  

    <section
      id="about"
      class="about-section pt-150 wow fadeInUp"
      data-wow-delay=".4s"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="about-content">
              <div class="section-title mb-30">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                  SmartTransport
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  SmartTransport is an integral part of Port-Yard-Ecosystem,
                  that tracks containers while on the move. The real time
                  location of container enables the port and yard with correct
                  ETAs to do advance planning as per the incoming traffic.
                </p>
              </div>
              <ul>
                <li>Optimized Yard and Transporter Management</li>

                <li>Enhanced Planning and Efficiency</li>
                <li>Maximized Occupancy and Reduced Costs</li>
              </ul>
              <a
                href="smart-transport.php"
                class="main-btn btn-hover border-btn wow fadeInUp"
                data-wow-delay=".6s"
                >Discover More</a
              >
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 order-first order-lg-last">
            <div class="about-img-2">
              <img
                src="assets/img/hawkE/dynamic-yard-trailer-eta.webp"
                alt
                class="w-100"
              />
              <img
                src="assets/img/about/about-right-shape.svg"
                alt
                class="shape shape-1"
              />
              <!-- <img
                src="assets/img/about/right-dots.svg"
                alt
                class="shape shape-2" /> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      id="about"
      class="about-section pt-150 wow fadeInUp"
      data-wow-delay=".4s"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="about-img">
              <img
                src="assets/img/hawkE/digital-supply-chain-dynamic-yard.webp"
                alt
                class="w-100"
              />
              <img
                src="assets/img/about/about-left-shape.svg"
                alt
                class="shape shape-1"
              />
              <!-- <img
                  src="assets/img/about/left-dots.svg"
                  alt
                  class="shape shape-2" /> -->
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="about-content">
              <div class="section-title mb-30">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                  Hawk - Enterprise
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  Hawk-E (Enterprise) is an IoT platform using artificial
                  intelligence and advanced sensors, primarily designed for
                  enterprises that are looking for complete automation with
                  extensive yard planning. It provides a high degree of
                  locational accuracy (to 0.5 m) in tracking movement of
                  containers. Apart from providing locational data, Hawk-E also
                  undertakes yard planning and automatically generates tasks for
                  yard equipment/cranes.
                </p>
              </div>
              <!-- <ul>
                <li>Fully Automated AI-Based Solution</li>
                <li>Container Tracking and Inventory Management</li>
                <li>Gate Automation and Yard Planning</li>
              </ul> -->
              <a
                href="hawk-e.php"
                class="main-btn btn-hover border-btn wow fadeInUp"
                data-wow-delay=".6s"
                >Discover More</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      id="about"
      class="about-section pt-150 wow fadeInUp"
      data-wow-delay=".4s"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="about-content">
              <div class="section-title mb-30">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                  iHawk™ - Connecting Cargo To Its StakeHolders
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  The mobile application gives a real time location and other
                  process updates of cargo in-transit. The end users such as
                  CHAs, importers/exporters and customs can avail complete
                  information about cargo on their fingertips. The platform is
                  compatible with Android as well as iOS environment and is
                  available on Google play/ App store free of cost.
                </p>

                <div class="download-app">
                  <a
                    href="https://play.google.com/store/apps/details?id=com.cnbelectronics.ihawk&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"
                  >
                    <img
                      class="app-icon google-play"
                      alt="Get it on Google Play"
                      src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png"
                    />
                  </a>
                  <a
                    href="https://apps.apple.com/us/app/i-hawk/id1451291991?itsct=apps_box_badge&amp;itscg=30200"
                    style="
                      display: inline-block;
                      overflow: hidden;
                      border-radius: 13px;
                    "
                  >
                    <img
                      src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1550016000"
                      class="app-icon app-store-apple"
                      alt="Download on the App Store"
                      style="border-radius: 13px"
                    />
                  </a>
                </div>
              </div>
              <br />
              <a
                href="ihawk.php"
                class="main-btn btn-hover border-btn wow fadeInUp"
                data-wow-delay=".6s"
                >Discover More</a
              >
            </div>
          </div>

          <div class="col-xl-6 col-lg-6">
            <div class="about-img">
              <img
                src="assets/img/about/iphone_mock_i_hawk.png"
                alt
                class="w-100"
              />
              <img
                src="assets/img/about/about-right-shape.svg"
                alt
                class="shape shape-1"
              />
              <!-- <img
                src="assets/img/about/left-dots.svg"
                alt
                class="shape shape-2" /> -->
            </div>
          </div>
        </div>
      </div>
    </section>


    <section
      id="why"
      class="feature-extended-section pt-100 wow fadeInUp"
      data-wow-delay=".4s"
    >
      <div class="feature-extended-wrapper">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-6 col-lg-8 col-md-9">
              <div class="section-title text-center mb-60">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                  Why Choose CNB
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  Choose CNB for turbocharged efficiency, seamless integration,
                  and out-of-this-world support!
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
                <div class="icon">
                  <i class="lni lni-inbox"></i>
                </div>
                <div class="content">
                  <h3>Increases effective storage capacity</h3>
                  <p>
                    Our solution optimizes available space, unlocking increased
                    storage capacity for seamless organization and productivity.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
                <div class="icon">
                  <i class="lni lni-timer"></i>
                </div>
                <div class="content">
                  <h3>Improves overall turn-around time.</h3>

                  CNB Boosts Turnaround Time: Experience streamlined processes
                  for faster results and heightened efficiency.
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
                <div class="icon">
                  <i class="lni lni-grid-alt"></i>
                </div>
                <div class="content">
                  <h3>Seamlessly integrates with legacy systems.</h3>
                  <p>
                    Streamline operations by effortlessly connecting with
                    existing infrastructure for enhanced functionality.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
                <div class="icon">
                  <i class="lni lni-dashboard"></i>
                </div>
                <div class="content">
                  <h3>Provides realtime solutions that works for you.</h3>
                  <p>
                    Get instant, effective solutions that adapt to your needs.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
                <div class="icon">
                  <i class="lni lni-protection"></i>
                </div>
                <div class="content">
                  <h3>Leads to pedestrian free and safer yard.</h3>
                  <p>
                    Promotes safety by eliminating pedestrian traffic in
                    designated areas.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
                <div class="icon">
                  <i class="lni lni-rocket"></i>
                </div>
                <div class="content">
                  <h3>Highly Optimized</h3>
                  <p>Fine-tuned for peak performance and efficiency.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'components/contact-us-form.php' ?>

    <?php include 'components/footer.php' ?>


    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>


    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
