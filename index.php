<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Music</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles-index.css" rel="stylesheet">
    <link href="css/carousel-styles.css" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand|Rock+Salt" rel="stylesheet">
    <link href="fonts/fonts.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php

    $page = 'home';

    include('inc/menu.inc');
    include('inc/indexcarousel.inc');

    ?>

    <!-- Image Background Page Header -->

    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Music!</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <h2>What it does</h2>
                <p>Introduce the visitor to the music using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores.</p>
                <p>
                    <a class="btn btn-default btn-lg" href="#">Call to Action &raquo;</a>
                </p>
            </div>
            
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-4" id="leftg">
               <img class="img-circle img-responsive img-center" src="images/edm.png" alt="EDM">
                <h2>EDM</h2>
                <p>Electronic dance music (also known as EDM, dance music, club music, or simply dance) is a broad range of percussive electronic music genres produced largely for nightclubs, raves, and festivals, and produced for playback by disc jockeys (DJs). <p>
            </div>
            <div class="col-sm-4" id="middleg">
                <img class="img-circle img-responsive img-center" src="images/aphexlogo.png" alt="Aphex Twin Logo">
                <h2>IDM</h2>
                <p>Intelligent dance music (IDM) is a genre of electronic music that emerged in the early 1990s. Stylistically, IDM tended to rely upon individualistic experimentation rather than adhering to musical characteristics associated with specific genres of dance music. </p>
            </div>
            <div class="col-sm-4" id="rightg">
                <img class="img-circle img-responsive img-center" src="images/hiphop.jpg" alt="Hip Hop">
                <h2>Hip Hop</h2>
                <p>Hip hop music, also called hip-hop or rap music, is a music genre formed in the United States in the 1970s that consists of a stylized rhythmic music that commonly accompanies rapping, a rhythmic and rhyming speech that is chanted. </p>       
            </div>
        </div>
        <!-- /.row -->

        <hr>

    <?php

    $page = 'home';

    include('inc/footer.inc');

    ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
