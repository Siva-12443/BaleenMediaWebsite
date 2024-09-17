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
.folio-banner h1 {
    font-family: "Poppins", sans-serif;
    text-align: left;
    font-size: 40px;
    font-weight: 600;
    border-bottom: 2px solid black;
    padding-bottom: 10px;
    margin-bottom: 20px;
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
            line-height:1.6;
            color:#3d3d3d;
}
}

.wave{
    width:100%;
}
/* =================================================================================banner css end*/



        /* ============================================================== */
              /* Container for the gallery */
              .gallery-container {
            padding: 10px;
        }

        /* Grid layout for cards */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        /* For larger screens (PC view) - 4 cards per row */
        @media (min-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Card styles */
        .gallery-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .gallery-card:hover {
            transform: translateY(-5px);
        }

        /* Image inside the card */
        .gallery-card img {
            width: 100%;
            height: 200px; /* Fixed height */
            object-fit: cover; /* Ensures all images are the same size */
        }

        /* Overlay and popup image styles */
        .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    display: none;
    z-index: 1000;
}

.image-popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    z-index: 1001;
    transition: transform 0.3s ease;
}


.image-popup img {
    max-width: 90vw;
    max-height: 80vh;
}
.image-popup.open {
    transform: translate(-50%, -50%) scale(1);
    transition: transform 0.3s ease;
}
/* =================================================================================our work css */
.our-works h2{
    font-weight:bold;
}
.works-card{
    padding: 10px;
}
/* ==============================================================================================our client */
.client-bg{
    background:#f1eafe;
}
  /* Container for the grid */
  .client-logo-container {
            display: grid;
            grid-template-columns: repeat(2,1fr); /* 2 columns for mobile */
            gap: 15px;
        }

      /* 4 columns for tablet and larger screens */
@media (min-width: 768px) {
    .client-logo-container {
        grid-template-columns: repeat(4, 1fr);
    }
}
        /* 6 columns for larger desktops */
