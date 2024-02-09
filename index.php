<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Yogasala RGUKTN</title>
    <link rel="icon" href="./static/images/logos/yogasala_logo.png">
    <link rel="stylesheet" href="./static/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./static/bootstrap/styles/styles.css">


    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marcellus">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gentium Book Plus">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Expletus Sans">
    <style>
        ::selection{
            user-select: none;
        }
        ::-webkit-scrollbar{
            width: 5px;
            background-color: transparent;
        }
        ::-webkit-scrollbar-thumb{
            background-color: lightgray;
            border-radius: 50px;
        }
        
        .navbar-sticky{
            position: -webkit-sticky !important;
            position: sticky !important;
            top: 0px !important;
            z-index: 100;
        }
        .carousel-item{
            height: 100%;
        }

        .carousel-control-prev{
            width: 100px;
            background: linear-gradient(90deg,rgba(0, 0, 0, 0.5),rgba(255, 255, 255, 0));
        }
        .carousel-control-next{
            width: 100px;
            background: linear-gradient(-90deg,rgba(0, 0, 0, 0.5),rgba(255, 255, 255, 0));
        }
        ::-webkit-scrollbar{
            scroll-behavior: smooth;
        }
        .level{
            border: 1px solid lightgray;
            width: 60%;
            text-align: center;
            border-radius: 20px;
            padding: 5px 0px;
            background-color: whitesmoke;
            cursor: pointer;
        }
        .medal-animation{
            animation: medal-rotation 7s linear infinite;
        }
        .webinar{
            width: 30%;
        }
        .webinar-image{
            height: 222px;
        }
        .completed-btn{
            width: 100%;
            border-radius:0px;
            background-color:#008175;
            color:white;
        }
        .completed-btn:hover{
            background-color:#00756a !important;
            color:white !important;
        }
        .registered-btn{
            width: 100%;
            border-radius:0px;
            background-color:#f68207;
            color:white;
        }
        .registered-btn:hover{
            background-color:#e97e0c !important;
            color:white !important;
        }
        @keyframes medal-rotation {
            0%{

                transform: rotateY(0deg);
            }
            50%{
                transform: rotateY(90deg);
            }
            100%{
                transform: rotateY(0deg);
            }
        }
        @media screen and (max-width:950px){
            .mobile-block{
                width: 45% !important;
                padding-bottom: 20px !important;
                margin: 50px 0px 0px 0px !important;
            }
            .mobile-block:nth-child(3){
                display: none !important;
            }
            .webinars{
                padding: 0px 50px !important;
            }
            .webinar{
                width: 47% !important;
            }
            .webinar:nth-child(3){
                display: none !important;
            }
            .main-mobile{
                display: flex;
                flex-wrap: wrap;
                padding: 0px !important;
            }
            .medal-div{
                width: 32% !important;
                height: 75vh !important;
                padding: 15px 0px !important;
            }
            .performance-margin{
                margin-bottom: -20px !important;
            }
        }
        @media screen and (max-width:520px) {
            .main-poster{
                height: 150px !important;
                padding: 0 !important;
                justify-content: flex-start !important;
            }
            .caption-div{
                margin: 25px !important;
                padding: 0 !important;
                width: 60%;
            }
            .caption{
                font-size: 13px;
                line-height: 18px !important;
            }
            .signature{
                margin-top: -5px !important;
                font-size: 8px !important;
            }
            .explore-btn{
                height: 18px;
                padding: 3px 20px !important;
                font-size: 8px !important;
                margin-top: 0px !important;
                border-radius: 3px !important;
            }
            .carousel-row{
                height: 150px !important;
            }
            .carousel-control-prev{
                width: 25px;
            }
            .carousel-control-next{
                width: 25px;
            }
            .medals{
                width: 95% !important;
                padding: 10px 0px;
            }
            .medal-div{
                width: 32% !important;
                height: 21vh !important;
                margin-bottom: 7px !important;
                padding: 15px 0px !important;
            }
            .medal{
                width: 50% !important;
            }
            .medal-count{
                font-size: 3vh !important;
                font-weight: 800;
                line-height: 10px !important;
                margin-top: 10px !important;
            }
            .medal-background{
                background-size:100% 250% !important;
            }
            .medal-type{
                font-size: 1.5vh !important;
                line-height: 0px !important;
            }
            .levels{
                width: 100% !important;
                margin-top: 0px !important;
            }
            .level{
                width: 90% !important;
            }
            .mobile-block{
                width: 93% !important;
                height: max-content !important;
                padding-bottom: 20px !important;
                margin: 50px 0px 0px 0px !important;
            }
            .mobile-block:nth-child(3){
                display:block !important;
            }
            .initial-padding{
                padding: 15px 10px !important;
            }
            .smaller{
                font-size: 11px !important;
            }
            .pt-md{
                padding-top: 40px !important;
            }
            .webinar{
                width:100% !important;
                margin-top: 25px !important;
            }
            .webinars{
                padding: 0px 10px !important;
            }
            .webinar:nth-child(1){
                margin-top: 0px !important;
            }
            .webinar:nth-child(3){
                display: block !important;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php' ?>

    <!-- Main Poster -->
    <div class="container-fluid mb-5">
        <div class="row p-0" style="background-image: url(./static/images/poster.png); background-size: 100% 100%;">
            <div class="main-poster col-md-12 p-5 d-flex justify-content-center flex-wrap" style="height: 475px;">
                <div class="caption-div col-md-7 ps-5 mt-5">
                    <h1 class="caption" style="font-family: Expletus Sans; font-weight:bold;line-height:50px">Inspiriting Social Consciousness and Patriotism through the Art of Yoga</h1>
                    <h5 class="signature mt-3" style="font-family:Expletus Sans; text-align: right;">-Yogasala RGUKTN</h5>
                    <a href="#home" class="explore-btn btn btn-primary px-5 mt-3">Explore</a>
                </div>
                <div class="col-md-5 p-5">
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel -->
    <div id="home" class="mt-5" style="height: 50px;"></div>
    <div class="container-fluid">
        <div class="welcome-div d-flex justify-content-center aling-items-center my-3">
            <h1 class="font-3 fadein">Welcome to Yoga Arena</h1>
        </div>
        <div class="carousel-row row p-0 mb-5 fadein" style="height: 460px;">
            <div class="carousel slide carousel-fade p-0" data-bs-ride="carousel" id="carousel" style="height: 100%;" data-bs-interval="1000" data-bs-pause="hover">
                <div class="carousel-indicators">
                    <button data-bs-target="#carousel" data-bs-slide-to="0" type="button" class="active"></button>
                    <button data-bs-target="#carousel" data-bs-slide-to="1" type="button"></button>
                    <button data-bs-target="#carousel" data-bs-slide-to="2" type="button"></button>
                </div>
                <div class="carousel-inner p-0" style="height: 100%;">
                    <div class="carousel-item active">
                        <img src="./static/images/banner_1.png" width="100%" height="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="./static/images/poster.png" width="100%" height="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="./static/images/20230323_023804_0000.png" width="100%" height="100%">
                    </div>
                    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carousel">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carousel">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- About Yogasala -->
    <div class="container-fluid">
        <div class="row mb-4 d-flex justify-content-center">
            <div class="col-md-11 p-4 text-center">
                <h2 class="mb-4 font-3 fadein" >Yogasala</h2>
                <p style="text-align: center;" class="font-4 fadein">Our mission lies in a profound commitment to inspire individuals and cultivate a profound sense of national pride. We believe in harnessing the timeless wisdom of yoga as a transformative tool for personal development, empowering individuals to embark on a journey of self-discovery and holistic well-being. Through dedicated education initiatives, impactful outreach programs, and meaningful community engagement, we aspire to establish a profound connection with oneself, others, and the nation.</p>
                <p style="text-align: center;" class="font-4 fadein">In our pursuit of instilling patriotism,particularly through the captivating art of Laya Yoga performances. By fusing lyrical tones and rhythmic beats with the divine essence of yoga Asanas,we aim to kindle the flame of patriotism in the hearts of all who experience our artistic endeavors.We understand that true patriotism extends beyond individual development to collective welfare. Through various social service initiatives, we actively contribute to the betterment of our community and nation. We invite you to join us in this transformative journey, as we strive to nurture a profound connection with oneself, unity through cultural expressions, and contribute meaningfully to the well-being of our nation. Together, let us embody the principles of yoga, celebrate our heritage, and build a future steeped in wisdom, pride, and service.</p>
            </div>
        </div>
    </div>

    <!-- Achievements -->
    <div class="container-fluid column-flex">
        <div class="row mb-2">
            <center><h1 class="font-3 fadein">Achievements</h1></center>
        </div>
        <div class="row pb-2 row-flex medal-background fadein">
            <div class="col-10 medals row-flex center around">
                <div class="col-3 medal-div column-flex evenly border rounded shadow" style="height:52vh;">
                    <img src="./static/medals/medals_2/gg.png" width="45%" class="medal medal-animation">
                    <h1 class="font-1 medal-count" style="font-size:10vh;line-height:20px;">170</h1>
                    <b style="line-height:0px;" class="font-3 medal-type">Gold Medals</b>
                </div>
                <div class="col-3 medal-div column-flex evenly border rounded shadow" style="height:52vh;">
                    <img src="./static/medals/medals_2/ss.png" width="45%" class="medal medal-animation">
                    <h1 class="font-1 medal-count" style="font-size:10vh;line-height:20px;">74</h1>
                    <b style="line-height:0px;" class="font-3 medal-type">Silver Medals</b>
                </div>
                <div class="col-3 medal-div column-flex evenly border rounded shadow" style="height:52vh;">
                    <img src="./static/medals/medals_2/bb.png" width="45%" class="medal medal-animation">
                    <h1 class="font-1 medal-count" style="font-size:10vh;line-height:20px;">55</h1>
                    <b style="line-height:0px;" class="font-3 medal-type">Bronze Medals</b>
                </div>
            </div>
        </div>

        <div class="row px-5 pb-5 mt-5 mb-5 levels row-flex border rounded shadow fadein" style="width: 95%;">
            <div class="col-md-4 mt-5 column-flex fadein">
                <div class="col-md-12 row-flex">
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/ggg.png" width="40%">
                        <b class="font-1">39</b>
                    </div>
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/sss.png" width="40%">
                        <b class="font-1">32</b>
                    </div>
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/bbb.png" width="40%">
                        <b class="font-1">27</b>
                    </div>
                </div>
                <b class="font-3 mt-2 level">District</b>
            </div>
            <div class="col-md-4 mt-5 column-flex fadein">
                <div class="col-md-12 row-flex">
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/ggg.png" width="40%">
                        <b class="font-1">124</b>
                    </div>
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/sss.png" width="40%">
                        <b class="font-1">30</b>
                    </div>
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/bbb.png" width="40%">
                        <b class="font-1">20</b>
                    </div>
                </div>
                <b class="font-3 mt-2 level">State</b>
            </div>
            <div class="col-md-4 mt-5 column-flex fadein">
                <div class="col-md-12 row-flex">
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/ggg.png" width="40%">
                        <b class="font-1">7</b>
                    </div>
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/sss.png" width="40%">
                        <b class="font-1">12</b>
                    </div>
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/bbb.png" width="40%">
                        <b class="font-1">8</b>
                    </div>
                </div>
                <b class="font-3 mt-2 level">Nationals</b>
            </div>
            <div class="col-md-4 mt-5 column-flex fadein">
                <div class="col-md-12 row-flex">
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/ggg.png" width="40%">
                        <b class="font-1">0</b>
                    </div>
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/sss.png" width="40%">
                        <b class="font-1">0</b>
                    </div>
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/bbb.png" width="40%">
                        <b class="font-1">0</b>
                    </div>
                </div>
                <b class="font-3 mt-2 level">National Games</b>
            </div>
            <div class="col-md-4 mt-5 column-flex fadein">
                <div class="col-md-12 row-flex">
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/ggg.png" width="40%">
                        <b class="font-1">-</b>
                    </div>
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/sss.png" width="40%">
                        <b class="font-1">-</b>
                    </div>
                    <div class="col-md-3 column-flex">
                        <img src="./static/medals/medals_3/bbb.png" width="40%">
                        <b class="font-1">-</b>
                    </div>
                </div>
                <b class="font-3 mt-2 level">Khelo India</b>
            </div>
        </div>
    </div>

    <!-- Performances -->
    <div class="container-fluid mb-4 py-4 px-5 initial-padding" style="background: url(./static/images/patterns.jpg); background-size:100% 100%;">
        <div class="row performance-margin mb-lg-4">
            <center><h1 class="font-3 fadein">Performances</h1></center>
        </div>
        <div class="row">
            <div class="col-md-12 d-md-flex evenly main-mobile">
                <div class="col-md-4 border rounded shadow bg-light mobile-block fadein" style="width: 30%;">
                    <div class="col-md-11 rounded" style="position: relative; top:-25px; margin:auto; margin-bottom:-10px">
                        <img src="./static/performances/IMG_20240113_153803.jpg" width="100%" height="200" class="rounded">
                    </div>
                    <div class="col-md-12 px-3 pb-4">
                        <b class="font-4"><span>All India Inter University Yoga Championship</span></b>
                        <hr>
                        <span class="font-4 font-small text-gray smaller"><span><i class="fa fa-calendar" aria-hidden="true"></i> 16 January, 2017</span></span><br>
                        <span class="font-4 font-small text-gray smaller"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Vijayawada</span></span><br>
                        <span class="font-4 font-small text-gray smaller"><span><i class="fa-solid fa-eye"></i> 1000 Members</span></span><br>
                        <p class="font-4 font-smaller my-2 mb-0 text-justify" style="height: 60px; overflow:hidden">Lorem VGHB ipsum dolor sit amet consectetur adipisicing elit.gvoeuhdbeu iuhe iurh ueih ruieh ruiegh riugh efbuirgf beurigbf euirgfb euirgb feyrb eyrb yevb rty Tempore illum dicta quibusdam, repellendus veritatis eos ducimus possimus corporis nulla in veniam accusamus.</p>
                        <p class="font-4 font-smaller text-right"><a href="#" class="text-decoration-none" style="position: absolute;bottom:2.5%; right:4%; width:100%">View more</a></p>
                    </div>
                </div>
                <div class="col-md-4 border rounded shadow bg-light mobile-block fadein" style="width: 30%;">
                    <div class="col-md-11 rounded" style="position: relative; top:-25px; margin:auto; margin-bottom:-10px">
                        <img src="./static/performances/IMG_20240113_203033.jpg" width="100%" height="200" class="rounded">
                    </div>
                    <div class="col-md-12 px-3">
                        <b class="font-4"><span>Ugadi Milan Celebrations</span></b>
                        <hr>
                        <span class="font-4 font-small text-gray smaller"><span><i class="fa fa-calendar" aria-hidden="true"></i> 16 March, 2019</span></span><br>
                        <span class="font-4 font-small text-gray smaller"><span><i class="fa fa-map-marker" aria-hidden="true"></i> New Delhi</span></span><br>
                        <span class="font-4 font-small text-gray smaller"><span><i class="fa-solid fa-eye"></i> 600 Members</span></span><br>
                        <p class="font-4 font-smaller my-2 mb-0 text-justify" style="height: 60px; overflow:hidden">Lorem VGHB ipsum dolor sit amet consectetur adipisicing elit. Tempore illum dicta quibusdam, repellendus veritatis eos ducimus possimus corporis nulla in veniam accusamus.</p>
                        <p class="font-4 font-smaller text-right"><a href="#" class="text-decoration-none" style="position: absolute;bottom:2.5%; right:4%; width:100%">View more</a></p>
                    </div>
                </div>
                <div class="col-md-4 border rounded shadow bg-light mobile-block fadein" style="width: 30%;">
                    <div class="col-md-11 rounded" style="position: relative; top:-25px; margin:auto; margin-bottom:-10px">
                        <img src="./static/performances/IMG_20240113_142736.jpg" width="100%" height="200" class="rounded">
                    </div>
                    <div class="col-md-12 px-3">
                        <b class="font-4"><span>RGUKT Chancellor Visit</span></b>
                        <hr>
                        <span class="font-4 font-small text-gray smaller"><span><i class="fa fa-calendar" aria-hidden="true"></i> 28 November, 2011</span></span><br>
                        <span class="font-4 font-small text-gray smaller"><span><i class="fa fa-map-marker" aria-hidden="true"></i> RGUKT Yogasala</span></span><br>
                        <span class="font-4 font-small text-gray smaller"><span><i class="fa-solid fa-eye"></i> 500 Members</span></span><br>
                        <p class="font-4 font-smaller my-2 mb-0 text-justify" style="height: 60px; overflow:hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat temporibus reprehenderit est qui. Molestias quis nam dicta minus eaque, vitae adipisci ut doloremque reprehenderit exercitationem, repellendus iste neque quaerat maiores!</p>
                        <p class="font-4 font-smaller text-right"><a href="#" class="text-decoration-none" style="position: absolute;bottom:2.5%; right:4%; width:100%">View more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-3 pt-4 pb-3">
            <a href="./performances.html" class="btn btn-font-4 fadein mt-md-2 bg-success" style="background-color:#008175;border:none;outline:none;color:white;">View All Performances</a>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="container-fluid">
        <div class="row mb-0">
            <center><h1 class="font-3 fadein">Testimonials</h1></center>
        </div>
        <div class="row">
            <?php include 'swiper.html' ?>
        </div>
        <div class="row d-flex justify-content-center">
            <center><a href="" class="btn my-4 py-2 font-4 view-all fadein" style="border:1px solid brown;background:linear-gradient(To Top,#ffb669,#f68207);color:brown;">View More</a></center>
        </div>
    </div>

    <!-- Workshops & Webinars -->
    <div class="container-fluid py-5">
        <div class="row fadein">
            <center><h1 class="font-3 fadein">Webinars and Workshops</h1></center>
        </div>
        <div class="row px-md-5 py-3 fadein">
            <div class="col-md-12 webinars d-flex flex-column flex-sm-row justify-content-around">
                <div class="webinar border rounded shadow bg-light" style="position: relative;">
                    <div class="webinar-image">
                        <img src="./static/images/webinars/" width="100%" height="100%" style="border-radius: 5px 5px 0px 0px;">
                    </div>
                    <div class="webinar-content">
                        <div class="webinar-title mt-3 px-3">
                            <b class="font-4">Heading 1</b>
                        </div>
                        <hr>
                        <div class="webinar-description mb-5">
                            <span class="font-4 font-small text-gray smaller px-3"><span><i class="fa fa-calendar" aria-hidden="true"></i> 16 January, 2017</span></span><br>
                            <span class="font-4 font-small text-gray smaller px-3"><span><i class="fa fa-users" aria-hidden="true"></i> 1000 Members</span></span><br>
                        </div>
                    </div>
                    <div class="webinar-button mt-3" style="position: absolute;bottom:0px; width:100%">
                        <a href="./webinar.html" class="registered-btn btn font-4" style="background-color:#f68207;color:white">Register</a>
                    </div>
                </div>
                <div class="webinar border rounded shadow bg-light" style="position: relative;">
                    <div class="webinar-image">
                        <img src="./static/images/webinars/" width="100%" height="100%" style="border-radius: 5px 5px 0px 0px;">
                    </div>
                    <div class="webinar-content">
                        <div class="webinar-title mt-3 px-3">
                            <b class="font-4">Heading 2</b>
                        </div>
                        <hr>
                        <div class="webinar-description mb-5">
                            <span class="font-4 font-small text-gray smaller px-3"><span><i class="fa fa-calendar" aria-hidden="true"></i> 16 January, 2017</span></span><br>
                            <span class="font-4 font-small text-gray smaller px-3"><span><i class="fa fa-users" aria-hidden="true"></i> 1000 Members</span></span><br>
                        </div>
                    </div>
                    <div class="webinar-button mt-3" style="position: absolute;bottom:0px; width:100%">
                        <a href="" class="completed-btn btn font-4" style="background-color:#008175;color:white">View Recordings</a>
                    </div>
                </div>
                <div class="webinar border rounded shadow bg-light" style="position: relative;">
                    <div class="webinar-image">
                        <img src="./static/images/webinars/" width="100%" height="100%" style="border-radius: 5px 5px 0px 0px;">
                    </div>
                    <div class="webinar-content">
                        <div class="webinar-title mt-3 px-3">
                            <b class="font-4">Heading 3</b>
                        </div>
                        <hr>
                        <div class="webinar-description mb-5">
                            <span class="font-4 font-small text-gray smaller px-3"><span><i class="fa fa-calendar" aria-hidden="true"></i> 16 January, 2017</span></span><br>
                            <span class="font-4 font-small text-gray smaller px-3"><span><i class="fa fa-users" aria-hidden="true"></i> 1000 Members</span></span><br>
                        </div>
                    </div>
                    <div class="webinar-button mt-3" style="position: absolute;bottom:0px; width:100%">
                        <a href="" class="completed-btn btn font-4" style="background-color:#008175;color:white">View Recordings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <center><a href="" class="btn my-4 py-2 font-4 view-all fadein" style="border:1px solid #00423c;background:linear-gradient(to top,#008174ab,#008175);color:white;border-radius:0px">View More</a></center>
        </div>
    </div>
</body>
<script src="./static/bootstrap/jquery.js"></script>
<script src="./static/bootstrap/scripts/script.js"></script>
<script src="./static/bootstrap/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/0d9019f3e0.js" crossorigin="anonymous"></script>
</html>