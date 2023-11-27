pip install selenium<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'logic-hardware.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardware</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <!-- Include Swiper and Owl Carousel scripts -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="hardware.css">
    <style>
        .slider {
            max-width: 110vw;
            display: flex;
            margin-bottom: 20vh;
        }

        .slider .card {
            flex: 10;
            margin: 0 1%;
            background: #fff;
        }

        .slider .card .img {
            height: 30vh;
            width: 100%;
        }

        .slider .card .img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .slider .card .content {
            padding: 1vw 2vh;
        }

        .card .content .title {
            font-size: 2.5vh;
            font-weight: 600;
        }

        .card .content .sub-title {
            font-size: 2vh;
            font-weight: 600;
            color: #e74c3c;
            line-height: 2vh;
        }

        .card .content p {
            text-align: justify;
            margin: 1vw 0;
        }

        .card .content .btn {
            display: block;
            text-align: left;
            margin: 1vw 0;
        }

        .card .content .btn button {
            background: #e74c3c;
            color: #fff;
            border: none;
            outline: none;
            font-size: 1.7vh;
            padding: 0.5vw 0.8vh;
            border-radius: 0.5%;
            cursor: pointer;
            transition: 0.2s;
        }

        .card .content .btn button:hover {
            transform: scale(0.9);
        }
    </style>
</head>

<body>
    <div class="header">
        <nav id="navbar">
            <ul>
                <li id="li-section"><a id="gfg">Where?</a></li>

                <section id="li-section">
                    <li><a id="gfg1" href="/ecology/ecology.php">Ecology</a></li>
                    <li><a id="gfg2" href="#">Hardware</a></li>
                    <li><a id="gfg3" href="#">Everyday activity </a></li>
                </section>

                <section id="li-section">
                    <li>
                        <a id="gfg4" href="/log-in/log-in.php">Sign in </a>
                        <a id="gfg5" href="/sign-up/sign-up.php">Sign up</a>
                    </li>
                </section>
            </ul>
        </nav>

        <section class="search">
            <div class="container">
                <div class="search-box">
                    <input type="text" class="search-box-input" placeholder="What are you looking for?">
                    <button class="search-box-btn">
                        <i class="fas fa-search" style="color: #bcff1f;"></i>
                    </button>
                </div>
            </div>
        </section>

        <div id="searchResults">
            <?php echo $output; ?>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include Swiper and Owl Carousel scripts -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Owl Carousel initialization script -->
    <script>
        $(document).ready(function () {
            $(".slider").owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000, // 2000ms = 2s;
                autoplayHoverPause: true,
                items: 1, // Number of items per slide
                responsive: {
                    520: {
                        items: 2
                    },
                    950: {
                        items: 3
                    }
                }
            });
        });
    </script>

    <!-- Swiper initialization script -->
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                520: {
                    slidesPerView: 2
                },
                950: {
                    slidesPerView: 3
                }
            }
        });
    </script>

</body>

</html>
