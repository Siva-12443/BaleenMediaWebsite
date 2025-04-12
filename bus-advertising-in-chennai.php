<?php
include('include/top_bus.php');
?>

<style>
    /* =================================================================================banner css rgba(241, 234, 254, 0.7), rgba(224, 206, 253, 0.7)*/ 
    .service-banner{
        background: linear-gradient(-45deg, #8F87F1, #C68EFD, #E9A5F1, #FED2E2);//#F6B2E1, #F1EAFEB3, #E0CEFDB3, #F7E1FF, #EFD9F9, #DCC8F5, #C6B3F0, #58126A);
        background-size: 400% 400%;
        animation: gradient 20s ease infinite;
        background-position: center;
        padding-top:30px;
        border:0px;
        justify-content: space-evenly;
    }

    @keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    25% {
        background-position: 50% 100%;
    }
    50% {
        background-position: 100% 50%;
    }
    75% {
        background-position: 50% 0%;
    }
    100% {
        background-position: 0% 50%;
    }
    }
.service-banner h1 {
    font-family: "Poppins", sans-serif;
    text-align: left;
    font-size: 22px;
    font-weight: 600;
    border-bottom: 2px solid black;
    padding-bottom: 10px;
    margin-bottom: 20px;
}
.service-banner p{
    font-size:14px;
    font-weight:bold;
    font-family: "Nunito", sans-serif;
    text-align:justify;
    line-height:1.4;
    color:#3d3d3d;
}

@media (min-width: 1000px){
    .row1{
    display:flex;
   align-items:center;
   justify-content:center;
   max-width: 80%;
}
.service-banner h1{
    font-family: "poppins", sans-serif;
    text-align:left;
    font-size: 30px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}
.service-banner p{
    font-size:16px;
    font-weight:bold;
    font-family: "Nunito", sans-serif;
    text-align:justify;
    line-height:1.6;
    color:#3d3d3d;
}

}

