<?php
include('include/top.php');
?>
<style>
/* .blog-card{
  background:whitesmoke;
  padding:20px;
}
.blog-card h1{
  
} */
/* Styling the blog cards */
/* General container styling */
.blog_bg{
  background:#f1eafe;
}
.container {
    margin-top: 30px;
}

/* Blog card styling */
.blog-card {
    background-color: #b7dfefab;
    border-radius: 15px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 30px;
}

/* Image styling */


/* Title (h1) styling */
.blog-card h1 {
    font-size: 20px;
    font-weight: 700;
    color: #333;
   
    margin-bottom: 15px;
    text-align: left;
    font-family: 'Montserrat', sans-serif;
}

/* Paragraph styling */
.blog-card p {
    font-size: 16px;
    color: #555;
    text-align: justify;
    line-height: 1.6;
    font-family: 'Nunito', sans-serif;
    margin-bottom: 25px;
}

/* Button styling */
.blog-card a .btn {
  font-size:18px;
    background-color: transparent;
    border: 2px solid #AD49E1;
    color: #AD49E1;
    padding: 15px;
    border-radius: 50px;
    font-weight: bold;
    font-family: 'Montserrat', sans-serif;
    transition: all 0.3s ease;
    width:50%;
}

.blog-card a .btn:hover {
    background-color: #AD49E1;
    color: #ffffff;
}
/* =============================================faq-blog */
.collapsible {
  background-color: #AD49E1;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 25px;
  font-weight:600px;
  font-family:'poppins';
  border-radius:20px 20px 20px 20px;
}

.active, .collapsible:hover {
  background-color: #AD49E1;
  border-radius:20px 20px 0px 0px;
}
 .collapsible:focus{
  border-radius:20px 20px 0px 0px;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #EBD3F8;
  margin-bottom:10px;
  border-radius:0 0 20px 20px;  
}
.content p{
  font-size:16px;
  font-weight:600px;
  font-family:'poppins';
  text-align:justify;
  padding-top:10px;
}
/* ===============================================xxxxx========================== */
/* ----------------------------------------------------slider cards */
 /* Card styling */
 .qa-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        /* Hover effect for cards */
        .qa-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Question styling */
        .qa-card h2 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #007bff;
        }

        /* Answer styling */
        .qa-card p {
            font-size: 16px;
            color: #555555;
        }

        /* Add space between the cards */
        .row > div {
            margin-bottom: 30px;
        }
/* ============================================slider faqs================== */
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


</style>



<section class="blog_bg">
<h2 style="font-size: 40px; font-family:Montserrat;">Blogs</h2><br>
<!-- -------------------------------------- blog cards -->
<div class="container">
  <div class="row">
    <!-- ------------------------------------card-1 -->
    <div class="col-md-6">
      <div class="blog-card" style="background:#FFF2CC;">
        <img src="assets/images/building brand.png" alt="" class="img-fluid">
        <h1>Building Brand: The Role of Advertising Agencies in Creating Iconic Brands</h1>
        <p>In the bustling city of Chennai, the need for exceptional advertising agencies has become more crucial than ever.</p>
        <a href="building-brand-the-role-of-advertising-agencies-in-creating-iconic-brands.php"><button type="button" class="btn btn-outline-primary">Read More</button></a>
      </div>
    </div>
    <!-- -------------------------------------card-2 -->
    <div class="col-md-6">
      <div class="blog-card" style="background:#FFF2CC;">
        <img src="assets/images/creative.png" alt="" class="img-fluid">
        <h1>The Future of Advertising Agencies: Predictions and Insights for 2025 and Beyond</h1>
        <p>In today's fast-paced world, the advertising industry is continuously evolving.</p>
        <a href="the-future-of-advertising-agencies-predictions-and-insights-for-2025-and-beyond.php"><button type="button" class="btn btn-outline-primary">Read More</button></a>
      </div>
    </div>
    <!-- ---------------------------------------card-3 -->
    <div class="col-md-6">
      <div class="blog-card" style="background:#FFF2CC;">
        <img src="assets/images/tips.png" alt="" class="img-fluid">
        <h1>Tips For Creative Advertising Campaigns That Will Capture Chennai’s Attention</h1>
        <p>When we think of an advertisement, we all think of something creative, attractive, and a bit catchy so that it stays with us.</p>
        <a href="tips-for-creative-advertising-campaigns-that-will-capture-chennai-attention.php"><button type="button" class="btn btn-outline-primary">Read More</button></a>
      </div>
    </div>
    <!--------------------------------------------card-4 -->
    <div class="col-md-6">
      <div class="blog-card" style="background:#FFF2CC;">
        <img src="assets/images/confused.png" alt="" class="img-fluid">
        <h1>How to Choose The Best Advertising Agency in Chennai?</h1>
        <p>In the growing Fast-Paced world, grabbing the audience's attention and making a long-lasting impression is nearly impossible.</p>
        <a href="how-to-choose-the-best-advertising-agency-in-chennai.php"><button type="button" class="btn btn-outline-primary">Read More</button></a>
      </div>
    </div>
  </div>
</div>

 <!-- -------------------------------------------xxxx -->
</section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- =========================================================slider faqs -->
<section class="faq-bg ">
 <h2 style="font-size: 40px; font-family:Montserrat;">FAQs</h2><br>
 <div class="container ">
  <!-- ================================ -->
<div class="slideshow-container">

<div class="mySlides ">
<div class="container">
  <div class="row">
    <!-- Question & Answer Card 1 -->
    <div class="col-md-4">
      <div class="qa-card">
        <h2>What is Bootstrap?</h2>
        <p>Bootstrap is a free and open-source front-end framework for developing responsive websites and web applications.</p>
      </div>
    </div>

    <!-- Question & Answer Card 2 -->
    <div class="col-md-4">
      <div class="qa-card">
        <h2>What is CSS?</h2>
        <p>CSS stands for Cascading Style Sheets and is used to control the layout and design of web pages.</p>
      </div>
    </div>

    <!-- Question & Answer Card 3 -->
    <div class="col-md-4">
      <div class="qa-card">
        <h2>How does JavaScript work?</h2>
        <p>JavaScript is a scripting language used to create dynamic content, control multimedia, and animate images on web pages.</p>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ---------------------------------------------------slide 2 -->
