<?php
include('include/top.php');
?>
<style>
    @media screen and (min-width:1204px) {
       body .about-section_about h1 {
        font-family: "poppins", sans-serif;
         
            text-align:left;
            font-size: 60px;
            font-weight:400;
            /* text-align:right; */
            border-bottom:2px solid black;
            /* text-wrap:wrap; */  
      }
      body .about-section_about p {
        font-weight:500;
        font-size: 18.5px;
            
        }
       body  .about-section_about span{
            font-family: "Gloria Hallelujah", cursive;
            font-weight: 700;
            font-style: italic;
            font-size: 35.5px;
            text-wrap:nowrap;   
        }
        body .about-section_about .about-img{
            margin-top:70px;
            margin-left:50px;
        }
        body .vmt{
            margin-top:80px;
        }
        
}
.about-section_about {
          /* background-attachment: fixed; */
          
         padding-top:50px;
          /* box-shadow: 0px 0px 5px #4d4c4c7a; */
          background-color:#F1EAFF;
      }
      .about-section_about h1 {
        font-family: "poppins", sans-serif;
            /* font-family: "Cormorant Upright", serif; */
            text-align:center;
            font-size: 50px;
            font-weight:500;
            /* text-align:right; */
            border-bottom:1px solid black;
            /* text-wrap:wrap; */
          
      }
      .about-section_about p {
        font-family:"poppins";
            font-size: 12.5px;
              
        }
        
        .about-section_about .about-img{
            margin-top:40px;
        }
      .wave{
            width: 100%;
        }
</style>
    <!-- breadcrumb -->
    <section class="about-section_about">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6 col-sm-12 ">
                    <h1>Contact Us</h1><br>
                    <p class="justify">We are the best advertising company/agency in Chennai and we are more than delighted to assist you and connect with you for this journey of growth.  </p>

                    

        
                </div><br>

                <div class="col-md-6 col-sm-12 ">
                    <img class="about-img" src="assets/images/contactus.png" style="width:100%;"  alt="img" >
                    
                </div>
            </div>
        </div>
        <div class="empty-space" style="height:80px;"></div>
    <img src="assets/images/wave1.png" class="wave ">
    </section>
    <!-- /.breadcrumb -->


    <!-- .empty-soace -->
    <div class="empty-space" style="height: 130px"></div>
    <!-- /.empty-soace -->
    <!-- contact_form -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="quick-contact">
                    <div class="quick-contact-border">
                        <div class="row">
                            <div class="col-sm-12 col-lg-3 text-center  align-self-center">
                                <i class="fa fa-3x fa-phone"></i>
                            </div>
                            <div class="col-sm-12 col-lg-9">
                                <ul>
                                    <li> Mobile : 95660 31113</li>                                                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quick-contact">
                    <div class="quick-contact-border">
                        <div class="row">
                            <div class="col-sm-12 col-lg-3 text-center  align-self-center">
                                <i class="fa fa-3x fa-envelope"></i>
                            </div>
                            <div class="col-sm-12 col-lg-9">
                                <ul>
                                    <li>leenah.grace@baleenmedia.com</li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quick-contact">
                    <div class="quick-contact-border">
                        <div class="row">
                            <div class="col-sm-12 col-lg-3 text-center  align-self-center">
                                <i class="fa fa-3x fa-map-marker"></i>
                            </div>
                            <div class="col-sm-12 col-lg-9">
                                <ul>
									<li><strong>OFFICE ADDRESS</strong></li>
                                    <li>No.32, Kasthuribai Nagar,</li>
                                    <li>3rd cross street, Adyar, </li>
                                    <li>Chennai - 600020.</li>
                                    <li>(Nalli Silks Opposite)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- <div class="quick-contact">
                    <div class="quick-contact-border">
                        <div class="row">
                            <div class="col-sm-12 col-lg-3 text-center  align-self-center">
                                <i class="fa fa-3x fa-map-marker"></i>
                            </div>
                            <div class="col-sm-12 col-lg-9">
                                <ul>
									<li><strong>Branch Office</strong></li>
                                    <li>No: 5,Bharathi Street,</li>
                                    <li>Radha Nagar,Chromepet, </li>
                                    <li>Chennai-600 044</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
           
        </div>
    </div>
     <div class="col-lg-4 offset-lg-3 col-sm-12 contact-form">
                <div class="row">
					<form id="contactform_new" method="post" action="send-form-email.php">
						<div class="col-sm-12 form-group">
							<input type="text" id="name" name="name" onchange="Allowname()" class="form-control" placeholder="Your Name*" required="yes">
						</div>
						<div class="col-sm-12 form-group">
							<input type="email" id="email" name="email" onchange="Allowemail()" class="form-control" placeholder="Your Mail*" required="yes">
						</div>
						<div class="col-sm-12 form-group">
							<input type="text" id="mobile" name="mobile" onchange="Allowmobile()" class="form-control" placeholder="Your Mobile*" required="yes">
						</div>
						<div class="col-sm-12 form-group">
							<textarea name="message" id="message" onchange="Allowmessage()" cols="40" rows="10" class="form-control" placeholder="Message" required="yes"></textarea>
						</div>
						<div class="col-sm-12 form-group">
							<button type="submit" name="submit" class="contact-form-btn">Send Message</button>
						</div>
					</form>
                </div>
            </div>
    <!-- /contact_form -->
    <!-- .empty-soace -->
 <div class="empty-space" style="height: 120px"></div>

<!-- section title starts -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <div class="title">
                        <h3 style="font-weight: 700">Few of Our Clients</h3>
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
              <div class="slide"><img src="assets\images\portfolio\client\CanaraBank.jpg"></div>
              <div class="slide"><img src="assets\images\portfolio\client\ACEEngineering.jpg"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\Afton.jpg"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\AssetTreeHomes.jpg"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\BIG3.jpg"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\Venper.jpg"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\StarBiriyani.jpg"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\UBER.jpg"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\HandloomKing.jpg"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\MNEyeHospital.jpg"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\Mahsa.jpg"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\PINK.jpg"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\PrasanthHospitals.jpg"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\RepcoBank.jpg"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\sivetCollege.jpg"></div>
              <div class="slide"><img src="assets\images\portfolio\client\Sky pix.jpg"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\SRM.jpg"></div>  
           </section>   
           <section class="section-padding" style="padding: 20px;">
        <div class="container">       
           <section class="customer-logos slider">
              <div class="slide"><img src="assets\images\portfolio\client\Wootunutrition.jpg"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\AaradyaaGold.jpg"></div>   
              <div class="slide"><img src="assets\images\portfolio\client\CrescentHeights.jpg"></div>
              <div class="slide"><img src="assets\images\portfolio\client\UBEREATS.jpg"></div>  
              <div class="slide"><img src="assets\images\portfolio\client\Vetri Home Appliance.jpg"></div>
              <div class="slide"><img src="assets\images\portfolio\client\MGP.jpg"></div>
          
           </section>       
        </div>
    </section>  
        </div>
    </section>
        <div class="empty-space" style="height: 120px"></div>
    <!-- /.empty-soace -->

<?php
include('include/footer.php');
?>