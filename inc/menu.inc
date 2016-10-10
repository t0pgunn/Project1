
    <!-- Nav -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- nav display toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
               

            </div>
            <!-- nav content -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?php echo ($page == 'home') ? 'class="current"' : '';?>>
                        <a style="color: white;"  href="index.php">HOME</a>
                    </li>
                    <li <?php echo ($page == 'EDM') ? 'class="current"' : '';?>>
                        <a style="color: white;" href="EDM.php">EDM</a>
                    </li>
                    <li <?php echo ($page == 'IDM') ? 'class="current"' : '';?>>
                        <a style="color: white;" href="IDM.php">IDM</a>
                    </li>
                    <li <?php echo ($page == 'HipHop') ? 'class="current"' : '';?>>
                        <a style="color: white;" href="HipHop.php">HIP HOP</a>
                    </li>
                    <li <?php echo ($page == 'colophon') ? 'class="current"' : '';?>>
                        <a style="color: white;" href="colophon.php">COLOPHON</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>