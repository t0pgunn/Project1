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
    <link href="https://fonts.googleapis.com/css?family=Dosis|Rock+Salt" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">

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
                <h2>What is Music?</h2>
                <p>Music is an art form and cultural activity whose medium is sound and silence. The common elements of music are pitch (which governs melody and harmony), rhythm (and its associated concepts tempo, meter, and articulation), dynamics (loudness and softness), and the sonic qualities of timbre and texture (which are sometimes termed the "color" of a musical sound). Different styles or types of music may emphasize, de-emphasize or omit some of these elements. Music is performed with a vast range of instruments and with vocal techniques ranging from singing to rapping, and there are solely instrumental pieces, solely vocal pieces (such as songs without instrumental accompaniment) and pieces that combine singing and instruments. The creation, performance, significance, and even the definition of music vary according to culture and social context. Indeed, throughout history, some new forms or styles of music have been criticized as "not being music", including Beethoven's Grosse Fuge string quartet in 1825, early jazz in the beginning of the 1900s and hardcore punk in the 1980s. There are many types of music, including popular music, traditional music, art music, music written for religious ceremonies and work songs such as chanteys. Music ranges from strictly organized compositions–such as Classical music symphonies from the 1700s and 1800s, through to spontaneously played improvisational music such as jazz, and avant-garde styles of chance-based contemporary music from the 20th and 21st centuries. </p>


                <p>Music can be divided into genres (e.g., country music) and genres can be further divided into subgenres (e.g., country blues and pop country are two of the many country subgenres), although the dividing lines and relationships between music genres are often subtle, sometimes open to personal interpretation, and occasionally controversial. For example, it can be hard to draw the line between some early 1980s hard rock and heavy metal. Within the arts, music may be classified as a performing art, a fine art or as an auditory art. Music may be played or sung and heard live at a rock concert or orchestra performance, heard live as part of a dramatic work (a music theater show or opera), or it may be recorded and listened to on a radio, MP3 player, CD player, Smartphone or as film score or TV show. In many cultures, music is an important part of people's way of life, as it plays a key role in religious rituals, rite of passage ceremonies (e.g., graduation and marriage), social activities (e.g., dancing) and cultural activities ranging from amateur karaoke singing to playing in an amateur funk band or singing in a community choir. People may make music as a hobby, for example, a teen who plays cello in a youth orchestra, or by working as a professional musician or singer. The music industry includes the individuals who create new songs and musical pieces, such as songwriters and composers; individuals who perform music, which include orchestra, jazz band and rock band musicians, singers and conductors; individuals who record music (music producers and sound engineers) and organize concert tours; and those who sell recordings and sheet music to customers.</p>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <div class="row row-centered">
            <div class="col-sm-4" id="leftg">

               <img class="img-circle img-responsive img-center" src="images/placeholder.png" data-src="images/edm.png" alt="EDM">
                <h2>EDM</h2>
                <p>Electronic dance music (also known as EDM, dance music, club music, or simply dance) is a broad range of percussive electronic music genres produced largely for nightclubs, raves, and festivals, and produced for playback by disc jockeys (DJs).</p>
                
                <a class="btn btn-default" href=EDM.php>Check it out!</a>
            </div>
            <div class="col-sm-4" id="middleg">
                <img class="img-circle img-responsive img-center" src="images/placeholder.png" data-src="images/aphexlogo.png" alt="Aphex Twin Logo">
                <h2>IDM</h2>
                <p>Intelligent dance music (IDM) is a genre of electronic music that emerged in the early 1990s. Stylistically, IDM tended to rely upon individualistic experimentation rather than adhering to musical characteristics associated with specific genres of dance music. </p>
                
                <a class="btn btn-default" href="IDM.php">Check it out!</a>
                
            </div>
            <div class="col-sm-4" id="rightg">
                <img class="img-circle img-responsive img-center" src="images/placeholder.png" data-src="images/hiphop.jpg" alt="Hip Hop">
                <h2>Hip Hop</h2>

                <p>Hip hop music, also called hip-hop or rap music, is a music genre formed in the United States in the 1970s that consists of a stylized rhythmic music that commonly accompanies rapping, a rhythmic and rhyming speech that is chanted. </p>
                
                <a class="btn btn-default" href="HipHop.php"> Check it out!</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

    <?php

    $page = 'home';

    include('inc/footer.inc');

    ?>

    </div><!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.unveil.js"></script>

    <script>
   
       $(document).ready(function() {
          
          $("img").unveil(0, function() {
              $(this).load(function() {
                this.style.opacity = 1;
              });
            });
        });
    
    </script>


</body>

</html>
