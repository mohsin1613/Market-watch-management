<?php
include 'config.php';
include 'database.php';
?>
<?php
$db=new Database();

?>

<!DOCTYPE html>
<html>
<head>
    <title>market watch system</title>
    <meta name="language" content="English">
    <meta name="description" content="It is a website about education">
    <meta name="keywords" content="blog,cms blog">
    <meta name="author" content="Delowar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/nivo-slider.css?v=<?php echo time(); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
    <style>
    .mySlides {
        display: none;
    }
    </style>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            effect: 'random',
            slices: 10,
            animSpeed: 500,
            pauseTime: 5000,
            startSlide: 0, //Set starting Slide (0 index)
            directionNav: false,
            directionNavHide: false, //Only show on hover
            controlNav: false, //1,2,3...
            controlNavThumbs: false, //Use thumbnails for Control Nav
            pauseOnHover: true, //Stop animation while hovering
            manualAdvance: false, //Force manual transitions
            captionOpacity: 0.8, //Universal caption opacity
            beforeChange: function() {},
            afterChange: function() {},
            slideshowEnd: function() {} //Triggers after all slides have been shown
        });
    });
    </script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="bg-primary headersection templete  clear">
        <a href class="index.php">
            <div class="logo">
                <img src=images/logo.png alt="Logo" />
                <h2 style="color:#008080;">Market Watch System<h2>
            </div>
        </a>
        <div></div>
        <div class="searchbtn clear">
            <form action="search.php" method="get">
                <input type="text" name="search" placeholder="Search keyword..." />
                <input type="submit" name="submit" value="Search" />
            </form>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">Home</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown" style="font-weight:bold;">
                        <a class="dropdown-toggle " data-toggle="dropdown" href="user.php">
                            <span class="label label-pill label-danger count"></span>Information Distribution<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="agri_dis.php?id=<?php echo"agri";?>">Agriculture Department</a>
                            </li>
                            <li><a href="tcb_dis.php?id=<?php echo"tcb";?>">TCB Department</a></li>
                            <li><a href="nbr_dis.php?id=<?php echo "nbr"; ?>">NBR Department</a></li>
                            <li><a href="cci_dis.php?id=<?php echo "cci"; ?>">CCI Department</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" style="font-weight:bold;">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="user.php">
                            <span class="label label-pill label-danger count"></span>Information Submission<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="agri_submit.php?id=<?php echo"agri";?>">Agriculture Departmental information</a></li>
                            <li><a href="tcb_submit.php?id=tcb">TCB Departmental Information</a></li>
                            <li><a href="nbr_submit.php?id=nbr">NBR Departmental Information</a></li>
                            <li><a href="cci_submit.php?id=cci">CCI Departmental Information</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" style="font-weight:bold;">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="user.php">
                            <span class="label label-pill label-danger count"></span>View Information<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">View As Agriculture Dept.</a></li>
                            <li><a href="#">View As TCB Dept.</a></li>
                            <li><a href="#">View As NBR Dept.</a></li>
                            <li><a href="#">View As CCI Dept.</a></li>
                        </ul>
                    </li>
                    <li style="font-weight:bold;"><a href="product.php">Action</a></li>
                    <li style="font-weight:bold;"><a href="order.php">Modify Information</a></li>
                    <li style="font-weight:bold;"><a href="#">Make Decision</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown" style="font-weight:bold;">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="label label-pill label-danger count"></span>Account<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>