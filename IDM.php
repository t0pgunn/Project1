<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Music Genre Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles-genre.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

       <?php

    $page = 'IDM';

    include('inc/menu.inc');

    ?>

    <!-- Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="images/aphex.jpg" alt="Aphex Twin">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>IDM</h1>
                <p>Intelligent dance music (IDM) is a genre of electronic music that emerged in the early 1990s. Its creation was influenced by developments in underground dance music such as Detroit techno and various breakbeat styles that were emerging in the UK at that time. Stylistically, IDM tended to rely upon individualistic experimentation rather than adhering to musical characteristics associated with specific genres of dance music. The range of post-techno styles to emerge in the early 1990s were described variously as "art techno", "ambient techno", "intelligent techno", and "electronica".</p> <!-- Text from Wikipedia -->
                
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    We have to devide what we want to do with this section.
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Info Row -->
        <div class="row">
            <div class="col-md-6">
                <h1>History of IDM</h1>
                <p>Type all the stuff here! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-6">
                <h1>Characteristics of Genre</h1>
                <p>Type all the stuff here! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->


        <!-- Image Row -->
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive center-block img-rounded" src="images/flyinglotus.jpg" alt="Flying Lotus">
                
            </div>
          
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-3">
                <h2>Aphex Twin</h2>
                <p>Richard David James (born 18 August 1971), known by his stage name Aphex Twin, is an Irish-born British electronic musician and composer. He is known for his influential and idiosyncratic work in electronic music styles such as IDM and acid techno in the 1990s, for which he won widespread critical acclaim. He is also the co-founder of Rephlex Records with Grant Wilson-Claridge.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-3">
                <h2>Boards of Canada</h2>
                <p>Boards of Canada are a Scottish electronic music duo consisting of brothers Michael Sandison (born 1 June 1970) and Marcus Eoin (born Marcus Eoin Sandison, 21 July 1971). They have released several works on Warp Records with little advertising and few interviews, while also having an elusive and obscure back-catalogue of releases on their self-run Music70 label. They have also recorded at least four tracks under the alias of Hell Interface.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-3">
                <h2>Flying Lotus</h2>
                <p> Steven Ellison (born October 7, 1983), known by his stage name Flying Lotus or sometimes FlyLo, is an experimental multi-genre music producer, electronic musician, DJ and rapper from Los Angeles, California. He has released five studio albums‍ — ‌<em>1983</em> (2006), <em>Los Angeles</em> (2008), <em>Cosmogramma</em> (2010), <em>Until the Quiet Comes</em> (2012) and <em>You're Dead!</em> (2014)‍ —‌ to increasing critical acclaim. He has produced much of the bumper music on Cartoon Network's Adult Swim programming block.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <div class="col-md-3">
                <h2>Autechre</h2>
                <p>Autechre is an English electronic music duo consisting of Rob Brown and Sean Booth, both from Rochdale, Greater Manchester, England. Formed in 1987, they are one of the most popular acts signed to the Warp Records label, known for its pioneering electronic music and through which all of Autechre's albums have been released. Their music has exhibited a gradual shift in aesthetic throughout their career, from their earlier work with clear roots in techno, house and electro, to later albums that are often considered experimental in nature, featuring complex patterns of rhythm and subdued melodies.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

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
