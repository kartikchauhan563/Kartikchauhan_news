<?php
        $url="http://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=096bc1d2a83848b283f2d8499b75adb1";
        $response = file_get_contents($url);
        $NewsData = json_decode($response);
        
    ?>
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Kartik Chauhan.News</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="css/colors.css" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- LOADER -->
    
    <!-- END LOADER -->

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>



        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                        <a href="https://fontmeme.com/signature-fonts/"><img src="https://fontmeme.com/permalink/210221/b93bab63df3c6b078c3cd3dcba4204fa.png" alt="signature-fonts" border="0"></a>                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu"
                        aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </nav>
            </div><!-- end container -->
        </header><!-- end header -->


        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                       
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!-- fetch only 2 data from API -->

                                <?php
                                $newsdata=$NewsData->articles;
                                $newsdata=array_slice($newsdata, 0, 4);
                                foreach($newsdata as $News)
                                {                         
                                ?>
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="<?php echo $News->url ?>" title="">
                                            <img src="<?php echo $News->urlToImage ?>" alt="" class="img-fluid">
                                            <div class="">
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog-meta big-meta">
                                        <h4><a href="<?php echo $News->url ?>"title=""><?php echo $News->title; ?></a></h4>
                                        <small><a href="<?php echo $News->url ?>" title="">


                                        <?php $description=$News->description;
                                            $shortdescription= substr($description, 0, 200);
                                            echo $shortdescription ;
                                            ?>..............</a></small>
                                        <small><a href="<?php echo $News->url ?>"
                                                title=""><?php echo $News->publishedAt ?></a></small>
                                        <small><a href="<?php echo $News->url ?>"
                                                title=""><?php echo $News->author ?></a></small>
                                    </div>
                                </div>
                                <?php      
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <!-- fetch only 2 data from API -->
                                <?php
                                $newsdata=$NewsData->articles;
                                $newsdata=array_slice($newsdata, 5, 4);
                                foreach($newsdata as $News)
                                {                         
                                ?>
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="<?php echo $News->url ?>" title="">
                                            <img src="<?php echo $News->urlToImage ?>" style="
    width: 256px;
    height: 192px;
" alt="" class="img-fluid">
                                            <div class="">
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog-meta">
                                        <h4><a href= "<?php echo $News->url ?>" title=""><?php echo $News->title; ?></a></h4>
                                        <small><a href="<?php echo $News->url ?>" title=""><?php $description=$News->description;
                                            $shortdescription= substr($description, 0, 200);
                                            echo $shortdescription ;
                                            ?>..............</a></small>
                                        <small><a href="<?php echo $News->url ?>"
                                                title=""><?php echo $News->publishedAt ?></a></small>
                                    </div>
                                </div>
                                <?php      
                                }
                                ?>
                            </div><!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <!-- fetch only 2 data from API -->
                                <?php
                                $newsdata=$NewsData->articles;
                                $newsdata=array_slice($newsdata, 10, 4);
                                foreach($newsdata as $News)
                                {                         
                                ?>
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="<?php echo $News->url ?>" title="">
                                            <img src="<?php echo $News->urlToImage ?>" alt="" style="
                                                width: 256px;
                                                height: 192px;
                                            " class="img-fluid">
                                            <div class="">
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog-meta">
                                        <h4><a href="<?php echo $News->url ?>" title=""><?php echo $News->title; ?></a></h4>
                                        <small><a href="<?php echo $News->url ?>" title=""><?php $description=$News->description;
                                            $shortdescription= substr($description, 0, 200);
                                            echo $shortdescription ;
                                            ?>..............</a><a href="<?php echo $News->url ?>"
                                                title="">Man</a></small>
                                        <small><a href="<?php echo $News->url ?>"
                                                title=""><?php echo $News->publishedAt ?></a></small>
                                    </div>
                                </div>
                                <?php      
                                }
                                ?>
                            </div><!-- end col -->
                        </div>
                    </div><!-- end col -->
                </div>

                <hr class="invis1">



                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog-list clearfix">
                            
                            <?php
                                $newsdata=$NewsData->articles;
                                $newsdata=array_slice($newsdata, 15, 4);
                                foreach($newsdata as $News)
                                {                         
                                ?>
                            <!-- fetch only 2 data from API -->
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="<?php echo $News->url ?>" title="">
                                            <img src="<?php echo $News->urlToImage ?>" alt="" class="img-fluid">
                                            <div class=""></div>
                                        </a>
                                    </div>
                                </div>

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="<?php echo $News->url ?>" title=""><?php echo $News->title ?></a></h4>
                                    <p>
                                    <?php $description=$News->description;
                                            $shortdescription= substr($description, 0, 200);
                                            echo $shortdescription ;
                                            ?>...............
                                            </p>
                                    <small><a href="<?php echo $News->url ?>" title=""><?php echo $News->author ?></a></small>
                                </div>
                            </div>
                            <?php      
                                }
                                ?>

                        </div>


                    </div><!-- end col -->

                    <div class="col-lg-3">
                        
                        <!-- fetch only 2 data from API -->
                        <?php
                                $newsdata=$NewsData->articles;
                                $newsdata=array_slice($newsdata, 18, 2);
                                foreach($newsdata as $News)
                                {                         
                                ?>
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="<?php echo $News->url ?>" title="">
                                    <img src="<?php echo $News->urlToImage ?>" alt="" class="img-fluid">
                                    <div class="">
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                            <div class="blog-meta">
                                <h4><a href="<?php echo $News->url ?>"
                                        title=""><?php echo $News->title ?></a></h4>
                                <small><a href="<?php echo $News->url ?>"
                                        title=""><?php echo $News->publishedAt ?></a></small>
                            </div>
                        </div>


                        <?php      
                                }
                                ?>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="widget">
                            <div class="footer-text text-center">
                            <a href="https://fontmeme.com/signature-fonts/"><img src="https://fontmeme.com/permalink/210221/b93bab63df3c6b078c3cd3dcba4204fa.png" alt="signature-fonts" border="0"></a>                                <!-- <p>Cloapedia is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.</p> -->
                                <br><br>
                                <!-- <div class="newsletter-widget text-center">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">Subscribe <i class="fa fa-envelope-open-o"></i></button>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Kartikchauhan.News. Designed By Kartik Chauhan</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->



    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>