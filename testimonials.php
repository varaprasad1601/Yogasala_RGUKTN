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
        body{
            scroll-behavior: smooth;
        }
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

        .cards{
            height: 300px;
            border-radius: 15px;
            background-color: whitesmoke;
        }
        .image-content{
            width: 100%;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -100px;
        }
        .card-image{
            border: 5px solid rgba(165, 42, 42, 0.250);
            width: 175px;
            height: 175px;
            border-radius: 50%;
            background:radial-gradient(white,#ffb669);
        }
        .card-image img{
            border-radius: 50%;
        }
        .card-button{
            cursor: pointer;
            position: absolute;
            border-radius: 50%;
            margin-top: 125px;
            margin-left: 125px;
            width: 50px;
            height: 50px;
            background:linear-gradient(45deg,#ffb669,#f68207);
            filter: drop-shadow(0px 2px 3px black);
            display: flex;
            justify-content: center;
            align-items: center;
            outline: none;
            border: none;
        }
        .card-button:hover{
            filter: drop-shadow(0px 2px 5px black);
        }
        .card-content{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid">
        <div class="row p-md-3 py-3">
            <div class="col-md-12 d-flex flex-wrap">
                <div class="col-md-4 col-sm-6 px-sm-3 my-5">
                    <div class="cards border shadow mt-5">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="./static/images/testimonials/t1.png" width="100%">
                            </div>
                            <button class="card-button modal-button" value="https://www.youtube.com/embed/jBEPQTD5xOk?si=2s6c04nJYRYUTiI4"><i class="fa-solid fa-play" style="font-size: 25px; color:whitesmoke; padding:0px; margin-top:1px; margin-left:3px;filter:drop-shadow(1px 1px 1px black)"></i></button>
                        </div>
                        <div class="card-content px-3 mt-2">
                            <center><b  class="card-name font-4"><span>Shri M. Venkaiah Naidu</span></b></center>
                            <center><p class="card-designation font-4 font-smaller text-gray mb-0">Former Vice President of India</p></center>
                            <center><p class="card-description font-4 font-small mt-3 " style="height: 100px; overflow:hidden;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum accusantium et explicabo sed. Totam, fuga molestiae. Ipsam harum, veniam nemo labore officiis impedit incidunt magni ad, illum rerum, nostrum esse!</p></center>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 px-sm-3 my-5">
                    <div class="cards border shadow mt-5">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="./static/images/testimonials/t2.png" width="100%">
                            </div>
                            <button class="card-button modal-button" value="https://www.youtube.com/embed/IBz2Anb2QCk?si=sdoe0Bu9Z8nr4XV0"><i class="fa-solid fa-play" style="font-size: 25px; color:whitesmoke; padding:0px; margin-top:1px; margin-left:3px;filter:drop-shadow(1px 1px 1px black)"></i></button>
                        </div>
                        <div class="card-content px-3 mt-2">
                            <center><b  class="card-name font-4"><span>Shri Ramnath Kovind ji</span></b></center>
                            <center><p class="card-designation font-4 font-smaller text-gray mb-0">Former President of India</p></center>
                            <center><p class="card-description font-4 font-small mt-3 " style="height: 100px; overflow:hidden;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum accusantium et explicabo sed. Totam, fuga molestiae. Ipsam harum, veniam nemo labore officiis impedit incidunt magni ad, illum rerum, nostrum esse!</p></center>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 px-sm-3 my-5">
                    <div class="cards border shadow mt-5">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="./static/images/testimonials/t3.png" width="100%">
                            </div>
                            <button class="card-button modal-button" value="https://www.youtube.com/embed/DFh8PSZ4M68?si=H47Z1EyYz6hazf9n&amp;start=22"><i class="fa-solid fa-play" style="font-size: 25px; color:whitesmoke; padding:0px; margin-top:1px; margin-left:3px;filter:drop-shadow(1px 1px 1px black)"></i></button>
                        </div>
                        <div class="card-content px-3 mt-2">
                            <center><b  class="card-name font-4"><span>Shri. S. P. Balasubrahmanyam</span></b></center>
                            <center><p class="card-designation font-4 font-smaller text-gray mb-0">Singer</p></center>
                            <center><p class="card-description font-4 font-small mt-3 " style="height: 100px; overflow:hidden;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum accusantium et explicabo sed. Totam, fuga molestiae. Ipsam harum, veniam nemo labore officiis impedit incidunt magni ad, illum rerum, nostrum esse!</p></center>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 px-sm-3 my-5">
                    <div class="cards border shadow mt-5">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="./static/images/testimonials/t1.png" width="100%">
                            </div>
                            <button class="card-button modal-button" value="https://www.youtube.com/embed/jBEPQTD5xOk?si=2s6c04nJYRYUTiI4"><i class="fa-solid fa-play" style="font-size: 25px; color:whitesmoke; padding:0px; margin-top:1px; margin-left:3px;filter:drop-shadow(1px 1px 1px black)"></i></button>
                        </div>
                        <div class="card-content px-3 mt-2">
                            <center><b  class="card-name font-4"><span>Shri M. Venkaiah Naidu</span></b></center>
                            <center><p class="card-designation font-4 font-smaller text-gray mb-0">Former Vice President of India</p></center>
                            <center><p class="card-description font-4 font-small mt-3 " style="height: 100px; overflow:hidden;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum accusantium et explicabo sed. Totam, fuga molestiae. Ipsam harum, veniam nemo labore officiis impedit incidunt magni ad, illum rerum, nostrum esse!</p></center>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 px-sm-3 my-5">
                    <div class="cards border shadow mt-5">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="./static/images/testimonials/t2.png" width="100%">
                            </div>
                            <button class="card-button modal-button" value="https://www.youtube.com/embed/IBz2Anb2QCk?si=sdoe0Bu9Z8nr4XV0"><i class="fa-solid fa-play" style="font-size: 25px; color:whitesmoke; padding:0px; margin-top:1px; margin-left:3px;filter:drop-shadow(1px 1px 1px black)"></i></button>
                        </div>
                        <div class="card-content px-3 mt-2">
                            <center><b  class="card-name font-4"><span>Shri Ramnath Kovind ji</span></b></center>
                            <center><p class="card-designation font-4 font-smaller text-gray mb-0">Former President of India</p></center>
                            <center><p class="card-description font-4 font-small mt-3 " style="height: 100px; overflow:hidden;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum accusantium et explicabo sed. Totam, fuga molestiae. Ipsam harum, veniam nemo labore officiis impedit incidunt magni ad, illum rerum, nostrum esse!</p></center>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 px-sm-3 my-5">
                    <div class="cards border shadow mt-5">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="./static/images/testimonials/t3.png" width="100%">
                            </div>
                            <button class="card-button modal-button" value="https://www.youtube.com/embed/DFh8PSZ4M68?si=H47Z1EyYz6hazf9n&amp;start=22"><i class="fa-solid fa-play" style="font-size: 25px; color:whitesmoke; padding:0px; margin-top:1px; margin-left:3px;filter:drop-shadow(1px 1px 1px black)"></i></button>
                        </div>
                        <div class="card-content px-3 mt-2">
                            <center><b  class="card-name font-4"><span>Shri. S. P. Balasubrahmanyam</span></b></center>
                            <center><p class="card-designation font-4 font-smaller text-gray mb-0">Singer</p></center>
                            <center><p class="card-description font-4 font-small mt-3 " style="height: 100px; overflow:hidden;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum accusantium et explicabo sed. Totam, fuga molestiae. Ipsam harum, veniam nemo labore officiis impedit incidunt magni ad, illum rerum, nostrum esse!</p></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-container" id="modal-container">
        <div class="close" id="close" style="position:absolute;top:25px; right:40px;color:white;font-size:30px;cursor:pointer;">&times;</div>
        <div class="modal-box">
            <iframe width="500" height="333" id="iframe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</body>
<script src="./static/bootstrap/scripts/script.js"></script>
<script src="https://kit.fontawesome.com/0d9019f3e0.js" crossorigin="anonymous"></script>
</html>