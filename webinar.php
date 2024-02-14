<!DOCTYPE html>
<html lang="en">
<html>
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

    <script src="https://kit.fontawesome.com/0d9019f3e0.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marcellus">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gentium Book Plus">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Expletus Sans">

    <style>
        body{
            scroll-behavior: smooth;
        }
        ::-webkit-scrollbar{
            width: 5px;
            background-color: transparent;
        }
        ::-webkit-scrollbar-thumb{
            background-color: lightgray;
            border-radius: 50px;
        }
        .webinar-video-button{
            background: none;
            outline: none;
            border: none;
        }
        .webinar-video{
            width: 100%;
            height:170px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .webinar-video:hover{
            background-color: lightgrey !important;
        }
        .webinar-video::before{
            position: absolute;
            content: "";
            background-color: white;
            width: 20px;
            height: 20px;
        }
        .webinar-play{
            font-size: 50px;
            color:red;
            filter:drop-shadow(1px 1px 1px black)
        }
        .webinar-video:hover .webinar-play{
            font-size: 55px;
            color:red;
        }
        @media screen and (max-width:520px){
            .webinar-button{
                margin: 100px !important;
            }
            .webinar-video{
                height: 200px !important;
            }
        }
        @media screen and (min-width:950px){
            .webinar-main-image{
                height: 375px !important;
            }
            .img-image{
                width: 100% !important;
                height: 100% !important;
                object-fit: fill;
            }
        }
    </style>

</head>
<body style="background-color:papayawhip">
    <?php include 'navbar.php' ?>
    <div class="container-fluid  py-2 py-md-4">
        <div class="row p-2 px-sm-3">
            <div class="col-md-12 p-0 border rounded d-md-flex justify-content-between bg-white" style="position: relative;">
                <div class="col-md-5 col-sm-12 p-sm-3 p-2 webinar-main-image">
                    <img src="./static/images/webinars/astanga_yogaa.png" class="img-image img-fluid">
                </div>
                <div class="col-md-7 col-sm-12 p-sm-3 p-2 m-0 d-flex flex-column justify-content-between">
                    <div class="">
                        <div class="webinar-title">
                            <b class="font-4 font-larger">Astanga Yoga Level-1 415 characters</b>
                            <hr>
                        </div>
                        <div class="webinar-info">
                            <span class="font-4 text-gray smaller"><span><i class="fa fa-calendar" aria-hidden="true"></i> 16 January, 2017</span></span>
                            <span class="font-4 text-gray smaller"><span><i class="fa fa-users" aria-hidden="true"></i> 1000 Members</span></span>
                        </div>
                        <div class="webinar-description-head mt-3">
                            <b><span class="font-4">Description:</span></b>
                        </div>
                        <div class="webinar-description mt-2">
                            <p class="font-4 font-smaller text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi neque adipisci beatae, vero excepturi eveniet voluptate accusamus ipsum vitae aut itaque molestiae commodi perspiciatis ut dolorem consequatur quaerat. Consequuntur, iure.</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <a href="" class="col-sm-4 col-12 btn btn-success">Download Certificate</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-md-4 px-3 py-0 mt-3">
            <p class="p-0 font-4 m-0 bold">Videos</p>
        </div>
        <hr>
        <div class="row px-md-4 py-2 fadein">
            <div class="col-md-3 col-sm-6 webinar-video-div p-2 d-flex flex-column">
                <button class="webinar-video-button text-left modal-button" value="https://www.youtube.com/embed/YmBDt9NVOOU?si=iIVTHO0k9AMMrPyb">
                    <div class="webinar-video" style="background-image: url(./static/images/webinars/day1.1.png);background-size: 100% 100%;">
                        <i class="fa-brands fa-youtube webinar-play"></i>
                    </div>
                    <div class="webinar-title my-2">
                        <b class="font-4">Niyama - Self Disciplines by Yogaratna Dr. S.N.Omkar, Chief Research Scientist, IISc., Bengaluru.</b>
                    </div>
                    <span class="font-4 font-small text-gray smaller"> 16 January, 2017</span></span><br>
                </button>
            </div>
        </div>
        <div class="modal-container" id="modal-container">
            <div class="close" id="close" style="position:absolute;top:25px; right:40px;color:white;font-size:30px;cursor:pointer;">&times;</div>
            <div class="modal-box">
                <iframe width="500" height="333" id="iframe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</body>
<script src="./static/bootstrap/jquery.js"></script>
<script src="./static/bootstrap/scripts/script.js"></script>
</html>