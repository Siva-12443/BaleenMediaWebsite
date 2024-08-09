<?php
include('include/top.php');
?>
<style>
    /* .about-section_top .container {
        margin-right:0px;
        
    } */
        .about-section_top{
            background-image:url("assets/images/baleen-bg.jpg" );
            background-position: top;
            background-attachment: fixed;
            background-size:cover;
            /* box-shadow: 0 0.5px 10px rgba(0, 0, 0, 0.15); */
            /* margin-bottom: 20px; */
            padding:150px 0px;
            display:flex;
            justify-content:right;
            border:10px black;
        }
        .about-section_top h1 {
            
            font-size: 40px;
            text-align:right;
            border-bottom:1px solid gray;
            text-wrap:wrap;
           
        }
        .about-section_top p {
            font-size: 20px;
            text-align:center;
            color:#ffff;
        }
/* --------------------------- */

        @media only screen and (max-width: 450px){
            .about-section_top h1 {
            
            font-size: 30px;
            text-align:right;
            border-bottom:1px solid gray;
        }
        .about-section_top p {
            font-size:13px;
            text-align:left;
            color:#ffff;
        }
        .about-section_about{
            /* background-image:url("assets/images/baleen-bg.jpg" ); */
            position:relative;
            background-attachment: fixed;
            background-position: bottom;
            background-size:cover;
            padding:50px 0px;
            box-shadow: 0px 0px 5px black;
            
            background-image: linear-gradient(#f6efdd,#869a9f,#85a8aa,#063b57);
           
        }
        .about-section_about h1 {
            
            font-size: 30px;
            text-align:left;
            border-bottom:1px solid gray;
        }
        .about-section_about p {
        
            font-size: 13px;
            text-align:left;
            color:#fff;
        }
    }
/* -------------------------------------------------------- */
        .about-section_about,.WhatWeDo {
            /* background-image:url("assets/images/baleen-bg.jpg" ); */
            position:relative;
            background-attachment: fixed;
            background-position: bottom;
            background-size:cover;
            padding:50px 0px;
            box-shadow: 0px 0px 15px #4d4c4c7a;
            background-image: linear-gradient(#f6efdd,#869a9f,#85a8aa,#063b57);
           
        }

        .about-section_about h1 {
            
          
            text-align:left;
            border-bottom:1px solid gray;
        }
        .about-section_about p {
        
            
            text-align:left;
            color:#fff;
        }

        .about-section {
            padding-top:20px;
            background-color: #f8f9fa;
            background-image:url("");
            
            background-size:cover;
            background-position:bottom;
            box-shadow: 0 0.5px 10px rgba(0, 0, 0, 0.15);
         
        }
      
    
        .about-content {
           
            padding: 2rem;
            border-radius: .5rem;
            
           
        }
        .about-content h1 {
            font-size: 1.75rem;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }
        .about-content p {
            font-size: 1.125rem; /* Increase font size */
            margin-bottom: 1.5rem;
            margin-top: 0.625rem;
           
        }
        .ConsultYou-btn a {
            font-size: 1.5rem;
            
            font-weight: 700;
            text-decoration: none;
        }
     
    </style>
 <!--<section class="parallax-banner" data-parallax="" data-image-src="">-->
 
        <!-- <div class="parallax-banner-overlay"> -->
            <!-- <div class="parallax-banner-content"> -->
 <!--       <div id="myCarousel" class="carousel slide" data-ride="carousel">        -->
 <!--           <div class="carousel-inner">-->
 <!--               <div class="item active">-->
 <!--                   <img src="https://www.baleenmedia.com/assets/images/FirstSlide.png" alt="Los Angeles" style="width:100%;">-->
                    
 <!--                   <div class="carousel-caption">-->
                    
 <!--                       <H1 style = " position: absolute;Bottom: 650px;">-->
 <!--                           Best Advertising Agency in Chennai to upgrade your Enterprise.</H1>-->
 <!--                           <p class="justify" style = "position: absolute;Bottom: 250px;"> Meet the wondrous Advertising Agency in Chennai Baleen Media rising as a prominent Advertising Agency focused on creative and excellent Newspaper Advertisement, Television/ Radio Advertisement, Bus/ Auto Advertisement, Internet-->
 <!--                               & Social Media Promotions in Chennai. With other basic services, that helps your brands win through the competitors in the industry. There are not enough words to describe our work all in one for which you need to know-->
 <!--                               us more by connecting our experts waiting to guide you and bring your brand on top or go through our website tour. <br> Know more about our best services for you and experience wholesome brand growth.</p>-->
 <!--                               <div class="ConsultYou-btn">-->
 <!--                              <a class="border-btn" href="contact.php" style="font-size: 20px;Bottom: 150px;" >Contact Us</a> -->
 <!--                              <a class="border-btn" href="rfq.php"style="font-size: 20px;Bottom: 150px;" >Call Back</a>-->
 <!--                           </div> -->
 <!--                           </div>-->
                            
 <!--               </div>-->

 <!--               <div class="item">-->
 <!--                   <img src="https://www.baleenmedia.com/assets/images/SecondSlide.png" alt="Los Angeles" style="width:100%;">-->
 <!--                   <div class="carousel-caption">-->
 <!--                       <H1 style = " position: absolute;Bottom: 650px;">-->
 <!--                           <B>Creative, Passionate & Winning freakish content creating Advertising Company in Chennai.</H1></B>-->
 <!--                           <p class="justify" style = "position: absolute;Bottom: 250px;"> Meet the wondrous Advertising Agency in Chennai Baleen Media rising as a prominent Advertising Agency focused on creative and excellent Newspaper Advertisement, Television/ Radio Advertisement, Bus/ Auto Advertisement, Internet-->
 <!--                               & Social Media Promotions in Chennai. With other basic services, that helps your brands win through the competitors in the industry. There are not enough words to describe our work all in one for which you need to know-->
 <!--                               us more by connecting our experts waiting to guide you and bring your brand on top or go through our website tour. <br> Know more about our best services for you and experience wholesome brand growth.</p>-->
                    
 <!--                               <div class="ConsultYou-btn">-->
 <!--                              <a class="border-btn" href="contact.php" style="font-size: 20px;Bottom: 150px;" >Contact Us</a> -->
 <!--                              <a class="border-btn" href="rfq.php"style="font-size: 20px;Bottom: 150px;" >Call Back</a>-->
 <!--                           </div> -->
 <!--                               </div>-->
 <!--               </div>-->

 <!--               <div class="item">-->
 <!--                   <img src="https://www.baleenmedia.com/assets/images/ThirdSlide.png" alt="Los Angeles" style="width:100%;">-->
 <!--                   <div class="carousel-caption">-->
 <!--                       <H1 style = " position: absolute;Bottom: 650px;">-->
 <!--                           <B> Warm Welcome from the Artistic Team to the topmost leading Ad Agency in Chennai.</H1></B>-->
 <!--                           <p class="justify" style = " position: absolute;Bottom: 250px;"> Meet the wondrous Advertising Agency in Chennai Baleen Media rising as a prominent Advertising Agency focused on creative and excellent Newspaper Advertisement, Television/ Radio Advertisement, Bus/ Auto Advertisement, Internet-->
 <!--                               & Social Media Promotions in Chennai. With other basic services, that helps your brands win through the competitors in the industry. There are not enough words to describe our work all in one for which you need to know-->
 <!--                               us more by connecting our experts waiting to guide you and bring your brand on top or go through our website tour. <br> Know more about our best services for you and experience wholesome brand growth.</p>-->
 <!--                               <div class="ConsultYou-btn">-->
 <!--                              <a class="border-btn" href="contact.php" style="font-size: 20px;Bottom: 150px;" >Contact Us</a> -->
 <!--                              <a class="border-btn" href="rfq.php"style="font-size: 20px;Bottom: 150px;" >Call Back</a>-->
 <!--                           </div> -->
 <!--                           </div>-->
 <!--               </div>-->

 <!--           </div>-->

 <!--           <a class="left carousel-control" href="#myCarousel" data-slide="prev">-->
 <!--               <span class="glyphicon glyphicon-chevron-left"></span>-->
 <!--               <span class="sr-only">Previous</span>-->
 <!--           </a>-->
 <!--           <a class="right carousel-control" href="#myCarousel" data-slide="next">-->
 <!--               <span class="glyphicon glyphicon-chevron-right"></span>-->
 <!--               <span class="sr-only">Next</span>-->
 <!--           </a>-->
 <!--       </div>-->
         <!-- </div> 
     </div> -->
 <!--   </section>  -->
    <!-- /.banner -->
 <!--   <div class="empty-space" style="height: 110px"></div>-->
    <!-- /.empty-soace -->
    <!-- about-section -->
    <section class="about-section_top img-fluid " >
        <div class="container">
            <div class="row float-right">
                <div class="col-lg-12 col-sm-12 mx-auto"> 
                   <div class="about-content_top ">
                        <div class="">
                            <h1>Massive Advertising At <strong>Minimal</strong> cost</h1>
                            <p>
                                Finally, You Have Reached Chennai's Best Advertising Agency.
                            </p>
                            <!-- <div class="ConsultYou-btn">
                                <a href="about.php">Read More</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    
    <section class="about-section_about img-fluid " >
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 col-sm-12 mx-auto "> 
                   <div class="about-content_top text-center float-left">
                        <div class="wpb_wrapper_top">
                            <h1>Advertising Company in Chennai - About Baleen Media</h1>
                            <p>
                                Baleen media is a well-known advertising agency in Chennai that provides services like News paper Advertising, Radio Advertising, Television Advertising, Bus/Auto Advertising, Mobile Van Advertising, No Parking Board Advertising, Lamp Post Advertising & Local Cable TV Advertising. Backed up by the team with 20+ years of experience in the advertising industry. Baleen Media is known for its quality & commitment through a systematic and professional approach. Baleen Media is one of the Best advertising Companies in Chennai. Client-Requirement understanding is its strength. Baleen media renders its services all over India for Above The Line (ATL) Activities. Similarly, for Below The Line (BTL) activities, it renders its services in Chennai & various cities & Towns of Tamilnadu.
                            </p>
                            <div class="ConsultYou-btn">
                                <a href="about.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- <section class="about-section " >
        <div class="container-fluid">
            <div class="row">
                <div class="row-lg-8 row-sm-12 mx-auto ">
                <img src="assets/images/winning.jpg" class="rounded mx-auto d-block float-left" alt="intro">
                    <div class="about-content text-center  ">
                    
                        <div class="wpb_wrapper ">
                            <h1>Advertising Company in Chennai - About Baleen Media</h1>
                            <p>
                                Baleen media is a well-known advertising agency in Chennai that provides services like News paper Advertising, Radio Advertising, Television Advertising, Bus/Auto Advertising, Mobile Van Advertising, No Parking Board Advertising, Lamp Post Advertising & Local Cable TV Advertising. Backed up by the team with 20+ years of experience in the advertising industry. Baleen Media is known for its quality & commitment through a systematic and professional approach. Baleen Media is one of the Best advertising Companies in Chennai. Client-Requirement understanding is its strength. Baleen media renders its services all over India for Above The Line (ATL) Activities. Similarly, for Below The Line (BTL) activities, it renders its services in Chennai & various cities & Towns of Tamilnadu.
                            </p>
                            <div class="ConsultYou-btn">
                                <a href="about.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /.about-section -->
    <!--<div class="empty-space" style="height: 130px"></div>-->
    <!-- /.empty-soace -->

    <!-- <section>
        <div class="container">
            <div class="contact-info">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="contact-info-bg">
                            <li class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-info-text">
									<p><b>OFFICE ADDRESS</b></p>
                                    <p>No.53 and 54, Ground Floor, Mosque Street,</p>
                                    <p>West Saidapet, Chennai-15, India. </p>
									<p>Mon - Sat</p>
                                    <p>9.30am - 6.30pm</p>
                                </div>
                            </li>
							<li class="contact-info-item"> 
                                <div class="contact-info-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-info-text">
									<p><b>Branch Office</b></p>
                                    <p>No: 5,Bharathi Street,</p>
                                    <p>Radha Nagar,</p>
                                    <p>Chromepet, Chennai-44</p>
									<p>Mon - Sat</p>
                                    <p>10.00am - 6.00pm</p>
                                </div>
                            </li>                          
                            <li class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p>Call Us</p>
                                    <p>
                                        <a href="tel: 9566031113">
                                           +91 95660  31113</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->   
    <!-- <div class="empty-space" style="height: 120px"></div> -->

 
<!-- <div class="empty-space" style="height: 100px"></div> -->
    <!-- /.empty-soace -->
    <!-- section title starts -->
     <section class="WhatWeDo ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <div class="title ">
                        <h2 style="font-size: 40px;"><B>WHAT WE DO </B></h2>
                    </div>                    
                </div>
                <!-- section_title starts -->
            </div>
        </div>
    </div>
    <!-- /.section title -->
    <!-- .empty-soace -->
    <div class="empty-space" style="height: 50px"></div>
    <!-- /.empty-soace -->
    <!-- service -->
    <div class="container  ">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="newspaper-advertisement-agency-in-chennai.php">
                            <i class="fa fa-fw fa-newspaper-o fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content  ">
                        <a href="newspaper-advertisement-agency-in-chennai.php">
                        <h4>News Paper and Magazine Ads </h4>
                        <p style="font-size: 15px;color:white;"> Print media is one of the powerful ways to reach an audience. </p>
                        </a>
                        <!-- <div class="ConsultYou-btn"> -->
                                 <!-- <a class="border-btn" href="rfq.php">Call Back</a> 
                             </div>-->  
                            <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen
                        </a>                                                                       
                    </div>

                </div>
            </div>
             <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="tv-advertisement-agency-in-chennai.php">
                            <i class="fa fa-fw fa-television fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content  ">
                        <a href="tv-advertisement-agency-in-chennai.php">
                            <h4> Television Ads </h4>
                            <p style="font-size: 13px;color:white;">Creates a remarkable impact within the audience with 
                            the help of creative videos & Graphics. </p>
                        </a>
                        <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen
                        </a>
                     </div>                    
                </div>
            </div>  
              <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="radio-advertisement-agency-in-chennai.php">
                            <i class="fa fa-fw fa-microphone fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content  ">
                        <a href="radio-advertisement-agency-in-chennai.php">
                            <h4>Radio Ads </h4>
                            <p style="font-size: 14px;color:white;">Attracts a good amount of reach through expressive 
                            voice – jingles at exact time.
                            
                            </p>
                        </a>
                        <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen
                        </a>                         
                    </div>                    
                </div>
            </div>           
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="paperinsert-advertisement-agency-in-chennai.php">
                            <i class="fa fa-fw fa-book fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content  ">
                        <a href="paperinsert-advertisement-agency-in-chennai.php">
                        <h4>Paper Inserts</h4>
                        <p style="font-size: 16px;color:white;">This action catches an instant 
                        attention of newspaper readers.
                        
                        </p>
                        </a>   
                        <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen
                        </a>                       
                    </div>                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="bus-advertisement-agency-in-chennai.php">
                            <i class="fa fa-fw fa-bus fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content  ">
                        <a href="bus-advertisement-agency-in-chennai.php">
                            <h4> Bus Back Panel Ads</h4>
                            <p style="font-size: 15px;color:white;" >It is a dominating 
                            Media display.
                            
                            </p>
                        </a>   
                        <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank"style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen
                        </a>                       
                    </div>                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="auto-advertisement-agency-in-chennai.php">
                            <i class="fa fa-fw fa-car fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content  ">
                        <a href="bus-advertisement-agency-in-chennai.php">
                            <h4> Auto Back Panel Ads</h4>
                            <p style="font-size: 15px;color:white;" >It is a dominating 
                            Media display.
                            
                            </p>
                        </a>   
                        <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank"style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen
                        </a>                       
                    </div>                    
                </div>
            </div>
            <!-- <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="lamppost.php">
                            <i class="fa fa-fw fa-shower fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content  text-white  text-white">
                        <a href="lamppost.php">
                        <h4>Lamp Post Banner</h4>
                        <p>This Road-side marketing tool is effective for pulling</p>
                        </a>
                    </div>                    
                </div>
            </div> -->
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="noparking-advertisement-agency-in-chennai.php">
                            <i class="fa fa-fw fa-ban fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content  ">
                        <a href="noparking-advertisement-agency-in-chennai.php">
                        <h4>No Parking Board</h4>
                        <p style="font-size: 15px;color:white;">An effective way to target the local audience & register.</p>
                        </a>  
                        <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank"style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen
                        </a>                        
                    </div>                    
                </div>
            </div>    
            <!--  <div class="col-lg-3 col-sm-6">-->
            <!--    <div class="service-item">-->
            <!--        <div class="service-icon">-->
            <!--            <a href="digitalmarketing-advertisement-agency-in-chennai.php">-->
            <!--                <i class="fa fa-fw fa-facebook-official fa-spin-hover"> </i>-->
            <!--            </a>-->
            <!--        </div>-->
            <!--        <div class="service-item-content  text-white  text-white">-->
            <!--            <a href="digitalmarketing-advertisement-agency-in-chennai.php">-->
            <!--                <h4>Digital Marketing</h4>-->
            <!--                <p style="font-size: 15px;">To build your business effectively through social media platform.</p>-->
            <!--            </a>     -->
            <!--            <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank" style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen-->
            <!--            </a>                       -->
            <!--        </div>                    -->
            <!--    </div>-->
            <!--</div>                      -->
                 
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="theatre-advertisement-agency-in-chennai.php">
                            <i class="fa fa-fw fa-film fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content ">
                        <a href="theatre-advertisement-agency-in-chennai.php">
                            <h4>Cinema Theatres Ads </h4>
                            <p style="font-size: 15px; color:white;">To play an impressive ad role through visual content.</p>
                        </a>
                        <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank"style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen
                        </a>                         
                    </div>                    
                </div>
            </div> 
            
            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="noparking-advertisement-agency-in-chennai.php">
                            <i class="fa fa-fw fa-ban fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content  ">
                        <a href="noparking-advertisement-agency-in-chennai.php">
                        <h4>No Parking Board</h4>
                        <p style="font-size: 15px;color:white;">An effective way to target the local audience & register.</p>
                        </a>  
                        <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank"style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen
                        </a>                        
                    </div>                    
                </div>
            </div>    

            <div class="col-lg-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon">
                        <a href="noparking-advertisement-agency-in-chennai.php">
                            <i class="fa fa-fw fa-ban fa-spin-hover"></i>
                        </a>
                    </div>
                    <div class="service-item-content  ">
                        <a href="noparking-advertisement-agency-in-chennai.php">
                        <h4>No Parking Board</h4>
                        <p style="font-size: 15px;color:white;">An effective way to target the local audience & register.</p>
                        </a>  
                        <a class="Whatsapp social-icon" href="https://wa.me/919566031113" title="Whatsapp" target="_blank"style="font-size: 15px;"><i class=" fa-lg fa fa-whatsapp"></i>  Chat With Baleen
                        </a>                        
                    </div>                    
                </div>
            </div>    

            
         </div>
    </div> 
    </section> 
     <!-- <div class="empty-space" style="height: 120px"></div> -->
        <!-- <div class="row justify-content-center">
    <div class="col-lg-3">       
     <div class="ConsultYou-btn">
      <a href="rfq.php">Call Back</a>
      </div> 
       <input type="button"  value="Call Back"  window.href.location ="rfq.php" style="background-color:#4CAF50; font-size:20px" />
  </div>
</div> -->
<section class="WhatWeDo ">
	<div class="container">
       
		<div class="row">            
            <div class="col-md-12">
                <div class="empty-space d-xl-none d-lg-none" style="height: 50px"></div>
                <h2 style="font-size:40px;"><strong>FAQs</strong></h2><br>
            </div>
        </div>
    </div>
	
	<div class="container">
        <div class="row">
            <div class="col-md-12 ">
                            <!--<div class="col-md-12 offset-md-1">-->

                <div id="accordion-1" class="accordion">
                    <div class="card">
                        <div class="card-header" id="heading-1-1">
                            <h5 style="font-size:20px;" data-toggle="collapse" data-target="#collapse-1-1" aria-controls="collapse-1-1" aria-expanded="true">Why should I choose Baleenmedia over other advertising companies in Chennai?<span class="fa fa-chevron-down"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-1" class="collapse show" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                            <div style="font-size:16px;" class="card-body">Baleenmedia stands out for its innovative approach, dedicated client service, and proven track record of delivering impactful advertising agency in Chennai. With a team of experienced professionals and a commitment to excellence, they strive to exceed client expectations and achieve measurable results in advertising effectiveness.</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-2">
                            <h5 style="font-size:20px;" data-toggle="collapse" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">What services does Baleenmedia offer as an advertising agency in Chennai? <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                            <div style="font-size:16px;" class="card-body">Baleenmedia specializes in a wide range of advertising services including digital marketing, branding, social media management, creative content development, and media planning. They tailor strategies to meet diverse client needs, aiming to enhance brand visibility and engagement effectively.</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-3">
                            <h5 style="font-size:20px;" data-toggle="collapse" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">How can Baleenmedia help my business grow?<span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                            <div style="font-size:16px;" class="card-body">Baleenmedia leverages its expertise in digital and traditional advertising to enhance your brand visibility, attract more customers, and increase your market reach. They focus on driving measurable results through strategic campaigns and creative solutions.</div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    </section>
    

<!-- section title starts -->
<section class="WhatWeDo ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <div class="title">
                    <h2 style="font-size: 30px;"><B> Few of Our Clients </B></h2>
                    </div>                    
                </div>
                <!-- section_title starts -->
            </div>
        </div>
    </div>
    <!-- /.section title --> 
    
    <section class="section-padding" style="padding: 20px;">
        <div class="container">       
           <section class="customer-logos slider">
              <div class="slide"><img src="assets\images\portfolio\client\CanaraBank.jpg" alt="Camera Bank"></div>
              <div class="slide"><img src="assets\images\portfolio\client\ACEEngineering.jpg" alt="ACEEngineering"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\Afton.jpg" alt="Afton"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\AssetTreeHomes.jpg" alt="AssetTreeHomes"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\BIG3.jpg" alt="BIG3"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\Venper.jpg" alt="Venper"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\StarBiriyani.jpg" alt="StarBiriyani"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\UBER.jpg" alt="UBER"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\HandloomKing.jpg" alt="HandloomKing"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\MNEyeHospital.jpg" alt="MNEyeHospital"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\Mahsa.jpg" alt="Mahsa"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\PINK.jpg" alt="PINK"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\PrasanthHospitals.jpg" alt="PrasanthHospitals"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\RepcoBank.jpg" alt="RepcoBank"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\sivetCollege.jpg" alt="sivetCollege"></div>
              <div class="slide"><img src="assets\images\portfolio\client\Sky pix.jpg" alt="Sky pix"></div>  
           </section>   
           <section class="section-padding" style="padding: 20px;">
        <div class="container">       
           <section class="customer-logos slider">
              <div class="slide"><img src="assets\images\portfolio\client\Wootunutrition.jpg" alt="Wootunutrition"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\AaradyaaGold.jpg" alt="AaradyaaGold"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\CrescentHeights.jpg" alt="CrescentHeights"></div>
              <div class="slide"><img src="assets\images\portfolio\client\UBEREATS.jpg" alt="UBEREATS"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\Vetri Home Appliance.jpg" alt="Vetri Home Appliance"></div>
              <div class="slide"><img src="assets\images\portfolio\client\MGP.jpg" alt="MGP"></div>
          
           </section>       
        </div>
    </section>  
        </div>
    </section>
    </section>
    <!-- /.service -->
    <!-- .empty-soace -->
    <!-- /.empty-soace 
    <section class="container minus-margin">
        <div class="row justify-content-center">
            <div class="col-sm-10"> 
                <div class="video-popup">
                    <div class="video-popup-overlay">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=EqG2ZCj1deI"><i class="fa fa-fw fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->     

    <!-- banner -->
   
    <!-- <div class="empty-space" style="height: 130px"></div>

     <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="about-border">
                        <img class="img-fluid" src="assets/images/projects/NewsPaper.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-sm-12">
                    <div class="about-content">
                        <div class="wpb_wrapper">
                            <h2><strong> Promising Newspaper Advertising agency based in Chennai </strong></h2>
                            <p class="justify">Baleen media is a leading <H2> Newspaper advertising agency in Chennai</h2> but works all over India is also awarded for the best Ad agency in Chennai for shopping category by Times of India in 2019. This is one of the remarkable achievement in the journey.
Being a multi brand newspaper agency, we can help our customers to place their Ads in Daily Thanthi, Dinamalar, Times of India, The Hindu, Dinakaran, Malayala Manorama, Eenadu, Trinity Mirror, Deccan Chronicle, Indian Express, Malai Malar, Malai Chudar, Makkal Kural, News today, Talk Media, etc.,
However we are the one known for the best for Daily Thanthi advertising agency in Chennai & Times of India advertising agency in Chennai. We are working passionately to be on top 10 advertising agencies in Chennai. 
We are swift enough to help our customers in urgent/important occasions like publishing Public Notice Advertisement in newspaper, Name Change Advertisement in newspaper, Document Missing Ads in Newspaper. Our staff’s expertise will help you to do the same in lower price & get guidance on formalities too.</p>

                            <h2><strong>Top most Magazine Advertisements in Chennai </strong></h2>
                            <p class="justify"> Baleen Media also deal with publishing Ads in Magazines like Kumudham, Kungumam, Aananda Vikadan, Femina, Puthiya Thalaimurai, etc.,</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
     <div class="empty-space" style="height: 130px"></div>

     <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="about-border">
                        <img class="img-fluid" src="assets/images/projects/Tv.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-sm-12">
                    <div class="about-content">
                        <div class="wpb_wrapper">
                            <h2><strong> Best TV/ Radio Advertising Company in Chennai  </strong></h2>
                            <p class="justify">There is a maximum number of counts when it comes to people watching Television or listening Radio and with that this two factors play the best role in the marketing medium. We work with almost all the leading TV channels in Tamil language like Doordarshan, Sun TV, Vijay TV, Polimer News, Puthiya Thalaimurai, Thanthi TV, etc., For FM Radio Advertisements, we work in coordination with our customers on creating innovative jingles & ensure it is being published in prime/ non – prime times as per customer budget & needs. We stand in rank of one of the best FM Radio Advertising Agency in Chennai. 
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <div class="empty-space" style="height: 130px"></div>

     <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="about-border">
                        <img class="img-fluid" src="assets\images\desiner.jpg" alt="img">
                    </div>
                </div>
                 <div class="col-lg-5 offset-lg-1 col-sm-12">
                    <div class="about-content">
                        <div class="wpb_wrapper">
                            <h2><strong>Creative Logo Designers in Chennai  </strong></h2>
                            <p class="justify"> We always want our Clients to receive very innovative logo designs. Hence we have we are co- working with few of the promising professional logo designers which are not in house but limitless creative. 
We take care of your “A to Z” Promotions/Branding right from starting a company with a Simple Logo Design till it reaches out the whole India in all means of advertising media as well professional growth. We grow with you.
 </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <div class="empty-space" style="height: 130px"></div>

     <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="about-border">
                        <img class="img-fluid" src="assets/images/projects/BusBranding.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-sm-12">
                    <div class="about-content">
                        <div class="wpb_wrapper">
                            <h2><strong> Most known Bus/Auto/Van Advertising media in Chennai  </strong></h2>
                            <p class="justify">Baleen Media stands in one of the most innovative & creative outdoor advertising agency in Chennai. Which includes Bus, Auto, and Mobile Van poster advertising media.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <div class="empty-space" style="height: 130px"></div>

     <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="about-border">
                        <img class="img-fluid" src="assets\images\projects\Digital.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-sm-12">
                    <div class="about-content">
                        <div class="wpb_wrapper">
                            <h2><strong> Summary </strong></h2>
                            <p class="justify">When you come across us, we guarantee that you will definitely put us in your favorite list of advertising company. We believe and work for growth, for our precious clients as well us and we know that our growth is of course happening when our clients grow their business.
Working together always results quicker than that of one way so as we said we grow with you let's keep going on this journey. </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    
<?php
include('include/Homefooter.php');
?>