<div class="mySlides ">
<div class="container">
  <div class="row">
    <!-- Question & Answer Card 1 -->
    <div class="col-md-4">
      <div class="qa-card">
        <h2>Why Advertisement Agency?</h2>
        <p>A full service advertising agency put all its energies into not just building a brand, but also creating a demand for its client's product or service in an exciting manner through creative strategy and marketing. ... Takes feedback from the clients and customers and decides the further line of action</p>
      </div>
    </div>

    <!-- Question & Answer Card 2 -->
    <div class="col-md-4">
      <div class="qa-card">
        <h2>What is Branding?</h2>
        <p>Branding is a marketing practice in which a company creates a name, symbol or design that is easily identifiable as belonging to the company. This helps to identify a product and distinguish it from other products and services</p>
      </div>
    </div>

    <!-- Question & Answer Card 3 -->
    <div class="col-md-4">
      <div class="qa-card">
        <h2>why i choose Baleen Media?</h2>
        <p>Baleen media is a well-known advertising agency in Chennai that provides services like print media, bus back panel Ads., radio Ads., television Ads. & internet / Social media promotions. Working for more than 16 years in the advertising industry, Baleen media is known for creative content creation resulting in innovative ideas serving for the customers. Baleen media stands for one of the Best advertising Company in Chennai for providing high quality services & understanding the needs and requirements of clients to plan a proper chart with satisfactory results. Baleen media works all over India.</p>
      </div>
    </div>
  </div>
</div>
</div>
<!-- --------------------------------------------------slide 3 -->
<div class="mySlides ">
<div class="container">
  <div class="row">
    <!-- Question & Answer Card 1 -->
    <div class="col-md-4">
      <div class="qa-card">
        <h2>Who is your ideal client, and why?</h2>
        <p>Anyone who wants to show their presence in Newspaper, TV, Radio & Outdoor Medium like Buses, Auto, Cinema Theaters.</p>
      </div>
    </div>

    <!-- Question & Answer Card 2 -->
    <div class="col-md-4">
      <div class="qa-card">
        <h2>What are the core capabilities of your agency? Where do you shine?</h2>
        <p>CSS stands for Cascading Style Sheets and is used to control the layout and design of web pages.</p>
      </div>
    </div>

    <!-- Question & Answer Card 3 -->
    <div class="col-md-4">
      <div class="qa-card">
        <h2>How does JavaScript work?</h2>
        <p>JavaScript is a scripting language used to create dynamic content, control multimedia, and animate images on web pages.</p>
      </div>
    </div>
  </div>
</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<!-- ==================================================================xxxx========================================= -->
</div>
</section>





































<!-- --------------------------------------------------------------faq-blog------------------------------------------- -->
<section class="faq-bg ">
 <h2 style="font-size: 40px; font-family:Montserrat;">FAQs</h2><br>
 <div class="container ">
  <!-- ================================ -->
  <button class="collapsible">Why Advertisement Agency?</button>
<div class="content">
  <p>A full service advertising agency put all its energies into not just building a brand, but also creating a demand for its client's product or service in an exciting manner through creative strategy and marketing. ... Takes feedback from the clients and customers and decides the further line of action.</p>
</div>

<button class="collapsible"> What is Branding? </button>
<div class="content">
  <p>Branding is a marketing practice in which a company creates a name, symbol or design that is easily identifiable as belonging to the company. This helps to identify a product and distinguish it from other products and services.</p>
</div>

<button class="collapsible">why i choose Baleen Media?</button>
<div class="content">
  <p>Baleen media is a well-known advertising agency in Chennai that provides services like print media, bus back panel Ads., radio Ads., television Ads. & internet / Social media promotions. Working for more than 16 years in the advertising industry, Baleen media is known for creative content creation resulting in innovative ideas serving for the customers. Baleen media stands for one of the Best advertising Company in Chennai for providing high quality services & understanding the needs and requirements of clients to plan a proper chart with satisfactory results. Baleen media works all over India.</p>
</div>

<button type="button" class="collapsible">Who is your ideal client, and why? </button>
<div class="content">
  <p>Anyone who wants to show their presence in Newspaper, TV, Radio & Outdoor Medium like Buses, Auto, Cinema Theaters.</p>
</div>

<button type="button" class="collapsible">What are the core capabilities of your agency? Where do you shine?</button>
<div class="content">
  <p>1. Well defined process in execution from Lead to Cash,<br>2. Quick turn-around-time on service,<br>3. Clear Communication on everything what we do</p>
</div>

<button type="button" class="collapsible"> How would you describe your company culture?</button>
<div class="content">
  <p>1. Making of more happy customers <br>2. Team work to deliver the best (Client Servicing executives, Graphics Designers, Business development executives) </p>
</div>

<button type="button" class="collapsible"> How long have you been in business? </button>
<div class="content">
  <p>16+ years </p>
</div>

<button type="button" class="collapsible"> How is your pricing structured? </button>
<div class="content">
  <p>We have 2 types of Pricing. <br><br>1. Media Partenership pricing - This attracts a simple agreement between us & our client to agree on engaging us as our Client's media partner for 12 months & beyond.  % of margins for any advertisements' cost can be agreed on the very same agreement.<br><br>2. Deal based pricing - This doesn't require a long term agreement but on demand basis. If our client wants to publish an advertisement, we will be able to share a decent quote in the industry and move on to execution.</p>
</div>

