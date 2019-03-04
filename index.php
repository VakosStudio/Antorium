<!--

    ###########################################
    #                                         #
    #      HELLO!           THIS WEBSITE      #
    #                    HAS MADE BY          #
    #                           VAKOS         #
    #                                         #
    #                                         #
    #       MORE INFO ABOUT AUTHOR:           #
    #                                         #
    #            HTTPS://WWW.VAKOS.PL         #
    #                                         #
    ###########################################

-->

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Koscielecki</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,  maximum-scale=1.0 shrink-to-fit=no"/>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Styles -->
    <link rel="stylesheet" href="styles/predefined.css">
    <link rel="stylesheet" href="styles/master.css">
    <link rel="stylesheet" href="styles/media.css">
</head>
<body>
    
<!-- SITE HTML CODE START -->
    
    <?php include("included/top-bar.php"); ?>
    
    <!-- Tiles -->
    <div class="container my-4" id="tiles-container">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-6 tile big-tile" id="tile-welcome" style="background: url(images/big-tile.jpg); background-size: cover;"></div>
            
                <div class="col-lg-6 mt-3 mt-lg-0 pr-lg-0">
                    <div class="row">
                        <div class="col-sm-6 pl-0 pl-lg-3 pr-0 pr-sm-2">
                            <div class="tile square-tile" id="tile-offer" style="background: url(images/offer.jpg); background-size: cover;"></div>
                        </div>
                        <div class="col-sm-6 pr-0 pr-lg-3 pl-0 pl-sm-2 mt-3 mt-sm-0">
                            <div class="tile square-tile" id="tile-rental" style="background: url(images/rental.jpg); background-size: cover; filter: grayscale(100%);"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 px-0 px-lg-3 mt-3">
                            <div class="tile square-tile" id="tile-team" style="background: url(images/team.jpg); background-size: cover;"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 p-0">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 mt-3 px-0 pr-sm-2 pr-lg-2">
                        <div class="tile square-tile" id="tile-faq" style="background: url(images/faq.jpg); background-size: cover; filter: grayscale(100%);"></div>
                    </div>
                    <div class="col-sm-6 mt-3 px-0 pl-sm-2 px-lg-2">
                        <div class="tile square-tile" id="tile-gallery" style="background: url(images/gallery.jpg); background-size: cover;"></div>
                    </div>
                    <div class="col-lg-3 mt-3 px-0 pr-lg-0 pl-lg-2">
                        <a href="contact.php">
                            <div class="tile square-tile" id="tile-contact" style="background: url(images/contact.jpg); background-size: cover;"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include("included/footer.php"); ?>
    
<!-- SITE HTML CODE END -->

    <!-- JQuery, Popper, Boostrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
  
</body>
</html>