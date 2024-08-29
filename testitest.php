<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item {
            padding: 15px;
        }
        .card {
            border: none;
            text-align: center;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
            color:red;
        }
    </style>
</head>
<body>

<div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="your-image-source" class="img-fluid" alt="LeBlanc Interior">
                            <h5 class="card-title">LeBlanc Interior</h5>
                            <p class="card-text">Eumaxindia's event planning ran smoothly. Their exceptional work and unbridled passion for making events incredible is something I'll always be thankful for.</p>
                            <p class="card-text"><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="your-image-source" class="img-fluid" alt="Diksha Eye Care">
                            <h5 class="card-title">Diksha Eye Care</h5>
                            <p class="card-text">Eumaxindia's attention to detail was impeccable, and their commitment to excellence was second to none. Highly recommend them for your advertising needs!</p>
                            <p class="card-text"><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="your-image-source" class="img-fluid" alt="Wrist World">
                            <h5 class="card-title">Wrist World</h5>
                            <p class="card-text">Planning and working with Eumaxindia was a true pleasure. The staff are knowledgeable, friendly, and always willing to go the extra mile.</p>
                            <p class="card-text"><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="your-image-source" class="img-fluid" alt="VB Designer Studio">
                            <h5 class="card-title">VB Designer Studio</h5>
                            <p class="card-text">Eumax’s Ad reach is impressive, and their experienced personnel effortlessly guided me through the entire process. I highly recommend Eumaxindia.</p>
                            <p class="card-text"><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Duplicate carousel-item divs with different content as needed -->

    </div>
    <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
