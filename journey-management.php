<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS source file -->
    <link rel="stylesheet" href="/journeymanagement.css">

    <!-- REMIXICONS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    
   <!-- Google fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">

   <!-- Monserrat -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!-- Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Bootstrap CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Journey Management</title>
</head>
<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark position-sticky top-0" style="z-index: 1;">
        <div class="container-fluid">
  
          <a class="navbar-brand" href="#">
            <img src="./img/DIAL SAFE LOGO-02.png" alt="logo" style="height: 100px; width: 98px;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           
              <li class="nav-item ms-sm-5">
                <a class="nav-link active" aria-current="page" href="#">About Us</a>
              </li>

              <li class="nav-item ms-sm-5">
                <a class="nav-link active" href="#services">Services</a>
              </li>

              <li class="nav-item dropdown ms-sm-5">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Industries
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Primary Sector</a></li>
                  <li><a class="dropdown-item" href="#">Law Enforcement Agency</a></li>
                  <li><a class="dropdown-item" href="#">Mining Oil & Gas</a></li>
                  <li><a class="dropdown-item" href="#">Construction & Engineering</a></li>
                  <li><a class="dropdown-item" href="#">Manufacturing</a></li>
                  <li><a class="dropdown-item" href="#">Utilities</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">View all Industries</a></li>
                </ul>
              </li>

              
              <li class="nav-item dropdown ms-sm-5">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Solutions
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Enterprise Safety Platform</a></li>
                  <li><a class="dropdown-item" href="#">Personal App Safety</a></li>
                  <li><a class="dropdown-item" href="#">Journey Management</a></li>
                  <li><a class="dropdown-item" href="#">Dial 24/7 Risk Assessment</a></li>
                  <li><a class="dropdown-item" href="#">24/7 Monitoring</a></li>
                  <li><a class="dropdown-item" href="#">Lone Worker</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item fw-bold" href="#" style="color: red;">Deep learning IoT and Data</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">DIALSAFE</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">I-Secure</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">I-Dial</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">I-Track</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">Dial-ThreatHunter</a></li>
            

                </ul>
              </li>

              <li class="nav-item ms-sm-5">
                <a class="nav-link active" href="#">Contact</a>
              </li>
              

            </ul>

            <div class="ms-auto">
                
                <button class="req-btn px-4 py-2 me-3" style="background-color: black; border: 1px solid lightgray;
                border-top-left-radius: 9px;
                border-top-right-radius: 9px;
                border-bottom-left-radius: 9px;">
                    <a href="#" >Request Demo</a>
                </button>
             
                <button class="req-btn px-4 py-2 me-5" style="background-color: black; border: 1px solid lightgray;
                border-top-left-radius: 9px;
                border-top-right-radius: 9px;
                border-bottom-left-radius: 9px;">
                    <a href="#" >Log In</a>
                </button>
            </div>
          </div>
        </div>
    </nav>


    <section class="header position-relative">

        <div class="image-container">
            <img src="/img/header-journeyjpg.jpg" alt="" class="img-fluid">
        </div>

       <div class="container h-100 px-lg-5 ms-sm-5 position-absolute top-0">
        <div class="row">

            <div class="col-lg-6 enterprise h-100 d-flex align-items-center p-4">

                <div>

                    <h1  data-aos="fade-right">
                        Journey Management
                    </h1>

                    <p class="" data-aos="slide-up">
                        In the dynamic landscape of travel risk management, a one-size-fits-all approach falls short.
                        That's where  DIAL-THREATHUNTER's Journey Management solution steps in, revolutionizing how you 
                        stay informed about your mobile workforce's journey plans and approvals.
                    </p>

                                 
                    <button class="req-btn px-4 py-3" style="background-color: black; border: 1px solid lightgray;
                    border-top-left-radius: 9px;
                    border-top-right-radius: 9px;
                    border-bottom-left-radius: 9px;">
                        <a href="#" >Request Demo</a>
                    </button>
    
                  
                </div>
            </div>
        </div>

       </div>

    </section>


    <!-- Streamiline Journey Management -->
    <section class="streamline p-4" style="background-color: black;">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <h3 class="fw-bold text-white">Streamlined Journey Management, Reimagined Efficiency</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center pt-2">
                    <div>
                        <p class="text-white" style="text-align: center; line-height: 40px;">
                            At the core of Dial 2/7's brilliance lies a Dial-ThreatHunter Journey Management 
                            solution that's designed with efficiency in mind. Say goodbye to manual and convoluted 
                            processes, and say hello to a platform that empowers you to pre-plan, review, and 
                            approve journey routes effortlessly. No more wasted time, no more administrative 
                            headaches—just a streamlined experience that lets you focus on propelling your operations forward.
                        </p>
                    </div>
                </div>
            </div>

              
           <center>
                <button class="req-btn px-4 py-3 me-3 mt-4" style="background-color: black; border: 1px solid lightgray;
                    border-top-left-radius: 9px;
                    border-top-right-radius: 9px;
                    border-bottom-left-radius: 9px;">
                        <a href="#" >Request Demo</a>
                </button>
           </center>
         
        </div>
    </section>
    
    <!-- Real Time Data Fusion -->
    <section class="real-time">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <h3 class="fw-bold">Real-Time Data Fusion for Dynamic Risk Assessment</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center pt-3">
                    <p style="text-align: center; line-height: 40px;">
                        Jouney Management Plan goes beyond prediction—it embraces the present with real-time data integration
                        from IoT devices and external sources. As you embark on your journey, 
                        live environmental data, weather conditions, traffic updates, and security alerts 
                        are harnessed to provide dynamic risk assessments. This means you're never in the dark 
                        about the evolving risk landscape.
                    </p>
                </div>
            </div>


            <center>
                <button class="req-btn px-4 py-3 me-3 mt-4" style="background-color: black; border: 1px solid lightgray;
                    border-top-left-radius: 9px;
                    border-top-right-radius: 9px;
                    border-bottom-left-radius: 9px;">
                        <a href="#" >Request Demo</a>
                </button>
           </center>

            <center>
                <div class="row mt-4">
                    <p style="text-align: center !important;">
                      <b>Try our Journey Management app, it only takes a minute.</b>
                    </p>
                </div>
            </center>
         
        </div>
    </section>


    <section class="safety-app py-5 pb-5" style="background-color: black;">
        <div class="container">

            <div class="col-lg-12 pb-2">
                <h2>
                    Here are some of the features that make Dial-ThreatHunter Journey Management solution so easy to use
                </h2>
            </div>

            <div class="row d-flex justify-content-between">

                <div class="col-lg-3 safety-feature p-4">
                    <ul>
                        <li>
                           <h5 class="d-flex align-items-center justify-content-end">
                            User-friendly platform <i class="ri-user-5-fill  fs-1 ms-2"></i>
                           </h5>
                            <p>
                                Our platform is designed to be easy to use, even for those with limited technical experience.
                            </p>
                        </li>

                        <li class="pt-4">
                            <h5 class="d-flex align-items-center justify-content-end">
                                Pre-approved travel plans <i class="ri-suitcase-2-fill   fs-1 ms-2"></i>
                            </h5>
                            <p>
                                With pre-approved travel plans, you can save time and hassle by automatically approving journeys that meet your
                                organization's safety standards.
                            </p>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-4">
                    <img src="/img/journey-dash-2jpg.jpg" alt="" class="img-fluid">
                </div>

                <div class="col-lg-3 safety-feature-two">
                    <ul>
                        <li>
                           <h5 class="d-flex align-items-center justify-content-start">
                            <i class="ri-survey-fill fs-1 me-2"></i></i>Risk assessment forms
                           </h5>
                            <p>
                                You can assign risk assessment forms to specific activity or job types, ensuring that potential
                                hazards are identified and addressed proactively.

                            </p>
                        </li>

                        <li class="pt-4">
                            <h5 class="d-flex align-items-center justify-content-start">
                                <i class="ri-pie-chart-2-fill fs-1 me-2"></i>Automated data
                            </h5>
                            <p>
                                Our solution provides you with automated data for audits, compliance checks, and health & safety assessments. 
                                This data-driven approach helps you stay on top of your organization's safety landscape.

                            </p>
                        </li>


                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Your Path to Safer Journeys Starts Here -->
    <section class="path p-4">
        <div class="container ">
              <!-- Your Path to Safer Journeys Starts Here -->
            <div class="row">
              
                <div class="col-lg-6  pe-sm-5">

                    <div>
                        <h1 style="font-size: 40px; text-align: left;">
                            Your Path to <span style="color: rgb(95, 19, 19);" class="fw-bold">Safer Journeys</span> <span class="fw-bold">Starts Here</span>
                        </h1>
    
                    </div>
              
                    <div class="py-2" style="text-align: justify;">

                        <p class="p3-5 ">
                            Incorporating Dial-ThreatHunter's Journey Management Plan Feature isn't just a choice—it's a strategic decision to prioritize safety, efficiency, and smart risk management. Reduce the likelihood of incidents, elevate response times, and create a travel environment that's safer than ever before.
                            With Dial-ThreaHunter - Journey Management you can review your employees route to ensure:
                        </p>
    
                        <div style="line-height: 40px;">
                            <p> <i class="ri-bookmark-2-fill me-2"></i>Sites are visited in a logical order.</p>
                            <p> <i class="ri-bookmark-2-fill me-2"></i>Journey legs and break times fit your fatigue policy.</p>
                            <p> <i class="ri-bookmark-2-fill me-2"></i>Total driving times are not intentionally exceeding policy limits.</p>
                            <p> <i class="ri-bookmark-2-fill me-2"></i>Use our Remote Working solutions for travel out-of-cell coverage.</p>
                            <p> <i class="ri-bookmark-2-fill me-2"></i>Routes are optimised to minimise travel distance and carbon footprint.</p>
                            <p> <i class="ri-bookmark-2-fill me-2"></i>Fatigue is checked prior to and routinely throughout the journey with a cognitive test.</p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

    </section>

    <!-- Enhanced Safety and Efficiency -->
    <section class="enhance p-4" style="background-color: black;">

        <div class="container">
          <!-- Enhanced Safety and Efficiency -->
            <div class="row pt-5">

                <div class="col-lg-6" style="border-right: 10px solid rgb(58, 55, 55);">
                    <h3 class="pe-sm-5">
                            Enhanced Safety and Efficiency by Integrating Vehicle 
                            Tracking and Panic Button
                            App with Journey Management Planning
                        </span>                    
                    </h3>

                    <div class="pt-3" style="text-align: justify; color: rgb(150, 150, 150); line-height: 40px;">
                        <p class="pe-sm-5">
                            Experience a new level of safety and streamlined operations. By integrating your 
                            vehicle tracking solution with Dial-ThreatHunter’s 
                            Journey Management Planning, you consolidate your travel and fatigue data onto a single platform.
                            This streamlined approach enhances the efficiency and accuracy of your travel risk management procedures.
                            In critical situations, Dial-ThreatHunter Journey Management solution steps in to ensure the well-being of your workforce.
                            Utilizing our emergency response feature, you can promptly dispatch alerts to your team, informing them of 
                            the situation and delivering clear instructions for their response.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="/img/journey-dash.jpg" alt="" class="img-fluid">
                </div>

               
            </div>   
        </div>
    </section>
    
    <!-- Enhanced Safety and Efficiency (Contd)-->
    <section class="our-panic p-4 shadow-lg">

        <div class="container">

            <div class="row">
                <!-- Panic image -->
                <div class="col-lg-5 mt-5 d-flex justify-content-center">
                   <img src="/img/panic.jpg" alt="" class="img-fluid" style="width: 300px; height: 700px; object-fit: contain;">
                </div>

                <!--  Our panic button feature provides your employees -->
                <div class="col-lg-7 mt-5">
                    <div>

                        <p>
                            Our panic button feature provides your employees with a straightforward way to request
                            assistance during emergencies. This functionality proves particularly valuable for 
                            lone workers and those operating in remote or hazardous locations.
                        </p>

                        <p>
                            Benefits of pairing your vehicle tracking with Dial-ThreatHunter encompass:
                        </p>

                        <div class="pt-3">
                            <p> <i class="ri-bookmark-2-fill me-2"></i>Real-time GPS Proximity: Gain insights into your workers’ location in relation
                                to their vehicles, all displayed on a single map.
                            </p>

                            <p class="pt-3">
                                <i class="ri-bookmark-2-fill me-2"></i> Comprehensive Asset Location: Access GPS location details for all assets—owned,
                                rented, or hired—whenever journeys are tracked via our Journey Management app.
                            </p>

                            <p class="pt-3">
                                <i class="ri-bookmark-2-fill me-2"></i> High-Risk Activity Monitoring: Report on assets engaged in higher-risk tasks,
                                allowing you to proactively manage potential dangers.
                            </p>
                            
                            <p class="pt-3">
                                <i class="ri-bookmark-2-fill me-2"></i> Streamlined Incident Processing: Execute duress, man-down, collision, and
                                rollover event handling within the same centralized platform as the panic button.
                            </p>

                            <p class="pt-3">
                                <i class="ri-bookmark-2-fill me-2"></i> Extensive Coverage: Extend your network coverage beyond standard cellular networks
                                by leveraging our Remote Working solutions.
                            </p>

                        </div>

                        <p>
                            <i class="ri-bookmark-2-fill me-2"></i>Embrace this integration to elevate both safety and efficiency in your operations. 
                            Your travel risk management will be more effective than ever before. Don't hesitate 
                            to explore this transformative solution. Book a demo today and discover the power of
                            integrated solutions by Dial-ThreatHunter. Your workforce’s safety deserves the highest priority.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- youtube video section -->
    <center>
        <section class="youtube p-0">
            <div class="conatiner d-flex justify-content-center align-items-center h-100 ">
                <div class="row ">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center"  style="width: 800px; height: 500px;">
                        <video width="700" id="video" controls type="video/mp4">
                            <source src="/Video/WhatsApp Video 2023-08-20 at 15.34.51.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>
     </center>



     <!-- TRAVEL SAFETY FAQs-->
     <section class="faq-section pt-5 pb-5">
        <h2 class="title">TRAVEL SAFETY FAQs</h2>

        <!-- FAQ One -->
        <div class="faq">
            <!-- Question One -->
            <div class="question">
                <h3>Is there an option to pay-per-journey if we don’t travel often?</h3>

                <i class="ri-arrow-down-s-line fs-2"></i>
            </div>

            <!-- Answer to question one -->
            <div class="answer">
                <p>
                    Yes, we offer a low rate for clients that need more flexibility,
                    if you qualify for our enterprise solutions and want to include a
                    12+ month contract.
                </p>
            </div>
        </div>

        <!-- FAQ Two -->
        <div class="faq">
            <!-- Question Two -->
            <div class="question">
                <h3>Can we use this for risk assessments?</h3>

                <i class="ri-arrow-down-s-line fs-2"></i>
            </div>

            <!-- Answer to Q2 -->
            <div class="answer">
                <p>
                    Yes, you can. Your users can access your Dial 24/7 - Enterprise account using their work username and 
                    password by enforcing it.
                </p>
            </div>
        </div>

        <!-- FAQ Three -->
        <div class="faq">
            <!-- Question Three -->
            <div class="question faq-six">
                <h3>Can we use this for mixed fleet travelling?</h3>
                <i class="ri-arrow-down-s-line fs-2"></i>
            </div>

            <!-- Answer to Q3 -->
            <div class="answer">
                <p>
                    You certainly can! With our transport mode selector, 
                    you can nominate up to six different modes of transport for the same journey.
                </p>
            </div>
        </div>

        <!-- FAQ Four -->
        <div class="faq">
            <!-- Question Four -->
            <div class="question" >
                <h3>How do we control the approval quality?</h3>

                <i class="ri-arrow-down-s-line fs-2"></i>
            </div>

            <!-- Answer to Q4 -->
            <div class="answer">
                <p>
                    Very easily! Our ‘processes’ function enables you to create a checklist for 
                    supervisors to review and check off. We even record how long they take to review each item!
                </p>
            </div>
        </div>

      
    </section>

    
    <!-- Footer -->
    <footer class="footer border-top">

        <div class="container py-5">


            <div class="row">

                <div class="col-lg-3 p-0">
                    <a href="#"><img src="/img/DIAL SAFE LOGO-02.png" alt="" class="img-fluid" style="height: 120px; width: 120px;"></a>
                </div>

                
                <div class="col-md-3 mt-4">
                    <h5 class="pt-3 fw-bold" style="color: rgb(210, 210, 210);">Company</h5>
                    <a href="#">About</a> <br>
                    <a href="#">Careers at Dial 24/7</a> <br>
                    <a href="#">Contact Us</a> <br>
                    <a href="#">Privacy & Security</a> <br>
                </div>
             
                <div class="col-md-3 mt-4">
                    <h5 class="pt-3 fw-bold" style="color:  rgb(210, 210, 210);">Product</h5>
                    <a href="#">Pricing</a> <br>
                    <a href="#">Integrations</a> <br>
                    <a href="#">Get Started For Free</a> <br>
                    <a href="#">Request a Demo</a> <br>
                </div>
             
                <div class="col-md-3 mt-4">
                    <h5 class="pt-3 fw-bold" style="color:  rgb(210, 210, 210);">Resources</h5>
                    <a href="#">Case Studies</a> <br>
                    <a href="#">HSE</a> <br>
                    <a href="#">Blog</a> <br>
                    <a href="#">Legislation</a> <br>
                </div>
             

            </div>

        </div>

    </footer>

    <section class="address" style="background-color: black;">

        <div class="container">
            
            <div class="row">

                <div class="col-lg-12 d-flex justify-content-between text-white add">
                   
                    <div class="c0l-lg-6 add">
                        Email  <a href="" class="text-warning">
                            info@dial24-7portal.com
                        </a>
    
                    </div>

                    <p>
                        plot 12, House 6, 2nd Avenue, Federal Housing Estate, Trans Amadi Ind. Layout, PH
                    </p>

                </div>

            </div> 

        </div>

    </section>

    
    <section class="socials border-top p-4" style="background-color: black;">
        <div class="container">
            <div class="row ">

                <div class="col-lg-12 p-0 d-flex justify-content-center">
                    
                    <div>
                        <a href=""><i class="ri-linkedin-box-fill fs-3 text-white" id="linkedin"></i></a>
                        <a href=""><i class="ri-instagram-fill fs-3 text-white ms-3" id="instagram"></i></a>
                        <a href=""><i class="ri-twitter-x-line fs-3 text-white ms-3" id="twitter"></i></a>
                    </div>
                   
                </div>
               
            </div>

        </div>
    </section>



    

    
   

<!-- Bootsrap Js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<!-- Main JS script -->
<script src="main.js"></script>


<!-- AOS script -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 3000,
    once: true,
  });
</script>
</body>
</html>