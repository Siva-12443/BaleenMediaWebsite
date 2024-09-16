<?php
include('include/top.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Responsive Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f5f5f5;
        }

        /* General Styling */
        .gallery-bg {
            padding: 80px 0;
            background-color: #fff;
        }

        .gallery-title {
            font-size: 3rem;
            font-weight: 800;
            color: #333;
            margin-bottom: 60px;
            text-align: center;
        }

        .gallery-section {
            text-align: center;
            margin-bottom: 50px;
        }

        /* Button Styles */
        .gallery-buttons {
            margin-bottom: 30px;
        }

        .gallery-buttons button {
            background-color: #ff5e57;
            border: none;
            color: #fff;
            padding: 12px 30px;
            font-size: 1rem;
            margin: 10px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-buttons button.active,
        .gallery-buttons button:hover {
            background-color: #ff3e30;
            transform: scale(1.1);
        }

        /* Gallery Cards */
        .gallery-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .gallery-card {
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

        .gallery-card:hover {
            transform: translateY(-10px) scale(1.05);
        }

        .gallery-card img {
            width: 100%;
            border-radius: 15px 15px 0 0;
            transition: transform 0.3s ease-in-out;
        }

        .gallery-card:hover img {
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
</head>
<body>

<!-- Gallery Section -->
<section class="gallery-bg">
    <div class="container">
        <h2 class="gallery-title">Explore Our Work</h2>

        <!-- Gallery Buttons -->
        <div class="gallery-buttons">
            <button class="btn active" data-bs-target="#works-gallery">Our Works</button>
            <button class="btn" data-bs-target="#clients-gallery">Our Clients</button>
            <button class="btn" data-bs-target="#team-gallery">Our Team</button>
        </div>

        <!-- Works Gallery -->
        <div id="works-gallery" class="gallery-grid">
            <div class="gallery-card">
                <img src="https://via.placeholder.com/400x300?text=Project+1" alt="Project 1">
                <div class="gallery-info">
                    <h4>Project 1</h4>
                    <p>Amazing Project</p>
                </div>
            </div>
            <div class="gallery-card">
                <img src="https://via.placeholder.com/400x300?text=Project+2" alt="Project 2">
                <div class="gallery-info">
                    <h4>Project 2</h4>
                    <p>Creative Design</p>
                </div>
            </div>
            <div class="gallery-card">
                <img src="https://via.placeholder.com/400x300?text=Project+3" alt="Project 3">
                <div class="gallery-info">
                    <h4>Project 3</h4>
                    <p>Innovative Ideas</p>
                </div>
            </div>
        </div>

        <!-- Clients Gallery (Hidden by default) -->
        <div id="clients-gallery" class="gallery-grid d-none">
        <div class="clients-bg">
                <h2>Our Clients</h2>
                <div class="container">
                    <div class="row ">
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/CanaraBank.jpg" alt="Client 1" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/AaradyaaGold.jpg" alt="Client 2" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/ACEEngineering.jpg" alt="Client 3" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/BIG3.jpg" alt="Client 4" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/CrescentHeights.jpg" alt="Client 5" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/HandloomKing.jpg" alt="Client 1" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/Mahsa.jpg" alt="Client 2" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/MGP.jpg" alt="Client 3" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/MNEyeHospital.jpg" alt="Client 4" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/PINK.jpg" alt="Client 5" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/PrasanthHospitals.jpg" alt="Client 1" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/RepcoBank.jpg" alt="Client 2" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/sivetCollege.jpg" alt="Client 3" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/Sky pix.jpg" alt="Client 4" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/SRM.jpg" alt="Client 5" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/StarBiriyani.jpg" alt="Client 1" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/UBER.jpg" alt="Client 2" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/UBEREATS.jpg" alt="Client 3" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/Venper.jpg" alt="Client 4" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/Vetri Home Appliance.jpg" alt="Client 5" class="img-fluid"></div>
                    <div class="col-md-3 col-sm-6 mb-4  "><img src="assets/images/portfolio/client/Wootunutrition.jpg" alt="Client 5" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Gallery (Hidden by default) -->
        <div id="team-gallery" class="gallery-grid d-none">
            <div class="gallery-card">
                <img src="assets/images/demoimg.png" alt="Leenah Grace">
                <div class="gallery-info">
                    <h4>Leenah Grace</h4>
                    <p>Proprietrix</p>
                </div>
            </div>
            <div class="gallery-card">
                <img src="https://via.placeholder.com/300x300?text=Team+Member+2" alt="Usha">
                <div class="gallery-info">
                    <h4>Usha</h4>
                    <p>Marketing Manager</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS for Gallery Section Toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.gallery-buttons button');
        const galleries = document.querySelectorAll('.gallery-grid');

        buttons.forEach((button, idx) => {
            button.addEventListener('click', function() {
                buttons.forEach(btn => btn.classList.remove('active'));
                galleries.forEach(gallery => gallery.classList.add('d-none'));

                this.classList.add('active');
                galleries[idx].classList.remove('d-none');
            });
        });
    });
</script>

</body>
</html>
<?php
include('include/footer.php');
?>