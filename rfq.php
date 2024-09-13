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
								<option>Bus Advertisement</option>
								<option>Noparking Board</option>
								<option>Television Advertisement</option>								
								<option>Radio Advertisement</option>																
								<option></option>																
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


    
   
        </div>
    </section>
        <div class="empty-space" style="height: 120px"></div>
    
    <!-- /.empty-soace -->

<?php
include('include/footer.php');
?>