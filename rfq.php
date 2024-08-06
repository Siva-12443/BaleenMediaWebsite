<?php
include('include/top.php');
?>
    <!-- breadcrumb -->
    <section class="breadcrumb-banner breadcrumb-bnr-shadow">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb-title">
                        <h1>Call Back</h1>
                        <div class="breadcrumbs">
                            <div id="crumbs">
                                <a href="https://www.baleenmedia.com">Home</a> <i>»</i> <span class="active"> Let us call Your Mobile Number.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.breadcrumb -->


    <!-- .empty-soace -->
    <div class="empty-space" style="height: 30px"></div>
    <!-- /.empty-soace -->
    <!-- contact_form -->
    <div class="container">
        <div class="row">   
			<div class="col-md-4">
			</div>
            <div class="col-md-6 contact-form">
                <div class="row">					
					<form id="contactform_new" method="post" action="send-form-quotation.php">
						<div class="col-sm-12 form-group">
							<input type="text" id="name" name="name" onchange="Allowname()" class="form-control" placeholder="Your Name*" required="yes">
						</div>
						<div class="col-sm-12 form-group">
							<input type="text" id="email" name="email" onchange="Allowemail()" class="form-control" placeholder="Your Mail*" required="yes">
						</div>
						<div class="col-sm-12 form-group">
							<input type="text" id="mobile" name="mobile" onchange="Allowmobile()" class="form-control" placeholder="Your Mobile*" required="yes">
						</div>
						<div class="col-sm-12 form-group">
							<select class="form-control" required = "yes" name="service" >								
								<option>Select Service</option>								
								<option>Newspaper Advertisement</option>
								<option>Paper Insert</option>								
								<option>Busback Advertisement</option>
								<option>Noparking Board</option>
								<option>Television Advertisement</option>								
								<option>Radio Advertisement</option>																
								<option>Theatre Advertisement</option>																
								<!--<option>Digital Marketing</option>								-->
							</select>
						</div>
						<div class="col-sm-12 form-group">
							<button type="submit" name="submit" class="contact-form-btn"> Call Back </button>
						</div>
					</form>
                </div>
            </div>
			<div class="col-md-4">
			</div>
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