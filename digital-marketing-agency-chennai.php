<?php
include('include/top_digital_marketing.html');
?>
<style>
    /* =================================================================================banner css */ 
    .service-banner {
        background-image: linear-gradient(#f1eafe, #e0cefd, #c4a6fb);
        padding-top: 30px;
        border: 0px;
    }
    .service-banner h1 {
        font-family: "Poppins", sans-serif;
        text-align: left;
        font-size: 24px;
        font-weight: 600;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }
    .service-banner p {
        font-size: 20px;
        font-weight: bold;
        font-family: "Nunito", sans-serif;
        text-align: justify;
        line-height: 1.4;
        color: #3d3d3d;
    }

    .row1 {
        display: grid;
        grid-template-columns: 1fr;
        justify-content: center;
        align-items: center;
    }

    .img-hero{
        width: 100%;
        height:100%;
    }

    @media (min-width: 1000px) {
        .row1 {
            display: flex;
            justify-content: space-between;
            margin: auto;
            max-width: 1140px; /* Ensure all sections use a common container width */
            /*max-width: 75%;*/
        }
        .service-banner h1 {
            font-size: 25px;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .service-banner p {
            font-size: 20px;
            line-height: 1.6;
        }
    }

    .wave {
        width: 100%;
    }
    /* =================================================================================banner css end*/

    /* =================================================================================service-about css*/
    .service-about-bg {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /*align-items: center;*/
        padding: 20px;
    }
    .service-about-bg h2 {
        font-size: 20px;
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        padding: 20px 0px;
        color: #333;
        text-align: left;
    }
    .service-about-bg h3{
        font-size: 30px;
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        padding: 20px 0px;
        color: #333;

    } 
    .service-about-bg p {
        font-size: 16px;
        font-weight: 550;
        padding-bottom: 20px;
        font-family: "Nunito", sans-serif;
        color: #3d3d3d;
        line-height: 1.5;
        text-align: justify;
    }
    
    .service-about-bg .cta {
        font-family:  cursive;
        font-weight: 600;
        font-style: italic;
        font-size: 17px;
        color: #333;
        
    }

    @media (min-width: 1000px) {
        .service-about-bg h2 {
            font-size: 25px;
        }
        .service-about-bg h3{
        font-size: 38px;
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        padding: 20px 0px;
        color: #333;
    } 
        .service-about-bg p {
            font-size: 20px;
            line-height: 1.6;
            padding-bottom: 20px;
        }
        .service-about-bg .cta {
        font-family:  cursive;
        font-weight: 600;
        font-style: italic;
        font-size: 20px;
        color: #333;
        }
        .moto-gif{
            border-top-left-radius: 80px 80px;
            border-bottom-right-radius: 80px 80px;
            max-width: 80%;
        }
    }
    /* =================================================================================service-about css end*/

    .We-work-with-bg {
        background: #fffbf5;
        padding: 30px 0;
    }
    .We-work-with-bg h2 {
        font-size: 28px;
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        padding: 20px 0px;
        text-align: center;
    }
    .smp {
        margin-top: 10px;
        width: 100%;
        border-radius: 10px;
        background: white;
        height: 95%;
        text-align: center;
        padding: 10px;
    }
    .smp img {
        border-radius: 9px;
        width: 100%;
        height: 250px;
    }
    .smp h2 {
        margin-top: 20px;
        font-size: 20px;
        font-weight: 600;
        padding: 10px;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
    }

    .smp a {
        font-size: 20px;
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        margin-top: 10px;
        margin-bottom: 10px;
        color: #333;
        text-align: left;
    }
    .smp p {
        font-family: 'Montserrat', sans-serif;
        text-align: left;
        font-size: 14px;
        font-weight: 200;
        margin: 5px;
    }
    @media (min-width: 1000px) {
        .We-work-with-bg h2 {
            font-size: 36px;
        }
        .smp h2{
            font-size: 22px;
        }
        .smp p {
            font-size: 16px;
        }
        .smp a {
            font-size: 25px;
        }
    }

    .btn-primary {
        border: none;
        background: #201f54;
        border-radius: 20px;
        font-size: 14px;
        padding: 8px 16px;
        font-family: "Montserrat", sans-serif;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .tagline-header{
        grid-row-start: 2;
    }

    .hero-image{
        grid-row-start: 1;
    }

    .row{
        height: max-content;
    }
    .moto-gif{
        margin-bottom: 10px; 
        
    }
    .faqbtn-div button:focus{
        outline:none;
    }


    .faq-container{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    
    
    }
    .faq-card p {
        font-family: 'Ariel', sans-serif;
        color: black;
        font-weight: 400;
        font-size: 18px;
    }

    .faq-card li {
    color: black;
    font-family: 'Ariel', sans-serif;
    font-weight: 400;
    font-size: 18px;
    }
    .faq-container button{
    border:0px solid black;
    
    background-color:whitesmoke;
    font-size:20px;
    
    }
    .faqbtn-div{
        padding:20px;
        margin-bottom:10px;
        background-color:whitesmoke;
        border-bottom:5px solid #B99470;
        border-radius:15px;
        width:90%;
        font-family: 'Ariel', sans-serif;
    }
    .faqcard-div{
    width:90%;
    font-size:16px;
    text-wrap:wrap;
    margin:0px 20px;
    margin-bottom:10px;
    }
    .faqbtn-div:hover{
    box-shadow: 0 20px 30px -30px rgba(0, 0, 0, 1);
    width:91%;
    }
    .faq-card{
    padding:20px;
    border-radius:1px 20px 20px 20px;
    border-bottom:5px solid #B99470;
    /* background-color:#874430; */
    background-color:#F7EFE5;
    color:black;
    }
    @media screen and (min-width:1025px){
    .faqbtn-div{
    padding:20px;
    margin-bottom:10px;
    background-color:whitesmoke;
    border-bottom:5px solid #B99470;
    border-radius:15px;
    width:70%;
    }
    .faqbtn-div:hover{
    box-shadow: 0 20px 30px -30px rgba(0, 0, 0, 1);
    width:71%;
    }
    .faqcard-div{
    width:70%;
    font-size:16px;
    text-wrap:wrap;
    margin:0px 20px;
    margin-bottom:10px;
    }
    
    
    }
    .faq-bg{
    background-color:#F1EAFF;
    padding:20px 0px;
    }
</style>

<!-- ==========================banner ================================-->
<section class="service-banner"> 
    <div class="container">
        <div class="row1">
            <div class="col-md-6 tagline-header" >
                <h1> Innovative Digital Marketing Ads Agency in Chennai</h1>
                <p>Data-Driven Digital Marketing that connects Brands with People.</p>
                <a href="contact.php" class="btn btn-primary fade-in delay-2">Get a Free Quote</a>
            </div>
            <div class="col-md-6 hero-image">
                <div >
                    <video autoplay loop muted playsinline class="img-fluid col-md-14 moto-gif" poster="assets/images/digi_marketing (1).gif" loading="lazy" width="400" height="300">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <img src="assets/images/wave1.png" loading="lazy" class="wave" alt="Best Digital Marketing Agency in Chennai"> 
</section>

<!--<div class="empty-space" style="height:50px; background-image: #f8f9fb;"></div> --> <!--linear-gradient(white,#ede3fd) -->

<section class="service-about-bg" style="background: slate;"> 
<div class="row1">
<div class="col-md-6" >
                <div >
                    <img src="assets/images/digital_marketing_hero.jpg" alt="Digital Marketing and Branding" class="img-fluid col-md-20" loading="lazy">
                </div>
            </div>
            <div class="col-md-6 tagline-header">
    <h2 style=" text-align: left; font-size: 24px;">Top Digital Marketing & Advertising Agency</h2>
    <p>At Baleen Media, we specialize in data-driven digital marketing strategies that boost your brand’s online presence. Whether you're looking for expert internet advertising, high-converting digital ads, or social media marketing, our top digital marketing ad agency in Tamil Nadu has the expertise to help your business thrive.</p>
    </div>
    </div>
    </section>
    <section class="service-about-bg" style="background: #ede3fd;"> 
    <h2 style=" text-align: center; font-size: 24px; margin-left: 10px;">What we do?</h2>
    <div class="container">
        <div class="row">
            <!-- card1 -->
            <div class="col-md-4">
                <div class="smp">
                    <img src="assets/images/Facebook ads.png" loading="lazy" alt="Social Media Marketing" class="img-fluid bg-img-services">
                    <h2>Facebook Advertisement Services</h2>
                    <p>Increase engagement and conversions with strategic campaigns on <span style="font-weight: bold;">Facebook</span>.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="smp">
                    <img src="assets/images/Insta ads.png" loading="lazy" alt="Social Media Marketing" class="img-fluid bg-img-services">
                    <h2>Instagram Advertisement Services </h2>
                    <p>Increase engagement and conversions with strategic campaigns on
                        <span style="font-weight: bold;">Instagram</span>.</p>
                </div>
            </div>
            <!-- card2 -->
            <div class="col-md-4">
                <div class="smp">
                    <img src="assets/images/seo services.svg" loading="lazy" alt="Search Engine Optimization (SEO)" class="img-fluid bg-img-services">
                    <h2>Search Engine Optimization (SEO)</h2>
                    <p>Improve your website ranking on Google with proven SEO techniques.</p>
                </div>
            </div>
            <!-- card3 -->
            <div class="col-md-4">
                <div class="smp">
                    <img src="assets/images/PPC2_GIF.gif" loading="lazy" alt="Pay-Per-Click (PPC)" class="img-fluid">
                    <h2>Pay-Per-Click (PPC) Advertising</h2>
                    <p>Drive instant traffic and leads with <span style="font-weight: bold;">Google Ads and social media ad campaigns.</span></p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="service-about-bg" style="background: linear-gradient(slate,#f8f9fb);">
    <h2 style="text-align: center; margin-left: 10px;">What you get? </h2>
    <div class="row1" style="justify-content: space-between; "> 
    
        <div class="col-md-6 tagline-header">
            <p>✅ A <span style="font-weight: bold;">trusted digital marketing</span> ads agency with a proven track record.</p>
            <p>✅<span style="font-weight: bold;">Tailored strategies</span> that align with your brand and business goals.</p>
            <p>✅ Expertise in internet ads, paid advertising, and <span style="font-weight: bold;">social media growth</span>.</p> 
            <p>✅ Results-driven campaigns designed for <span style="font-weight: bold;">maximum brand visibility</span>.</p>
        </div>
        <div class="col-md-6 hero-image">
            <div>
                <video autoplay loop muted playsinline class="img-fluid col-md-14 moto-gif" loading="lazy" width="400" height="300">
                    <source src="assets/images/Trust.mp4" type="video/mp4" class="img-fluid col-md-14 moto-gif">
                </video>
            </div>
        </div>
    </div>
    </section>
    <section class="service-about-bg" style="background: #ede3fd;">
        <div class="row1">
            <div class="col-md-6 tagline-header">
                <h2> What are you waiting for?</h2> 
                <p>Start investing now to grow your business with the Chennai's best digital marketing service.</p>
                <a href="tel: +919566031113" class="btn btn-primary fade-in delay-2">Call Now</a>
            </div>
            <div class="col-md-6 hero-image">
                <div>
                    <img src="assets/images/book now.gif" loading="lazy" alt="Digital Marketing and Branding" class="img-fluid " style="max-width:70%;">
                </div>
            </div>
        </div>
        <section class="faq-bg">
            <div class="container">
                <h2 style="font-size: 40px; font-family: Montserrat; text-align: center; margin-top: 20px;">Frequently Asked
                    Questions</h2>
                <br>
                <div class="faq-container">
        
                    <!-- FAQ 1 -->
                    <div class="faqbtn-div">
                        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="false" aria-controls="faq1" name="faq1">
                            Why should I choose Baleen Media over other digital marketing agencies in Chennai?
                        </button>
                    </div>
                    <div class="faqcard-div">
                        <div class="collapse" id="faq1">
                            <div class="faq-card">
                                <p>Baleen Media is Chennai’s top-rated digital marketing agency, specializing in
                                    <strong>data-driven strategies</strong> that deliver measurable results. Unlike generic
                                    agencies, we offer:</p>
                                <ul>
                                    <li><strong>Custom Campaigns:</strong> Tailored SEO, PPC, and social media plans aligned
                                        with your business goals.</li>
                                    <li><strong>Transparent Reporting:</strong> Real-time analytics to track ROI and campaign
                                        performance.</li>
                                    <li><strong>Local Expertise:</strong> Deep understanding of Tamil Nadu’s market trends and
                                        consumer behavior.</li>
                                    <li><strong>Proven Success:</strong> 85+ client reviews with a 4.7/5 rating for driving
                                        leads and sales.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
        
                    <!-- FAQ 2 -->
                    <div class="faqbtn-div">
                        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="faq2" name="faq2">
                            How long does it take to see results from SEO services?
                        </button>
                    </div>
                    <div class="faqcard-div">
                        <div class="collapse" id="faq2">
                            <div class="faq-card">
                                <p>SEO is a <strong>long-term strategy</strong>, but timelines vary based on competition and
                                    industry. Typically:</p>
                                <ul>
                                    <li><strong>3–6 months:</strong> Initial improvements in rankings for low-competition
                                        keywords.</li>
                                    <li><strong>6–12 months:</strong> Significant traffic growth for competitive terms.</li>
                                </ul>
                                <p>We accelerate results with <strong>technical SEO audits</strong>, high-quality content, and
                                    authoritative backlinks. For faster impact, pair SEO with our
                                    <strong>PPC advertising</strong> services.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- FAQ 3 -->
                    <div class="faqbtn-div">
                        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3" name="faq3">
                            What’s the difference between Google Ads and Facebook Ads?
                        </button>
                    </div>
                    <div class="faqcard-div">
                        <div class="collapse" id="faq3">
                            <div class="faq-card">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><strong>Google Ads</strong></th>
                                            <th><strong>Facebook/Instagram Ads</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Targets users actively searching for products/services
                                                (<strong>high intent</strong>).</td>
                                            <td>Targets users based on interests, demographics, and behaviors
                                                (<strong>discovery-driven</strong>).</td>
                                        </tr>
                                        <tr>
                                            <td>Best for: Lead generation, e-commerce sales, local business promotions.</td>
                                            <td>Best for: Brand awareness, engagement, visual storytelling.</td>
                                        </tr>
                                        <tr>
                                            <td>Cost-per-click (CPC) ranges from ₹10–₹500+ depending on competition.</td>
                                            <td>CPC typically ₹5–₹50 (lower than Google Ads).</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>We recommend a <strong>blended strategy</strong> for maximum reach. Example: Use Google Ads
                                    for immediate conversions and Facebook Ads to retarget website visitors.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- FAQ 4 -->
                    <div class="faqbtn-div">
                        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq4" aria-expanded="false" aria-controls="faq4" name="faq4">
                            How much should I budget for digital marketing in Chennai?
                        </button>
                    </div>
                    <div class="faqcard-div">
                        <div class="collapse" id="faq4">
                            <div class="faq-card">
                                <p>Budgets depend on your goals and industry. Here’s a breakdown:</p>
                                <ul>
                                    <li><strong>Small Businesses (Startups):</strong> ₹15,000–₹30,000/month (SEO + basic social
                                        media).</li>
                                    <li><strong>Mid-Sized Businesses:</strong> ₹40,000–₹80,000/month (SEO, PPC, and content
                                        marketing).</li>
                                    <li><strong>Enterprise Campaigns:</strong> ₹1,00,000+/month (360° digital strategies with
                                        influencer collaborations).</li>
                                </ul>
                                <p><strong>Pro Tip:</strong> Allocate 7–10% of your annual revenue to digital marketing for
                                    sustainable growth.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- FAQ 5 -->
                    <div class="faqbtn-div">
                        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq5" aria-expanded="false" aria-controls="faq5" name="faq5">
                            Can you manage social media for my business?
                        </button>
                    </div>
                    <div class="faqcard-div">
                        <div class="collapse" id="faq5">
                            <div class="faq-card">
                                <p>Yes! Our <strong>social media marketing</strong> services include:</p>
                                <ul>
                                    <li><strong>Platform-Specific Strategies:</strong> Facebook, Instagram, LinkedIn, and
                                        Twitter/X.</li>
                                    <li><strong>Content Creation:</strong> Engaging posts, reels, infographics, and stories.
                                    </li>
                                    <li><strong>Community Management:</strong> Responding to comments/DMs to build trust.</li>
                                    <li><strong>Paid Advertising:</strong> Hyper-targeted campaigns to reach your ideal
                                        audience.</li>
                                </ul>
                                <p>Example: A Chennai restaurant saw a <strong>200% increase</strong> in reservations after we
                                    optimized their Instagram with food reels and geo-targeted ads.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- FAQ 6 -->
                    <div class="faqbtn-div">
                        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq6" aria-expanded="false" aria-controls="faq6" name="faq6">
                            Do you offer website design with digital marketing?
                        </button>
                    </div>
                    <div class="faqcard-div">
                        <div class="collapse" id="faq6">
                            <div class="faq-card">
                                <p>Absolutely! A <strong>high-converting website</strong> is the foundation of digital success.
                                    Our packages include:</p>
                                <ul>
                                    <li><strong>SEO-Friendly Design:</strong> Fast-loading, mobile-responsive layouts.</li>
                                    <li><strong>Conversion Optimization:</strong> Clear CTAs, contact forms, and UX
                                        enhancements.</li>
                                    <li><strong>Ongoing Maintenance:</strong> Security updates, broken link fixes, and
                                        performance checks.</li>
                                </ul>
                                <p><strong>Bonus:</strong> Websites we design typically achieve
                                    <strong>30–50% lower bounce rates</strong> than industry averages.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- FAQ 7 -->
                    <div class="faqbtn-div">
                        <button class="faqbtn" type="button" data-toggle="collapse" data-target="#faq7" aria-expanded="false" aria-controls="faq7" name="faq7">
                            How do you measure campaign success?
                        </button>
                    </div>
                    <div class="faqcard-div">
                        <div class="collapse" id="faq7">
                            <div class="faq-card">
                                <p>We track <strong>15+ KPIs</strong> across platforms, including:</p>
                                <ul>
                                    <li><strong>Traffic Sources:</strong> Organic, paid, social, and referral breakdowns.</li>
                                    <li><strong>Conversions:</strong> Form submissions, calls, purchases (tracked via Google
                                        Analytics 4).</li>
                                    <li><strong>ROI:</strong> Cost per lead vs. customer lifetime value (LTV).</li>
                                </ul>
                                <p>Clients receive <strong>monthly reports</strong> with actionable insights. Example: A real
                                    estate client reduced cost-per-lead by 60% after we refined their ad targeting.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="service-about-bg" style="background: #f8f9fb;">
        <h2 style=" text-align: center; font-size: 24px; margin-left: 10px;">Check some of our famous brandings</h2>
        <div class="container">
            <div class="row">
                <!-- card1 -->
                <div class="col-md-4">
                    <div class="smp">
                        <img src="assets/images/portfolio/work/work18.jpg" loading="lazy" alt="Bus Advertising" class="img-fluid bg-img-services">
                        <a href="bus-advertising-in-chennai.php" class="services-text">Bus Advertising</a>
                    </div>
                </div>
                <!-- card2 -->
                <div class="col-md-4">
                    <div class="smp">
                        <img src="assets/images/no parking sample4.jpg" loading="lazy" alt="No Parking Boards" class="img-fluid bg-img-services">
                        <a href="noparking-advertisement-agency-in-chennai.php" class="services-text">No Parking Boards</a>
                    </div>
                </div>
                <!-- card3 -->
                <div class="col-md-4">
                    <div class="smp">
                        <img src="assets/images/service cards/generaldis.jpeg" loading="lazy" alt="Newspaper Advertising" class="img-fluid">
                        <a href="newspaper-advertisement-agency-in-chennai.php" class="services-text">Newspaper Advertising</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include('include/Homefooter.php');
?>