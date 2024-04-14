<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Cars Website</title>
    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="css/home.css">
    <!-- FontAwesome Link -->
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.css">
</head>
<body>
    <!-- Start Navbar -->
    <nav>
        <div class="container nav-container">
            <a href="" class="logo"><h3>Beg Joker.</h3></a>
            <ul class="nav-link">
                <li><a href="/home" style="--i:1;" class="active">Home</a></li>
                <li><a href="/ecom" style="--i:2;">SHOP</a></li>
                <li><a href="" style="--i:3;">RENT</a></li>
                <li><a href="" style="--i:4;">MAP</a></li>
                <li><a href="" style="--i:5;">MESSAGE</a></li>
                <li><a href="/signup" style="--i:5;">Sign Up</a></li>

            </ul>
            <ul class="social-link">
                <li><a href="" style="--i:1;"><i class="fab fa-facebook"></i></a></li>
                <li><a href="" style="--i:2;"><i class="fab fa-twitter"></i></a></li>
                <li><a href="" style="--i:3;"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </nav>
    <style>
        /* CSS Styles */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; /* Align items from left to right */
            flex-direction: row; /* Set flex direction to row */
        }

        .card {
            width: 300px;
            margin: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-img img {
            width: 100%;
            height: auto;
        }

        .card-details {
            padding: 20px;
        }

        .car-title {
            margin: 0;
            font-size: 1.5rem;
        }

        .car-price {
            margin: 10px 0;
            font-size: 1.2rem;
            color: #333;
        }

        .car-tags {
            margin-bottom: 10px;
            color: #666;
        }

        .rating {
            color: #FFD700; /* Golden color for stars */
            font-size: 1.2rem;
        }

        .checked {
            color: orange;
        }

    </style>
</head>
<body> 
    <div class="card-container">
        <!-- First Card -->
        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <!-- Repeat this div block to create more cards -->
        <!-- Second Card -->
        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <!-- Repeat this div block to create more cards -->
        <!-- Third Card -->
        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <!-- Repeat this div block to create more cards -->
        <!-- Fourth Card -->
        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <!-- Repeat this div block to create more cards -->
        <!-- Fifth Card -->
        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <!-- Repeat this div block to create more cards -->
        <!-- Sixth Card -->
        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <!-- Repeat this div block to create more cards -->
        <!-- Seventh Card -->
        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <!-- Repeat this div block to create more cards -->
        <!-- Eighth Card -->
        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <!-- Repeat this div block to create more cards -->
        <!-- Ninth Card -->
        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <!-- Repeat this div block to create more cards -->
        <!-- Tenth Card -->
        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-img">
                <img src="car-image.jpg" alt="Car Image">
            </div>
            <div class="card-details">
                <h3 class="car-title">Car Brand</h3>
                <p class="car-price">$XX,XXX</p>
                <p class="car-tags">Tag1, Tag2, Tag3</p>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
        <!-- End of Cards -->
    </div>

</body>
</html>