@media (min-width: 1200px) {
    .client-logo-container {
        grid-template-columns: repeat(6, 1fr);
    }
}

        /* Client card styles */
        .client-logo {
    background-image: linear-gradient(#f1eafe, #e0cefd, #c4a6fb);
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.client-logo:hover {
    transform: scale(1.05);
}

.client-logo img {
    width: 100%;
    height: 100px; /* Fixed height for logos */
    object-fit: contain;
}

        /*  =====================================================================================our team css*/
        .team-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }
        .team-card {
            position: relative;
            width: 100%;
            max-width: 300px;
            background: linear-gradient(135deg, #ff9a8b, #ff6a88);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.4s ease;
            cursor: pointer;
        }

        .team-card:hover {
            transform: translateY(-10px) scale(1.05);
        }

        .team-card img {
            width: 100%;
            border-radius: 15px 15px 0 0;
            transition: transform 0.3s ease-in-out;
        }

        .team-card:hover img {
            transform: scale(1.05);
        }

        .gallery-info {
            padding: 20px;
            background-color: #fff;
            text-align: center;
        }

        .gallery-info h4 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .gallery-info p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .gallery-grid {
                flex-direction: column;
                align-items: center;
            }
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
 <div class="gallery-container">
 <h2 style="font-size: 50px; font-family:Montserrat;  padding:20px 0px;">Our Works</h2>
 
        <div class="gallery-grid">
            <!-- Card 1 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work1.jpg" alt="Image 1" class="gallery-image">
            </div>
            <!-- Card 2 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work2.jpg" alt="Image 2" class="gallery-image">
            </div>
            <!-- Card 3 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work3.jpg" alt="Image 3" class="gallery-image">
            </div>
            <!-- Card 4 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work4.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 4 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work5.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 4 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work4.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 4 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work4.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 4 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work4.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 4 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work4.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Card 4 -->
            <div class="gallery-card">
                <img src="assets/images/portfolio/work/work4.jpg" alt="Image 4" class="gallery-image">
            </div>
            <!-- Add more cards as needed -->
        </div>
        
    </div>

    <!-- Fullscreen Image Popup -->
    <div class="overlay"></div>
    <div class="image-popup">
        <img src="" alt="Popup Image">
        
    </div>

<!-- ==========================our works end ================================-->
<!-- ==========================our clients ================================-->
 <section class="client-bg">
<h2 style="font-size: 50px; font-family:Montserrat;  padding:20px 0px;">Our clients</h2>
    <div class="client-logo-container">
        <!-- Client 1 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/CanaraBank.jpg" alt="Canara Bank">
        </div>
        <!-- Client 2 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/ACEEngineering.jpg" alt="ACE Engineering">
        </div>
        <!-- Client 3 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/Afton.jpg" alt="Afton">
        </div>
        <!-- Client 4 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/AssetTreeHomes.jpg" alt="Asset Tree Homes">
        </div>
        <!-- Client 5 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/BIG3.jpg" alt="BIG3">
        </div>
        <!-- Client 6 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/Venper.jpg" alt="Venper">
        </div>
        <!-- Client 7 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/AaradyaaGold.jpg" alt="Venper">
        </div>
        <!-- Client 8 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/MGP.jpg" alt="Venper">
        </div>
        <!-- Client 9 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/CrescentHeights.jpg" alt="Venper">
        </div>
        <!-- Client 10 -->
        <div class="client-logo">
        <img src="assets/images/portfolio/client/Wootunutrition.jpg" alt="Venper">
        </div>
        <!-- Client 11 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/MNEyeHospital.jpg" alt="Venper">
        </div>
        <!-- Client 12 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/Mahsa.jpg" alt="Venper">
        </div>
        <!-- Client 13 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/PINK.jpg" alt="Venper">
        </div>
        <!-- Client 14 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/PrasanthHospitals.jpg" alt="Venper">
        </div>
        <!-- Client 15 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/RepcoBank.jpg" alt="Venper">
        </div>
        <!-- Client 16 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/sivetCollege.jpg" alt="Venper">
        </div>
        <!-- Client 17 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/Sky pix.jpg" alt="Venper">
        </div>
        <!-- Client 18 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/SRM.jpg" alt="Venper">
        </div>
        <!-- Client 19 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/StarBiriyani.jpg" alt="Venper">
        </div>
        <!-- Client 20 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/UBER.jpg" alt="Venper">
        </div>
        <!-- Client 21 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/UBEREATS.jpg" alt="Venper">
        </div>
        <!-- Client 22 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/Vetri Home Appliance.jpg" alt="Venper">
        </div>
        <!-- Client 23 -->
        <div class="client-logo">
            <img src="assets/images/portfolio/client/HandloomKing.jpg" alt="Venper">
        </div>
        
        <!-- Add more client logos as needed -->
    </div>
    </section>
  
<!-- =============================================================== -->

 <!-- ==========================our team ================================-->
  <section class="our-team-bg">
  <h2 style="font-size: 50px; font-family:Montserrat;  padding:20px 0px;">Our Team</h2>
  <div class="team-grid">

  <div class="team-card">
                <img src="assets/images/demoimg.png" alt="Leenah Grace">
                <div class="gallery-info">
                    <h4>Leenah Grace</h4>
                    <p>Proprietrix</p>
                </div>
            </div>
            <div class="team-card">
                <img src="https://via.placeholder.com/300x300?text=Team+Member+2" alt="Usha">
                <div class="gallery-info">
                    <h4>Usha</h4>
                    <p>Marketing Manager</p>
                </div>
            </div>
        </div>
        </div>
  </section>
  <!-- ==========================our team end ================================-->
<!-- ==========================content end================================-->
<!-- =====================================script popup img -->

  <script>
        // Select all gallery images
        const images = document.querySelectorAll('.gallery-image');
        const popup = document.querySelector('.image-popup');
        const popupImage = popup.querySelector('img');
        const overlay = document.querySelector('.overlay');

        // Function to show popup
images.forEach((img) => {
    img.addEventListener('click', (e) => {
        popupImage.src = e.target.src; // Set the clicked image's source
        overlay.style.display = 'block'; // Show overlay
        popup.classList.add('open'); // Add open class to display popup
    });
});

       // Function to hide popup when clicking outside the image
overlay.addEventListener('click', () => {
    popup.classList.remove('open'); // Remove open class to close popup
    overlay.style.display = 'none'; // Hide overlay
});
    </script>

<?php
include('include/footer.php');
?>