<button type="button" class="collapsible">How would we interface with your agency? Describe a typical account team.</button>
<div class="content">
  <p> Each of our clients will be assigned with a "Client Servicing Executive (CSE)" who can understand Client's requirements, suggesting right Ad-medium for client's business category, helping them in getting best quote for selected ad-mediums, Taking care of design activities / getting necessary approvals as needed and finally releasing the Ad. in respective Ad-medium on agreed dates. They further assist respective clients by sharing Ad. Proofs like Sample Newspaper / Broadcast Certificates / Snapshots / etc.,</p>
</div>

<button type="button" class="collapsible">What is your process to address issues? How do you handle customers who want to cancel their engagement with you?</button>
<div class="content">
  <p>We have well defined terms & conditions on Ad cancellations. Each Order will be executed through an exclusive work order (emailed with Ad-medium, Date of releases, charges, etc.).  Those Work orders will have by when the Ad. can be cancelled and what would be the refund policy. So, no worries on grey areas.</p>
</div>

<button type="button" class="collapsible">How do you measure results?</button>
<div class="content">
  <p>Each client will be taken up with an exclusive survey on Ad. response through to know whether they are happy about the Ad response or not. If they are Happy they may share a PRIVATE 3 Digit CODE  sent to thier mobile as SMS to our Client Servicing executive. This way our CRM system reads & understands the customer satisfaction on each Ad medium business category wise. This is of course being used for next customer to serve better.</p>
</div>

<button type="button" class="collapsible">What types of companies do you serve, and in what industries or markets?</button>
<div class="content">
  <p>Our services spreading across various verticals as below.<br>Accommodation,Agriculture,Automobile,Document Missing,Education,Health & Fitness,Finance,Home Appliances,Interiors,Jewellery,Manufacturing,Matrimony,Name Change,Packers & Movers,Political,Public Notice,Real Estate,Retail (FMCG),Salon & Spa,Textiles,Tours & Travels,Transport,Anniversary,Obituary,Event Management,Entertainment,Court Notice</p>
</div>

<button type="button" class="collapsible"> How a Top brands makes Traditional marketing methods work?</button>
<div class="content">
  <p>We have witnessed many start-ups from the FMCG Sector and E-Commerce sector emerging victorious , battling their way to enter into the market with a bang. The only questions that haunt the newly purged start-ups are how these companies managed to survive the cut throat competition. 
<br><br>Tech giants like Zomato, Amazon, Big Basket have successfully managed to create vivid impression of their brand. Though these are the brands whose area of operations are more on the digital side, but even they  use traditional marketing methods. During the initial stage of start-ups  majority of companies stick to stereotypical marketing methods because their objective is vey clear , first they need to make people understand that there is a company with so and so name which is offering certain services.
<br><br>Traditional marketing techniques are not only restricted to only  the print media or television and radios but also sending emails, Displaying brochures on Buses and in trains. In short, where the advertisement will grab the maximum attention of audience. Even today, where electronic medium fail to deliver the necessary information, print media does its job. In rural areas where people have less resources to gather information digitally, their only source to know about the developments and innovations is through Print media. 
<br><br>Companies like Amazon, Big Basket still put their advertisement offers in news paper. Dominos, Pizza Hut provide discount coupons to their customers through pamphlets. This is the most sustainable resource which helps you connect with the local audience. The other benefit of traditional marketing is that you can have face to face interaction with your potential buyers. The other reason why old school marketing still trends because in traditional marketing you can offer product testing where the consumer can actually check for the quality of the product. 
<br><br>Over the years, Chennai is emerging as a hub for start-ups. To reach maximum number of audience  , every company needs a strategist who will effectively carry out the task of promoting your products and services to the right target audience. The job of advertising agency is to make a thorough research about the same. 
<br><br><a href = "https://www.baleenmedia.com">An Advertising agency is Chennai </a> named, “Baleen Media”  offers all these services under one roof right from traditional marketing to digital marketing. You name it, they have it all. It depends upon what services you are offering and to whom. They have dedicated services to cater to all your need. They have explained in detail the benefits of using a particular medium to promote your brand. Baleen Media is one of the popular company in the field of advertising who will take into account all your demands for creating transparent brand image. They are into the advertising business for the past 16 years, and as rightly quoted there is “No better teacher than experience.” They have the right technique that will deliver the right content for your brand all over the India. What defines a company is how satisfied their consumers are, Baleen Media has it all, and if you are worried about not having one such Media house in your locality, don’t worry Baleen Media offers their service all around India.</p>
</div>

<button type="button" class="collapsible">Should Your Small Business Hire an Advertising Agency?</button>
<div class="content">
  <p>Advertising is for all, small and big businesses. It does not count the standard of a business but only the good development. As your small business grows, at some point you’ll need to take your marketing strategy to the next level. 
