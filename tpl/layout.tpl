<head>
    <title>Swag</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href='../css/bootstrap-theme.css' rel='stylesheet' type='text/css' />
    <link href='../css/bootstrap.min.css' rel='stylesheet' type='text/css' />
    <link href='../css/comon.css' rel='stylesheet' type='text/css' />
    <!--<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />-->
    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<div class="header">
    <div class="slider">
        <div class="container">
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../img/lemmy.jpeg" alt="Lemmy">
                    </div>
                    <div class="item">
                        <img src="../img/kerringan.jpg" alt="Kerrigan">
                    </div>
                    <div class="item">
                        <img src="../img/nop" alt="Sasha <3">
                    </div>
                    <div class="item">
                        <img src="../img/VI.jpg" alt="Vi">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="menu">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{if $isActive == 1}active{/if}"><a href="../php/layout.php">Construction</a></li>
                        <li class="{if $isActive == 2}active{/if}"><a href="../php/contact.php">Maisons</a></li>
                        <li class="{if $isActive == 3}active{/if}"><a href="../php/contact.php">Services</a></li>
                        <li class="{if $isActive == 4}active{/if}"><a href="../php/contact.php">Tarifs</a></li>
                        <li class="{if $isActive == 5}active{/if}"><a href="../php/contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>