.wave{
    width:100%;
}
/* =================================================================================banner css end*/
/* =================================================================================service-about css*/
.service-bg {
    display: flex;
    background: linear-gradient(white, #ede3fd);
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding-bottom: 20px; 
}

.service-bg h2{
    font-family: "poppins", sans-serif;
    text-align: center;
    font-size: 30px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}

.service-bg p{
    font-size:16px;
	font-weight:550;
	padding:0px 20px;
	font-family: "Nunito", sans-serif;
	color:black;
}

.service-bg h3{3
    font-family: "poppins", sans-serif;
    text-align: left;
    padding:0px 20px;
    font-size: 24px;
    font-weight:600;
    margin: 10px 10px;
}

.service-about-bg{
	background: linear-gradient(#ede3fd,white);
	display:flex;
	flex-direction:row;
    max-width: 100%;
	justify-content:center;
	align-items:center;
	padding-bottom:20px;
}

.service-about-bg h2{
    font-family: "poppins", sans-serif;
    margin: 10px 10px;
    text-align: center;
    font-size: 30px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}

.service-about-bg h3{3
    font-family: "poppins", sans-serif;
    text-align: left;
    padding:0px 20px;
    font-size: 24px;
    font-weight:600;
    margin: 10px 10px;
}

.head-text {
    font-family: "poppins", sans-serif;
    margin: 10px 10px;
    text-align: center;
    font-size: 30px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}

.service-about-bg p, li{
	font-size:18px;
    margin: 10px 10px;
	font-weight:550;
	padding:0px 20px;
	font-family:nunito;
    text-align: left;
	color:black;
}
.service-about-bg span{
	font-family: "Gloria Hallelujah", cursive;
    font-weight: 600;
    font-style: italic;
    font-size: 18.5px;
	
}
.We-work-with-bg{
	background:#fffbf5;
}
.section-padding{
    zoom:40%;
}
@media (min-width:1000px){
    .section-padding{
    zoom:150%;
}  
}
@media (min-width: 580px) {
    .section-padding{
    zoom:160%;
}  
}
.img-cards {
    padding: 20px 20px; 
}

</style>

<!-- ==========================banner ================================-->
<section class="service-banner"> 
        <div class="row1 justify-content-between">
            <div class="col-md-6">
                <h1>Bus Advertising in Chennai - MTC Bus Branding by Baleen Media</h1>
                <p>
                    Bus Advertising in Chennai is one of the most powerful and cost-effective outdoor marketing strategies for brands looking to reach a large local audience. At Baleen Media, we specialize in MTC Bus Branding services that help businesses promote their products and services across high-traffic routes in Chennai. With vibrant bus back ads, side panel ads, and full bus wraps, we create maximum visibility for your brand 24/7.
                </p>
            </div>
            <div class="col-md-6">
                    <img src="assets/images/BusPNG4.webp" alt="Bus Advertising in Chennai" class="img-fluid pb-5 pt-5">
            </div>
        </div>
    <img src="assets/images/wave1.png" class="wave"> 
</section>

<div class="empty-space" style="height:50px;background: white;"></div> <!--background: linear-gradient(white,#ede3fd);-->

<section class="service-bg">
    <div class="col-md-6">
        <img src="assets/images/What-is-bus-advertising.jpg" alt="What is Bus Advertising" class="img-fluid pb-5 pt-5">
    </div>
    <div>
        <h2>What is Bus Advertising?</h2>
        <p>Bus Advertising is a powerful outdoor marketing solution that helps brands reach thousands of potential customers daily across prime locations in Chennai. At Baleen Media, we offer professional MTC Bus Branding services including full bus wraps, side panel ads, and government-approved back panel advertising. With extensive route coverage and high visibility, bus advertising ensures your brand stays in front of your target audience 24/7 at an affordable cost.</p>
    </div>
</section>

    <!-- Benefits Section -->
    <section id="benefits" class="service-about-bg">
    <div>
      <h2 >Benefits of Bus Advertising in Chennai</h2>
      <h3>✅ High Visibility and Brand Exposure</h3>
      <p>Bus ads offer extensive visibility as they traverse busy streets and popular routes. With Chennai's high traffic density, your message is seen by a diverse audience every day.</p>
      <h3>✅ Cost-Effective Marketing</h3>
      <p>Compared to traditional billboards or print media, bus advertising delivers a high return on investment. Its cost efficiency makes it ideal for businesses of all sizes.</p>
      <h3>✅ Targeted Local Reach</h3>
      <p>Focusing on Chennai ensures that your brand reaches local customers, especially when you use localized terms like "MTC" and "Chennai City Bus Ads." This hyperlocal targeting drives higher engagement and conversion rates.</p>
      <h3>✅ Continuous Exposure</h3>
      <p>Buses operate throughout the day, ensuring that your brand message is consistently delivered to potential customers across various times and locations.</p>
    </div>
    <div>
      <img src="assets/images/benefits-of-bus.png" alt="Benefits of Bus Advertising in Chennai" class="img-fluid pb-5 pt-5">
    </div>
    </section>

<section class="service-bg" style="flex-direction: column;">
    <h2 class"head-text">Types of Bus Ads We Offer</h2>  
    <div class="service-bg">
        <div class="row img-cards">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4 img-cards">
                <div class="card h-100 shadow-sm">
                    <img src="assets/images/portfolio/work/work10.jpg" class="card-img-top img-fluid" alt="Bus Back Advertising">
                    <div class="card-body text-center">
                        <h3 class="card-title">Bus Back Advertising</h3>
                        <p class="card-text">Maximize visibility with eye-catching ads on the back panel of city buses.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4 img-cards">
                <div class="card h-100 shadow-sm">
                    <img src="assets/images/portfolio/work/work18.jpg" class="card-img-top img-fluid" alt="Full Bus Advertising">
                    <div class="card-body text-center">
                        <h3 class="card-title">Full Bus Advertising</h3>
                        <p class="card-text">Turn the entire bus into a moving billboard for maximum brand impact.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4 img-cards">
                <div class="card h-100 shadow-sm">
                    <img src="assets/images/portfolio/work/work19.jpg" class="card-img-top img-fluid" alt="Full Bus Advertising">
                    <div class="card-body text-center">
                        <h3 class="card-title">Full Bus Advertising</h3>
                        <p class="card-text">Engage audiences from every angle with complete bus wrap advertising solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="why-choose" class="service-about-bg">
    <div class="col-md-6">
      <h2>Why Choose Baleen Media for MTC Bus Ads?</h2>
      <p>Baleen Media is a trusted leader in bus advertising in Chennai, known for its creative approach and results-driven campaigns. Our expertise in MTC bus branding allows us to design ads that resonate with local commuters. By choosing us, you benefit from:</p>
      <ul>
        <li><strong>Expertise in Local Markets:</strong> Our deep understanding of Chennai’s transit routes and commuter behavior ensures optimal ad placement.</li>
        <li><strong>Creative Campaigns:</strong> We combine innovative design with strategic planning to create memorable ads that boost your brand.</li>
        <li><strong>Competitive Pricing:</strong> With affordable packages starting at just ₹7,500, you get premium service without breaking the bank.</li>
        <li><strong>Proven Results:</strong> Our campaigns have successfully increased brand visibility and customer engagement for numerous local businesses.</li>
      </ul>
    </div>
    <div >
        <img src="assets/images/why-choose-canva.png" class="img-fluid pb-5 pt-5" alt="Why Choose Baleen Media for MTC Bus Ads?">
    </div>
</section>

<section id="content-strategy" class="service-bg">
    <div class="col-md-6">
      <img src="assets/images/bus-route.png" alt="Popular Routes for Ads" class="img-fluid p-5"/>
    </div>
    <div>
      <h2>Content Strategy for Bus Advertising in Chennai</h2>
      <h3>Cost Factors in Chennai</h3>
      <p>When planning a bus advertising campaign, factors such as bus routes, ad duration, and design complexity influence the cost. In Chennai, prices vary based on the area and frequency of the ad display. Baleen Media offers transparent pricing models to suit various budget ranges.</p>
      
      <h3>Popular Routes for Ads</h3>
      <p>Our campaigns target high-traffic routes such as Anna Nagar, T Nagar, Velachery, and Adyar. These areas provide maximum exposure due to their dense commuter traffic, ensuring that your brand is seen by thousands every day.</p>
      
      <h3>Case Studies & Testimonials</h3>
      <p>Many local businesses have benefited from our bus advertising solutions. For example, a well-known retail brand reported a significant increase in foot traffic and sales after launching a campaign on Chennai city buses. Testimonials from our satisfied clients highlight our commitment to quality and results.</p>
      
      <h3>How to Book Ads</h3>
      <p>Booking your bus advertising campaign with Baleen Media is simple. Visit our <a href="/contact.php">Contact Us</a> page or call us directly at +91-9566031113 to discuss your requirements. Our team will work with you to design a custom campaign that meets your marketing objectives.</p>
    </div>
</section>

<div class="empty-space" style="height:100px; background-image: linear-gradient(#fffbf5, #f8f9fa);"></div> <!--background: linear-gradient(#fffbf5, #f8f9fa);-->

<?php
include('include/footer.php');
?>