<br><br>.But surely, any business can develop most sufficiently through Advertising. For many directors, the awareness that they require to work with Advertising professionals leads to questions of whether to apply to an Advertising agency for small business or not. There is no right answer to this question, as it depends on the business’s resources and needs. So, to solve it accurately here are a few factors to consider about. 
<br><br> <Strong> Helps to reach out more </strong>
<br>With advertising, your business is not just in one place at a time but displayed on several platforms and several ad types. Here you do not need to keep shifting your business for growth, as the advertising experts will take care of it. 
<br><br> <Strong>Budget-Friendly </strong>
<br>To hire an advertising agency for a small business brings the most important question, Budget. Budget is what must be stopping you from the decision of getting connected with a great advertising agency for your brand development. It's not that all advertising agencies demand a huge budget to publish your ad, there are still various agencies that cooperate with your certain budget and assist you with that. They work on your brand parts which need to be modernized and offer you a good service in your comfortable budget, and one for that is Baleen Media. If you ask us, our agency has worked on several such clients and helped them achieve their goals with the least budget. 
<br> <br>If you are in a need of budget-friendly advertising agency in Chennai, contact us! 
<br><br> <Strong> New leads </strong>
<br>While running a small business, the leads that you gain must be on an average scale of your surroundings. But that will not be the same once you connect with the best advertising agency, they promote your business on different platforms through their print and digital media as suitable for your brand and help you gain leads on a large scale. Advertising makes your business reach out more and shares awareness about it initially grows your traffic. 
<br><br> <Strong> Good revenue </strong>
<br>We all desire to have a good amount of revenue through our business, which can be small or big. A common factor of a good revenue is a good number of leads that are converted into buyers. Advertising builds awareness about your brand which brings more trust of the audience to you. Once the trust is formed, they keep coming back to you and buy. This factor is promptly managed by the advertising experts you choose. Not only a good revenue but a good user experience stays remarkable about your brand.
<br><br> <Strong> Help it make big one day </strong>
<br>Once a small business should not be a small business forever, is what we all seek and take efforts for. Advertising is a very powerful practice if done correctly. You need to trust your advertising partner if you need a great result. They showcase the best about you and that's what brings you a good audience base, and a good audience base is what helps you achieve a big business with good revenue and a known brand name. 
<br><br> <Strong> Conclusion </strong>
<br>Small or big every business desire to grow, and thus advertising is the best choice to make. A successful business formation is not a quick achievement and so is advertising. A professional will guide you through all the steps and aware of its required time to see results, but it's on you about how much you trust your advertising partner. 
<br><br>To solve all your doubts and achieve your business goals, we are here for you, the <a href="https://www.baleenmedia.com"> best advertising company in Chennai </a> and an expert partner for you. What next? Connect with us!</p>
</div>

<button type="button" class="collapsible">How to Choose the Right Advertising Agency?</button>
<div class="content">
  <p>So, you are about to launch a new brand or product or services, or you are looking for a great ad agency for your brand development, whatever the reason might be but choosing the right ad agency partner is a very important factor in your brand development. Having a strategic connection with an advertising agency can make all your expectations happen.
<br><br>Taking the wrong choice can result in lost time and money, lead to employee difficulty, and can also affect the reputation of your company. With the appropriate advertising agency, your projects should work more smoothly, with teams from both sides working together. Your consumers will be motivated by more powerful and professional campaigns that will improve the way they trust your ability to deliver quality products or services.
<br><br><br><br> <u> Here are 5 things to consider when deciding the right company for your business. </u>
<br><br> <strong> Choose a Creative Ad agency </strong>
<br>Advertisement is what attracts the audience and inspires them to make a call to action towards the brand with its attractive and creative design. An ad is successful only when it impacts the target and improves the brand sales for which your advertisement partner needs to be very creative and expert of the ad-making rule. 
<br><br>The agency’s work should be exceptional and the ideas should make you think, “Wow, I wish I would’ve thought of that.” So, the work needs to be remarkable. We see how different brands are getting served with a variety of unique and creative ads every day that stays remarkable and initially rises their marketing demand. Hence creative ads have become very important as they stand out from the rest. 
<br><br>If you ask us, our creatives are some of the bests in the play. From creating a unique concept, they present innovative thinking to everything they do, and the quality of the product shows it. 
<br><br>Choose an agency with creative strategically developed to work that problem.
<br><br> <strong> Know if they are the Experts </strong>
<br>Your agency needs to have some knowledge of your industry and your market before they get to work, they’ll nevermore be the experts you are. But your guide can surely make them one. 
<br><br>Take a look at a planned agency’s success stories and portfolio. Be assured they’re skilled in marketing, communications, and building inspirational brands that customers love. A reliable agency will be able to choose up the industry details along the process and might amaze you with some penetrations they’ve chosen up from other industries.
<br><br>If you require an agency that’s previously close with your industry you can go with selecting an ad agency within your corner.
<br><br>Whatever you do, choose an agency whose work you appreciate. If their shape of work doesn’t inspire you, pass on, no matter their name. Look at both concept and design when judging their portfolio. Is the graphic design timeless or trendy? Does the copywriting move you to action? Does their branding strategy work arrange with your purposes?
<br><br> <strong> Check the Client Testimonials about them </strong>
<br>Examine what campaigns they have worked on in the past and if they have had experience working with clients in your specific industry or not. Although this may be great, there may be an advantage in working with an advertising agency that has an understanding of your business sector as they can be able to deliver fresh ideas to the report.
<br><br>You need to ask yourself questions like; Does the agency show some awesome client testimonials? Who have they operated with in the past? Who are they operating with presently? Some agencies also provide you the contact details of clients who would be glad to speak to you. Did the advertising agency meet their expectations? With such questions, you can also list few queries before choosing that agency. 
<br><br> <strong> Culture Fit </strong>
<br>You can't expect all agencies to be the same. What you receive depends on the team creating it, so culture is important more than just a good working relationship. It’s key in making sure your advertising reaches its goals.
<br><br>The level of business we like to form with our clients and that we believe all good agencies should form with their clients is what makes a strong culture fit an essential element to an effective relationship. Our values and attitudes need to be followed if we need to have a commonly beneficial collaboration and to ensure the creative work we produce aligns with your brand.
<br><br>Bricks Media says when you choose an ad agency, you choose a culture. They suggest working with an agency that is collaborative, artistic, and proactive.
<br><br> <strong>Previous Work Portfolio </strong>
As we said how an agency is defined by its client testimonials, the same way it guarantees you about what you are getting served by their previous work portfolio. It's important to check the working assignments of an agency to know if they are capable of reaching your goals of a campaign. If they follow creativity and if they are active with the latest trends that any business industry is following. 
<br><br>Good advertising is prepared towards a goal. The art serves a purpose for the advertiser; the purpose isn’t to serve the art. You want to expand in a certain demographic or capture more market share, or simply do more business — there’s a problem your marketing is supposed to solve.
<br><br>Choose an agency with creativity strategically developed to solve that puzzle, not developed to serve the agency itself.
<br><br> <strong> Outcome </strong>
All these above 5 factors if followed correctly will lead you to the best agency for your brand development. These factors will help you with deep research and a great advertising partner relationship. An agency will not even let you brother you about all of these once you connect to them, they will initially give you a guide to their specialty and solve all the queries that you must be having. 
To make it even easier, Baleen Media as the best advertising agency in Chennai has all of it. They deliver you with the modernized campaigns and justify the tag of worth the investment advertising company in Chennai.
<br> <br> Want to learn more about working with a great agency? Contact us today and we’ll tell you all about it!</p>
</div>

