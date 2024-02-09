<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .nav-link, .navbar-head, .signature, .welcome-div, .location{
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .nav-link{
            font-weight: 800;
            width: 100px;
            text-align: center;
        }
        ::selection{
            user-select: none;
        }
        .navbar-sticky{
            position: -webkit-sticky !important;
            position: sticky !important;
            top: 0px !important;
            z-index: 50;
        }
        @media screen and (max-width:500px) {
            .navbar-logo-div{
                height: 45px !important;
                padding: 3px 0px !important;

            }
            .navbar-logo, .navbar-head{
                display: flex !important;
                justify-content: center !important;
            }
            .navbar-logo img{
                width: 7.5% !important;
            }
            .navbar-head h5 b{
                position: relative !important;
                top: -10px !important;
                line-height: 0px !important;
                font-size: 8px !important;
            }
            .location-text{
                font-size: 5px !important;
            }
            .location{
                padding: 0px 5px;
                position: absolute !important;
                top: -10px !important;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="container-fluid">
        <div class="row">
            <div class="location d-flex" style="position: absolute;cursor:pointer;">
                <a href="https://maps.app.goo.gl/4sPds4QWZ9HaAi5P9" style="color:black; text-decoration:none" target="_blank"><i class="fa-solid fa-location-dot mt-1 location-text" style="font-size: 12px;"></i><span style="font-size:13px;" class="location-text">&nbsp; Yogasala RGUKT, Nuzvid, Andhra Pradesh, India - 521202</span></a>
            </div>
            <div class="navbar-logo-div d-flex flex-column align-items-center pt-2" style="width: 100%; border-bottom:1px solid lightgray;">
                <div class="navbar-logo">
                    <img src="./static/images/logos/yogasala_logo.png" width="80">
                </div>
                <div class="navbar-head">
                    <h5><b>Yogasala RGUKTN</b></h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation Bar -->
    <div class="navbar-sticky container-fluid">
        <div class="row">
            <div class="navbar navbar-expand-lg bg-light shadow" style="display: flex; flex-direction: column; margin:0px; padding:0px;">
                <div class="navbar-nav-div collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>