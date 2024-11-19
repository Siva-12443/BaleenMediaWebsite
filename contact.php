<?php
include('include/top.php');
?>
<style>
    @media screen and (min-width:1204px) {
       body .about-section_about h1 {
        font-family: "poppins", sans-serif;
         
            text-align:left;
            font-size: 60px;
            font-weight:500;
            /* text-align:right; */
            border-bottom:2px solid black;
            /* text-wrap:wrap; */  
      }
      body .about-section_about p {
        font-weight:500;
        font-size: 20.5px;
            
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
            font-size: 14px;
            font-weight:600;
            text-align:justify;
        }
        
        .about-section_about .about-img{
            margin-top:40px;
        }
      .wave{
            width: 100%;
        }
        .contact-detials{
         padding:50px 0px;
        }
        .contact-card{
            display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
            /* background-color: #a783ed; */
          border-radius:30px;
          padding:10px;
          text-align:center;
          margin-bottom:20px;   
        }
        .contact-card h1 {
            font-family:"poppins";
            font-size:30px;
            font-weight:bold;
            margin-top:10px;
        }
        .contact-card p{
            font-size:18px;
            font-weight:600;
            color:#454343;    
        }
        .faback{
            background-color:white;
            padding:35px;
            width:150px;
            height:150px;
            border-radius:80px;
            margin:20px 0px;
            
        }

        .contact-form{
            
            
            background-color:#ccc9e3; 
        }
        .contact-form h2{
            font-family:Montserrat;
            font-size:30px;
            font-weight:600;
            border-bottom:1px solid; 
            margin-bottom:20px;
        }
        .form-group{
            width:100%;
            font-size:20px;
        }
        .form-group input {
            font-size:15px;
            font-weight:600;
            border-radius:10px;
            padding:20px 12px;
        }
        .form-group textarea{
            font-size:17px;
            font-weight:600;
            border-radius:10px;
            margin-bottom:20px;
        }
        #contactForm{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            
        }
        #contactForm button{
            font-size:20px;
            font-weight:bold;
            padding:15px;
            width:50%;
            background:#7d50d3;
        }
        #contactForm button:hover{
            background:#905ef1;
            color:white;
            box-shadow:0 2px 10px gray;
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
   
        <!-- ----------------------contact-detials ------------------------------->
        <section class="contact-detials">
     <div class="container">
        <div class="row">
            <!--------------------------------------------------- card1 -->
            <div class="col-md-4">
                <div class="contact-card" style=" background-color: #db88e866;">
                    <h1>Mobile</h1>
                    <img src="assets/images/mobile.png" alt="" class="img-fluid">
                    <!-- <div class="faback">
                    <i class="fa-solid fa-phone " style="color: #8161bf; font-size:70px; "></i>
                    </div> -->
                    <p>Mobile : 95660 31113</p>
                </div>
            </div>
            <!-- -------------------------------------------------------card2 -->
            <div class="col-md-4">
                <div class="contact-card" style=" background-color: #a5f5ec78;">
                    <h1>E-Mail</h1>
                    <img src="assets/images/email.png" alt="" class="img-fluid">
                    <!-- <div class="faback">
                    <i class="fa-solid fa-envelope " style="color: #8161bf; font-size:70px; "></i>
                    </div> -->
                    <p>Mail address: leenah.grace@baleenmedia.com</p>
                </div>
            </div>
            <!-- ---------------------------------------------------------card-3 -->
            <div class="col-md-4">
                <div class="contact-card" style=" background-color: #f7505e52;">
                    <h1>Office Address</h1>
                    <img src="assets/images/Address.png" alt="" class="img-fluid">
                    <!-- <div class="faback">
                    <i class="fa-solid fa-map-location-dot " style="color: #8161bf; font-size:70px; "></i>
                    </div> -->
                    <p>Address : No.32, Kasthuribai Nagar,
3rd cross street, Adyar,
Chennai - 600020.
(Nalli Silks Opposite)
</p>
                </div>
            </div>
            <!-- ---------------------------------xx -->
        </div>
     </div>
     </section>
     <!-- ---------------------------------------xxxxxx---------------------- -->
    <!-- -----------------------------------contact-form-------------------- -->
  
     <!-- -------------------------------------xxxxxx -->
      <!-------------------------------------demo -->
      <section class="contact-form">
      <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 form-container">
        <h2 class="form-heading">INTERACT WITH EMAIL</h2>
        <form id="contactForm">
          <div class="form-group">
            <label for="name">Your Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="email">Email address<span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="mobile">Mobile<span class="text-danger">*</span></label>
            <input type="tel" class="form-control" id="mobile" placeholder="Enter your mobile number" required>
          </div>
          <div class="form-group">
            <label for="message">Message<span class="text-danger">*</span></label>
            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" required></textarea>
          </div>
          <button type="submit" class="btn  btn-block mb-4">Submit</button>
        </form>
      </div>
    </div>
  </div>
  </section>

  <div class="empty-space" style="height:100px; background-image: linear-gradient(#ccc9e3, #f8f9fa););"></div>
      <!-- -------------------------------xxxxxx -->
    <!------------------------------------------- script -->
    <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
      event.preventDefault();

      // Get form values
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const mobile = document.getElementById('mobile').value;
      const message = document.getElementById('message').value;

      // Mailto link construction
      const mailtoLink = `mailto:leenah.grace@baleenmedia.com?subject=Message from ${name}&body=Name: ${name}%0AEmail: ${email}%0AMobile: ${mobile}%0AMessage: ${message}`;

      // Open the mail client with the form data
      window.location.href = mailtoLink;
    });
  </script>
    <!-- ---------------xxxxxx----------------------- -->
<?php
include('include/footer.php');
?>