<button type="button" class="collapsible"> What is the size and scope of a typical marketing engagement?</button>
<div class="content">
<table class="table table-bordered">
                               <thead>
                               <tr>
                               <th> Ad Medium </th>
                               <th> Prize Range* </th>
                               <th> unit </th>
                               </tr>
                               </thead>
                               <tbody>
                               <tr>
                               <td>Newspaper - Line Ad</td>
                               <td> Rs.43 - 800 /- </td>
                               <td> per line </td>
                               </tr> 
                               <tr>
                               <td>Newspaper - Display Ad Ad</td>
                               <td> Rs.31 - 8,675 /-</td>
                               <td> per SCM </td>
                               </tr>
                               <tr>
                               <td>Television Ad</td>
                               <td> Rs.184 - 36,000 /-</td>
                               <td> per SEC </td>
                               </tr>
                               <tr>
                               <td> Radio Ad</td>
                               <td> Rs.4,130 - 19,000 /-</td>
                               <td> per SEC </td>
                               </tr>
                               <tr>
                               <td> Paper inserts</td>
                               <td> Rs.500 - 10,000</td>
                               <td> per copy </td>
                               </tr>
                               <tr>
                               <td> Auto & bus Branding</td>
                               <td> Rs.950 - 3,500</td>
                               <td> per Auto(or bus) </td>
                               </tr>
                               <tr>
                               <td> Theater Ad</td>
                               <td> Rs.495 - 8,675</td>
                               <td> per SEC </td>
                               </tr>
                               <tr>
                               <td> Digital Marketing/td>
                               <td> Rs.500 - 5,000</td>
                               <td> per SEC </td>
                               </tr>
                               <tr>
                               <td>Noparking board</td>
                               <td> Rs.50 - 500</td>
                               <td> per Board </td>
                               </tr>
                               <tr> * Above pricing is indicative and only for reference. It may vary time to time according to market conditions.</tr>
                            </tbody>
                              </table>
</div>


 <!-- ==================================================================xxxx========================================= -->
