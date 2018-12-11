<?php
session_start();
include('controller/TinTucController.php');
$c_tintuc = new TinTucController();
$tin = $c_tintuc->chiTietTin();
$chitiettin = $tin['chitiettin'];
//print_r($chitiettin);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chi tiết</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Tin Tức</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" id="txtSearch" class="form-control" placeholder="Search">
                    </div>
                    <button type="button" id="btnSearch" class="btn btn-default">Tìm kiếm</button>
                </form>

			    <ul class="nav navbar-nav pull-right">
                    <?php
                    if (isset($_SESSION['user_name'])) {
                    ?>

                    <li>
                    	<a>
                    		<span class ="glyphicon glyphicon-user"></span>
                    		<?=$_SESSION['user_name']?>
                    	</a>
                    </li>

                    <li>
                    <a href="dangxuat.php">Đăng xuất</a>
                    </li>

                    <?php
                    } else {
                    ?>

                        <li>
                            <a href="dangki.php">Đăng ký</a>
                        </li>
                        <li>
                            <a href="dangnhap.php">Đăng nhập</a>
                        </li>

                    <?php
                    }
                    ?>

                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?= $chitiettin->TieuDe ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Admin</a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="public/image/tintuc/<?= $chitiettin->Hinh ?>" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <hr>

                <!-- Post Content -->
                <p class="lead"><?= $chitiettin->TomTat ?></p>
                <p><?= $chitiettin->NoiDung ?></p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>



                <!--------------------------- Posted Comments --------------------------->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" style="height:64px; weight:64px" src="public/image/hunghang.png" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Nhật Huy
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        hay dữ ta
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" style="height:64px; weight:64px" src="public/image/hunghang.png" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Huy Nhật
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        hay dễ shợ
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="public/image/goblin.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>tin 1</b></a>
                            </div>
                            <p>tóm tắt tin 1</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                <img class="img-responsive" src="public/image/goblin.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>tin 2</b></a>
                            </div>
                            <p>tóm tắt tin 2</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                <img class="img-responsive" src="public/image/goblin.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>tin 3</b></a>
                            </div>
                            <p>tóm tắt tin 3</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                <img class="img-responsive" src="public/image/goblin.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>tin 4</b></a>
                            </div>
                            <p>tóm tắt tin 4</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                <img class="img-responsive" src="public/image/goblin.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>tin thứ 1</b></a>
                            </div>
                            <p>tóm tắt tin thứ 1</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                <img class="img-responsive" src="public/image/goblin.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>tin thứ 2</b></a>
                            </div>
                            <p>tóm tắt tin thứ 2</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                <img class="img-responsive" src="public/image/goblin.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>tin thứ 3</b></a>
                            </div>
                            <p>tóm tắt tin thứ 3</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                <img class="img-responsive" src="public/image/goblin.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>tin thứ 4</b></a>
                            </div>
                            <p>tóm tắt tin thứ 4</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
                
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

    <script>
        $(document).ready(function() {
            $("#btnSearch").click(function() {
                var keyword = $('#txtSearch').val();
                $.post("timkiem.php", {tukhoa:keyword}, function(data) {
                    $('#datasearch').html(data);
                })
            })
        })
    </script>

</body>
</html>
