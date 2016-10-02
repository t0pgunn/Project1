
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
                </button>
                <a class="navbar-brand" href="#">Learn about Music</a>
            </div>
            <!-- nav content -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?php echo ($page == 'genre1') ? 'class="current"' : '';?>>
                        <a href="#">Genre 1</a>
                    </li>
                    <li <?php echo ($page == 'genre2') ? 'class="current"' : '';?>>
                        <a href="#">Genre 2</a>
                    </li>
                    <li <?php echo ($page == 'genre3') ? 'class="current"' : '';?>>
                        <a href="#">Genre 3</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>