</div>
</section>
<!--<end container>-->

    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                            <!--<div class="col-md-12 offset-md-1">-->

                <div id="accordion-1" class="accordion">
                    <div class="card">
                        <div class="card-header" id="heading-1-1">
                            <h5 data-toggle="collapse" data-target="#collapse-1-1" aria-controls="collapse-1-1" aria-expanded="true"> Why Advertisement Agency? <span class="fa fa-chevron-down"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-1" class="collapse show" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                            <div class="card-body">A full service advertising agency put all its energies into not just building a brand, but also creating a demand for its client's product or service in an exciting manner through creative strategy and marketing. ... Takes feedback from the clients and customers and decides the further line of action</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-2">
                            <h5 data-toggle="collapse" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2"> What is Branding? <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                            <div class="card-body">Branding is a marketing practice in which a company creates a name, symbol or design that is easily identifiable as belonging to the company. This helps to identify a product and distinguish it from other products and services</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-3">
                            <h5 data-toggle="collapse" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">why i choose Baleen Media?<span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                            <div class="card-body">Baleen media is a well-known advertising agency in Chennai that provides services like print media, bus back panel Ads., radio Ads., television Ads. & internet / Social media promotions. Working for more than 16 years in the advertising industry, Baleen media is known for creative content creation resulting in innovative ideas serving for the customers. Baleen media stands for one of the Best advertising Company in Chennai for providing high quality services & understanding the needs and requirements of clients to plan a proper chart with satisfactory results. Baleen media works all over India.</div>
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-header" id="heading-1-4">///
                            <h5 data-toggle="collapse" data-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4"> Who is your ideal client, and why? <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4" data-parent="#accordion-1">
                            <div class="card-body">Anyone who wants to show their presence in Newspaper, TV, Radio & Outdoor Medium like Buses, Auto, Cinema Theaters.</div>
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-header" id="heading-1-5">
                            <h5 data-toggle="collapse" data-target="#collapse-1-5" aria-expanded="false" aria-controls="collapse-1-5">What are the core capabilities of your agency? Where do you shine? <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-5" class="collapse" aria-labelledby="heading-1-5" data-parent="#accordion-1">
                            <div class="card-body">1. Well defined process in execution from Lead to Cash,<br>2. Quick turn-around-time on service,<br>3. Clear Communication on everything what we do </div>
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-header" id="heading-1-6">
                            <h5 data-toggle="collapse" data-target="#collapse-1-6" aria-expanded="false" aria-controls="collapse-1-6"> How would you describe your company culture? <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-6" class="collapse" aria-labelledby="heading-1-6" data-parent="#accordion-1">
                            <div class="card-body">1. Making of more happy customers <br>2. Team work to deliver the best (Client Servicing executives, Graphics Designers, Business development executives) </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-7">
                            <h5 data-toggle="collapse" data-target="#collapse-1-7" aria-expanded="false" aria-controls="collapse-1-7">  How long have you been in business?  <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-7" class="collapse" aria-labelledby="heading-1-7" data-parent="#accordion-1">
                            <div class="card-body"> 16+ years </div>
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-header" id="heading-1-8">
                            <h5 data-toggle="collapse" data-target="#collapse-1-8" aria-expanded="false" aria-controls="collapse-1-8">   How is your pricing structured?  <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-8" class="collapse" aria-labelledby="heading-1-8" data-parent="#accordion-1">
                            <div class="card-body"> We have 2 types of Pricing. <br><br>1. Media Partenership pricing - This attracts a simple agreement between us & our client to agree on engaging us as our Client's media partner for 12 months & beyond.  % of margins for any advertisements' cost can be agreed on the very same agreement.<br><br>2. Deal based pricing - This doesn't require a long term agreement but on demand basis. If our client wants to publish an advertisement, we will be able to share a decent quote in the industry and move on to execution.</div>
                        </div>
                    </div>
                     <div class="card">
                        <div class="card-header" id="heading-1-9">
                            <h5 data-toggle="collapse" data-target="#collapse-1-9" aria-expanded="false" aria-controls="collapse-1-9">   How would we interface with your agency? Describe a typical account team.  <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-9" class="collapse" aria-labelledby="heading-1-9" data-parent="#accordion-1">
                            <div class="card-body"> Each of our clients will be assigned with a "Client Servicing Executive (CSE)" who can understand Client's requirements, suggesting right Ad-medium for client's business category, helping them in getting best quote for selected ad-mediums, Taking care of design activities / getting necessary approvals as needed and finally releasing the Ad. in respective Ad-medium on agreed dates. They further assist respective clients by sharing Ad. Proofs like Sample Newspaper / Broadcast Certificates / Snapshots / etc., </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-10">
                            <h5 data-toggle="collapse" data-target="#collapse-1-10" aria-expanded="false" aria-controls="collapse-1-10"> What is your process to address issues? How do you handle customers who want to cancel their engagement with you?
  <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-10" class="collapse" aria-labelledby="heading-1-10" data-parent="#accordion-1">
                            <div class="card-body"> We have well defined terms & conditions on Ad cancellations. Each Order will be executed through an exclusive work order (emailed with Ad-medium, Date of releases, charges, etc.).  Those Work orders will have by when the Ad. can be cancelled and what would be the refund policy. So, no worries on grey areas.  </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-11">
                            <h5 data-toggle="collapse" data-target="#collapse-1-11" aria-expanded="false" aria-controls="collapse-1-11"> How do you measure results?  <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-11" class="collapse" aria-labelledby="heading-1-11" data-parent="#accordion-1">
                            <div class="card-body"> Each client will be taken up with an exclusive survey on Ad. response through to know whether they are happy about the Ad response or not. If they are Happy they may share a PRIVATE 3 Digit CODE  sent to thier mobile as SMS to our Client Servicing executive. This way our CRM system reads & understands the customer satisfaction on each Ad medium business category wise. This is of course being used for next customer to serve better.  </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-12">
                            <h5 data-toggle="collapse" data-target="#collapse-1-12" aria-expanded="false" aria-controls="collapse-1-12"> What types of companies do you serve, and in what industries or markets?   <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-12" class="collapse" aria-labelledby="heading-1-12" data-parent="#accordion-1">
                            <div class="card-body"> Our services spreading across various verticals as below.<br>Accommodation,Agriculture,Automobile,Document Missing,Education,Health & Fitness,Finance,Home Appliances,Interiors,Jewellery,Manufacturing,Matrimony,Name Change,Packers & Movers,Political,Public Notice,Real Estate,Retail (FMCG),Salon & Spa,Textiles,Tours & Travels,Transport,Anniversary,Obituary,Event Management,Entertainment,Court Notice </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-13">
                            <h5 data-toggle="collapse" data-target="#collapse-1-13" aria-expanded="false" aria-controls="collapse-1-13"> How a Top brands makes Traditional marketing methods work <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-13" class="collapse" aria-labelledby="heading-1-13" data-parent="#accordion-1">
                            <div class="card-body"> We have witnessed many start-ups from the FMCG Sector and E-Commerce sector emerging victorious , battling their way to enter into the market with a bang. The only questions that haunt the newly purged start-ups are how these companies managed to survive the cut throat competition. 
<br><br>Tech giants like Zomato, Amazon, Big Basket have successfully managed to create vivid impression of their brand. Though these are the brands whose area of operations are more on the digital side, but even they  use traditional marketing methods. During the initial stage of start-ups  majority of companies stick to stereotypical marketing methods because their objective is vey clear , first they need to make people understand that there is a company with so and so name which is offering certain services.
<br><br>Traditional marketing techniques are not only restricted to only  the print media or television and radios but also sending emails, Displaying brochures on Buses and in trains. In short, where the advertisement will grab the maximum attention of audience. Even today, where electronic medium fail to deliver the necessary information, print media does its job. In rural areas where people have less resources to gather information digitally, their only source to know about the developments and innovations is through Print media. 
<br><br>Companies like Amazon, Big Basket still put their advertisement offers in news paper. Dominos, Pizza Hut provide discount coupons to their customers through pamphlets. This is the most sustainable resource which helps you connect with the local audience. The other benefit of traditional marketing is that you can have face to face interaction with your potential buyers. The other reason why old school marketing still trends because in traditional marketing you can offer product testing where the consumer can actually check for the quality of the product. 
<br><br>Over the years, Chennai is emerging as a hub for start-ups. To reach maximum number of audience  , every company needs a strategist who will effectively carry out the task of promoting your products and services to the right target audience. The job of advertising agency is to make a thorough research about the same. 
<br><br><a href = "https://www.baleenmedia.com">An Advertising agency is Chennai </a> named, “Baleen Media”  offers all these services under one roof right from traditional marketing to digital marketing. You name it, they have it all. It depends upon what services you are offering and to whom. They have dedicated services to cater to all your need. They have explained in detail the benefits of using a particular medium to promote your brand. Baleen Media is one of the popular company in the field of advertising who will take into account all your demands for creating transparent brand image. They are into the advertising business for the past 16 years, and as rightly quoted there is “No better teacher than experience.” They have the right technique that will deliver the right content for your brand all over the India. What defines a company is how satisfied their consumers are, Baleen Media has it all, and if you are worried about not having one such Media house in your locality, don’t worry Baleen Media offers their service all around India.
  </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-14">
                            <h5 data-toggle="collapse" data-target="#collapse-1-14" aria-expanded="false" aria-controls="collapse-1-14"> Should Your Small Business Hire an Advertising Agency?  <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-14" class="collapse" aria-labelledby="heading-1-14" data-parent="#accordion-1">
                            <div class="card-body"> Advertising is for all, small and big businesses. It does not count the standard of a business but only the good development. As your small business grows, at some point you’ll need to take your marketing strategy to the next level. 
