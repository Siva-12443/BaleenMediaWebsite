<?php
include('include/top.php');
?>
<!-- ==========================stylesheet ================================-->
<style>
    /* =================================================================================banner css */
.folio-banner{
    background-color:#F1EAFF;
    padding-top:30px;
            border:0px;
}
.folio-banner h1{
    font-family: "poppins", sans-serif;
    text-align:left;
    font-size: 40px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}
.folio-banner p{
    font-size:13px;
            font-weight:bold;
            font-family: "Nunito", sans-serif;
            text-align:justify;
            line-height:1.4;
            color:#3d3d3d;
}
.folio-banner img{
    
}
@media (min-width: 1000px){
    .row1{
    display:flex;
   align-items:center;
   justify-content:center;
}
.folio-banner h1{
    font-family: "poppins", sans-serif;
    text-align:left;
    font-size: 60px;
    font-weight:600;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:20px;
}
.folio-banner p{
    font-size:20px;
            font-weight:bold;
            font-family: "Nunito", sans-serif;
            text-align:justify;
            line-height:1.4;
            color:#3d3d3d;
}
}

.wave{
    width:100%;
}
/* =================================================================================banner css end*/


.works-section {
            padding: 80px 0;
            background-color: #f7f9fc;
        }

        .works-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 60px;
            color: #333;
        }

        .work-card {
            display: flex;
            flex-wrap: wrap;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .work-card:hover {
            transform: translateY(-10px);
        }

        .work-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
            cursor: pointer;
        }

        .work-image-left {
            order: 1;
        }

        .work-image-right {
            order: 2;
        }

        .work-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .work-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .work-description {
            font-size: 1rem;
            color: #555;
        }

        /* Popup Image Styles */
        .image-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.9);
            border-radius: 10px;
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .image-popup img {
            max-width: 100%;
            max-height: 80vh;
            display: block;
            border-radius: 10px;
        }

        /* Full-screen overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: none;
            z-index: 999;
        }

        /* Responsive for small screens */
        @media (max-width: 768px) {
            .work-card {
                flex-direction: column;
            }

            .work-image-left, .work-image-right {
                order: 1;
            }
        }
/* =================================================================================our work css */
.our-works h2{
    font-weight:bold;
}
.works-card{
    padding: 10px;
}

</style>
<!-- ==========================stylesheet end ================================-->
<!-- ==========================content ================================-->
 <section class="folio-banner"> <!-- ==========================banner ================================-->
<div class="container">
    <div class="row1">
        <div class="col-md-6">
            <h1>Our Portfolio</h1>
            <p>We love what we guide our clients for their brand growth and get known as the greatest advertising company in Chennai. We believe in long-term connections where creativity and excellence are mandatory.
            We are as excited to have you as you are for your brand growth.</p>
        </div>
        <div class="col-md-6">
            <img src="assets/images/team.png" alt="" class="img-fluid">
        </div>
    </div>
</div>
<img src="assets/images/wave1.png" class="wave"> 
 </section>
 <!-- ==========================banner end ================================-->
 <!-- ==========================our works ================================-->
  <section class="our-works">
    <h2 style="font-size: 40px; font-family:Montserrat;  padding:20px 0px;">Our Works</h2>
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
            <div class="works-card">
                <img src="assets/images/portfolio/work/work1.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <div class="works-card">
                <img src="assets/images/portfolio/work/work2.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <div class="works-card">
                <img src="assets/images/portfolio/work/work3.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <div class="works-card">
                <img src="assets/images/portfolio/work/work4.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <div class="works-card">
                <img src="assets/images/portfolio/work/work5.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
  </section>
<!-- ==========================our works end ================================-->
 <!-- Our Works Section -->
 <section class="works-section">
        <div class="container">
            <h2 class="works-title">Our Works</h2>

            <!-- Work Card 1 -->
            <div class="row work-card">
                <div class="col-md-6 work-image-left">
                    <img src="https://via.placeholder.com/600x400?text=Work+1" alt="Work 1" class="work-image">
                </div>
                <div class="col-md-6 work-content">
                    <h3 class="work-title">Work Title 1</h3>
                    <p class="work-description">This is a brief description of the first work. It was created with an innovative design and modern techniques to meet the client's needs.</p>
                </div>
            </div>

            <!-- Work Card 2 -->
            <div class="row work-card">
                <div class="col-md-6 work-content">
                    <h3 class="work-title">Work Title 2</h3>
                    <p class="work-description">This is a brief description of the second work. It showcases a creative approach to solving the challenges faced by the client.</p>
                </div>
                <div class="col-md-6 work-image-right">
                    <img src="https://via.placeholder.com/600x400?text=Work+2" alt="Work 2" class="work-image">
                </div>
            </div>

            <!-- More work cards as required -->
        </div>
    </section>

    <!-- Overlay and Popup Image -->
    <div class="overlay"></div>
    <div class="image-popup">
        <img src="" alt="Popup Image">
    </div>

 <!-- ==========================our team ================================-->
  <section class="our-team">
  <h2 style="font-size: 40px; font-family:Montserrat;  padding:20px 0px;">Our Team</h2>
 
  </section>
  <!-- ==========================our team end ================================-->
<!-- ==========================content end================================-->
<!-- =====================================script popup img -->
<script>
        // Select all work images
        const images = document.querySelectorAll('.work-image');
        const popup = document.querySelector('.image-popup');
        const popupImage = popup.querySelector('img');
        const overlay = document.querySelector('.overlay');

        // Function to open image popup
        images.forEach((img) => {
            img.addEventListener('click', (e) => {
                popupImage.src = e.target.src; // Set clicked image src to popup
                overlay.style.display = 'block'; // Show overlay
                popup.style.transform = 'translate(-50%, -50%) scale(1)'; // Show and scale popup image
            });
        });

        // Function to close image popup
        overlay.addEventListener('click', () => {
            popup.style.transform = 'translate(-50%, -50%) scale(0)'; // Shrink popup image
            overlay.style.display = 'none'; // Hide overlay
        });
    </script>


<?php
include('include/footer.php');
?>