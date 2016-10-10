<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Colophon</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles-genre.css" rel="stylesheet">

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

    $page = 'colophon';

    include('inc/menu.inc');

    ?>
    <!-- Content -->
    <div class="container">

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12 colophon">
                <div class="well text-center">
                    <h1>Who did what?</h1>
                    <div class="members">
                        <p>Gunnar Zemering - The Architect</p>
                        <p>Created the project description and master plan. Chose the content and the framework. Installed the framework, set up the pages, chose the general order of content. Oversaw major design choices. Completed the PHP navbar and footer. Handled all GitHub conflicts and branch merging. Created the content outline for the presentation.<p>

                        <p>Daniel Diaz-Etchevehere - The Javascript Coder </p>
                        <p>Added the Bootstrap Carousel and its images to the index page (<a href="http://www.w3schools.com/bootstrap/bootstrap_carousel.asp">source</a>). I made a separate include and css files for the carousel for the sake of modularity. Found the unveil.js (<a href="http://luis-almeida.github.io/unveil/">source</a>) lazy loading plugin to increase performance and load images with animation. This involved adding a "data-src" attribute to every image to be loaded with this plugin, replacing the src with a placeholder image, and adding a script at the end of each php page to execute unveil.js on a specific class I called "unveilImg". To animate the image loading I added a couple lines of CSS: one to make the initial opacity of each image 0 and second using the field "transition" to have the image fade in.  

                        <p>Ruairi Conway - The CSS Artist</p>
                        <p>Designed a custom CSS to give style and structure to individual elements of the page. Based on the theme of our content, the color scheme and typeface of the site was inspired by SoundCloud.</p>

                        <p>Teron Russell - The Wrangler of Frameworks</p>

                        <p>Jake Socolow - The Content Master and Designer</p>
                        <p>Added text and images to all pages. Filled pages with text relevant to the subject matter. Added images for each individual artist, and for the genres themselves. Adjusted the size of the images to fit specific sizes. (Text from Wikipedia)</p>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
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