<br><br>.But surely, any business can develop most sufficiently through Advertising. For many directors, the awareness that they require to work with Advertising professionals leads to questions of whether to apply to an Advertising agency for small business or not. There is no right answer to this question, as it depends on the business’s resources and needs. So, to solve it accurately here are a few factors to consider about. 
<br><br> <Strong> Helps to reach out more </strong>
<br>With advertising, your business is not just in one place at a time but displayed on several platforms and several ad types. Here you do not need to keep shifting your business for growth, as the advertising experts will take care of it. 
<br><br> <Strong>Budget-Friendly </strong>
<br>To hire an advertising agency for a small business brings the most important question, Budget. Budget is what must be stopping you from the decision of getting connected with a great advertising agency for your brand development. It's not that all advertising agencies demand a huge budget to publish your ad, there are still various agencies that cooperate with your certain budget and assist you with that. They work on your brand parts which need to be modernized and offer you a good service in your comfortable budget, and one for that is Baleen Media. If you ask us, our agency has worked on several such clients and helped them achieve their goals with the least budget. 
<br> <br>If you are in a need of budget-friendly advertising agency in Chennai, contact us! 
<br><br> <Strong> New leads </strong>
<br>While running a small business, the leads that you gain must be on an average scale of your surroundings. But that will not be the same once you connect with the best advertising agency, they promote your business on different platforms through their print and digital media as suitable for your brand and help you gain leads on a large scale. Advertising makes your business reach out more and shares awareness about it initially grows your traffic. 
<br><br> <Strong> Good revenue </strong>
<br>We all desire to have a good amount of revenue through our business, which can be small or big. A common factor of a good revenue is a good number of leads that are converted into buyers. Advertising builds awareness about your brand which brings more trust of the audience to you. Once the trust is formed, they keep coming back to you and buy. This factor is promptly managed by the advertising experts you choose. Not only a good revenue but a good user experience stays remarkable about your brand.
<br><br> <Strong> Help it make big one day </strong>
<br>Once a small business should not be a small business forever, is what we all seek and take efforts for. Advertising is a very powerful practice if done correctly. You need to trust your advertising partner if you need a great result. They showcase the best about you and that's what brings you a good audience base, and a good audience base is what helps you achieve a big business with good revenue and a known brand name. 
<br><br> <Strong> Conclusion </strong>
<br>Small or big every business desire to grow, and thus advertising is the best choice to make. A successful business formation is not a quick achievement and so is advertising. A professional will guide you through all the steps and aware of its required time to see results, but it's on you about how much you trust your advertising partner. 
<br><br>To solve all your doubts and achieve your business goals, we are here for you, the <a href="https://www.baleenmedia.com"> best advertising company in Chennai </a> and an expert partner for you. What next? Connect with us!
  </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-15">
                            <h5 data-toggle="collapse" data-target="#collapse-1-15" aria-expanded="false" aria-controls="collapse-1-15"> How to Choose the Right Advertising Agency?  <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-15" class="collapse" aria-labelledby="heading-1-15" data-parent="#accordion-1">
                            <div class="card-body"> So, you are about to launch a new brand or product or services, or you are looking for a great ad agency for your brand development, whatever the reason might be but choosing the right ad agency partner is a very important factor in your brand development. Having a strategic connection with an advertising agency can make all your expectations happen.
<br><br>Taking the wrong choice can result in lost time and money, lead to employee difficulty, and can also affect the reputation of your company. With the appropriate advertising agency, your projects should work more smoothly, with teams from both sides working together. Your consumers will be motivated by more powerful and professional campaigns that will improve the way they trust your ability to deliver quality products or services.
<br><br><br><br> <u> Here are 5 things to consider when deciding the right company for your business. </u>
<br><br> <strong> Choose a Creative Ad agency </strong>
<br>Advertisement is what attracts the audience and inspires them to make a call to action towards the brand with its attractive and creative design. An ad is successful only when it impacts the target and improves the brand sales for which your advertisement partner needs to be very creative and expert of the ad-making rule. 
<br><br>The agency’s work should be exceptional and the ideas should make you think, “Wow, I wish I would’ve thought of that.” So, the work needs to be remarkable. We see how different brands are getting served with a variety of unique and creative ads every day that stays remarkable and initially rises their marketing demand. Hence creative ads have become very important as they stand out from the rest. 
<br><br>If you ask us, our creatives are some of the bests in the play. From creating a unique concept, they present innovative thinking to everything they do, and the quality of the product shows it. 
<br><br>Choose an agency with creative strategically developed to work that problem.
<br><br> <strong> Know if they are the Experts </strong>
<br>Your agency needs to have some knowledge of your industry and your market before they get to work, they’ll nevermore be the experts you are. But your guide can surely make them one. 
<br><br>Take a look at a planned agency’s success stories and portfolio. Be assured they’re skilled in marketing, communications, and building inspirational brands that customers love. A reliable agency will be able to choose up the industry details along the process and might amaze you with some penetrations they’ve chosen up from other industries.
<br><br>If you require an agency that’s previously close with your industry you can go with selecting an ad agency within your corner.
<br><br>Whatever you do, choose an agency whose work you appreciate. If their shape of work doesn’t inspire you, pass on, no matter their name. Look at both concept and design when judging their portfolio. Is the graphic design timeless or trendy? Does the copywriting move you to action? Does their branding strategy work arrange with your purposes?
<br><br> <strong> Check the Client Testimonials about them </strong>
<br>Examine what campaigns they have worked on in the past and if they have had experience working with clients in your specific industry or not. Although this may be great, there may be an advantage in working with an advertising agency that has an understanding of your business sector as they can be able to deliver fresh ideas to the report.
<br><br>You need to ask yourself questions like; Does the agency show some awesome client testimonials? Who have they operated with in the past? Who are they operating with presently? Some agencies also provide you the contact details of clients who would be glad to speak to you. Did the advertising agency meet their expectations? With such questions, you can also list few queries before choosing that agency. 
<br><br> <strong> Culture Fit </strong>
<br>You can't expect all agencies to be the same. What you receive depends on the team creating it, so culture is important more than just a good working relationship. It’s key in making sure your advertising reaches its goals.
<br><br>The level of business we like to form with our clients and that we believe all good agencies should form with their clients is what makes a strong culture fit an essential element to an effective relationship. Our values and attitudes need to be followed if we need to have a commonly beneficial collaboration and to ensure the creative work we produce aligns with your brand.
<br><br>Bricks Media says when you choose an ad agency, you choose a culture. They suggest working with an agency that is collaborative, artistic, and proactive.
<br><br> <strong>Previous Work Portfolio </strong>
As we said how an agency is defined by its client testimonials, the same way it guarantees you about what you are getting served by their previous work portfolio. It's important to check the working assignments of an agency to know if they are capable of reaching your goals of a campaign. If they follow creativity and if they are active with the latest trends that any business industry is following. 
<br><br>Good advertising is prepared towards a goal. The art serves a purpose for the advertiser; the purpose isn’t to serve the art. You want to expand in a certain demographic or capture more market share, or simply do more business — there’s a problem your marketing is supposed to solve.
<br><br>Choose an agency with creativity strategically developed to solve that puzzle, not developed to serve the agency itself.
<br><br> <strong> Outcome </strong>
All these above 5 factors if followed correctly will lead you to the best agency for your brand development. These factors will help you with deep research and a great advertising partner relationship. An agency will not even let you brother you about all of these once you connect to them, they will initially give you a guide to their specialty and solve all the queries that you must be having. 
To make it even easier, Baleen Media as the best advertising agency in Chennai has all of it. They deliver you with the modernized campaigns and justify the tag of worth the investment advertising company in Chennai.
<br> <br> Want to learn more about working with a great agency? Contact us today and we’ll tell you all about it!
 </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-1-16">
                            <h5 data-toggle="collapse" data-target="#collapse-1-16" aria-expanded="false" aria-controls="collapse-1-16">  What is the size and scope of a typical marketing engagement?   <span class="fa fa-chevron-right"></span>
                            </h5>
                        </div>
                        <div id="collapse-1-16" class="collapse" aria-labelledby="heading-1-16" data-parent="#accordion-1">
                            <div class="card-body"> 
                             <table class="table table-bordered">
                               <thead>
                               <tr>
                               <th> Ad Medium </th>
                               <th> Prize Range* </th>
                               <th> unit </th>
                               </tr>
                               </thead>
                               <tbody>
                               <tr>
                               <td>Newspaper - Line Ad</td>
                               <td> Rs.43 - 800 /- </td>
                               <td> per line </td>
                               </tr> 
                               <tr>
                               <td>Newspaper - Display Ad Ad</td>
                               <td> Rs.31 - 8,675 /-</td>
                               <td> per SCM </td>
                               </tr>
                               <tr>
                               <td>Television Ad</td>
                               <td> Rs.184 - 36,000 /-</td>
                               <td> per SEC </td>
                               </tr>
                               <tr>
                               <td> Radio Ad</td>
                               <td> Rs.4,130 - 19,000 /-</td>
                               <td> per SEC </td>
                               </tr>
                               <tr>
                               <td> Paper inserts</td>
                               <td> Rs.500 - 10,000</td>
                               <td> per copy </td>
                               </tr>
                               <tr>
                               <td> Auto & bus Branding</td>
                               <td> Rs.950 - 3,500</td>
                               <td> per Auto(or bus) </td>
                               </tr>
                               <tr>
                               <td> Theater Ad</td>
                               <td> Rs.495 - 8,675</td>
                               <td> per SEC </td>
                               </tr>
                               <tr>
                               <td> Digital Marketing/td>
                               <td> Rs.500 - 5,000</td>
                               <td> per SEC </td>
                               </tr>
                               <tr>
                               <td>Noparking board</td>
                               <td> Rs.50 - 500</td>
                               <td> per Board </td>
                               </tr>
                               <tr> * Above pricing is indicative and only for reference. It may vary time to time according to market conditions.</tr>
                            </tbody>
                              </table>    
                               </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

<!-- =======================================================================slider faqs script -->
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




<!-- ===========================================================================script===================================== -->
    <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
<!-- ============================================================================================ -->
    <script>
    let lightImg = document.querySelector(".light-img");
let viewBtn = document.querySelectorAll(".view-btn");

viewBtn.forEach(el => {
  el.addEventListener("click", () => {
    document.body.classList.add("effect");
    let imgSrc = el.getAttribute("data-src");
    lightImg.src = imgSrc;
  });
});

window.addEventListener("click", event => {
  if(event.target.className == "box-wrapper" || event.target.className == "close-btn") {
    document.body.classList.remove("effect");
  }
})</script>
<?php
include('include/footer.php');
?>