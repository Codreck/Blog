<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to my blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=APP_ROOT?>/content/sources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?=APP_ROOT?>/content/sources/css/clean-blog.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css">

    <!-- Custom Fonts -->
    <link href="<?=APP_ROOT?>/content/sources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?=APP_ROOT?>/home">KalinBlog.bg</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li >
                    <a  href="<?=APP_ROOT?>/home">Home</a>
                </li>
                <li id="LogIn">
                    <a  href="<?=APP_ROOT?>/users/login">Login</a>
                </li>
                <li id="register">
                    <a href="<?=APP_ROOT?>/users/register">Register</a>
                </li>
                <li>
                    <a href="<?=APP_ROOT?>/posts/create">Create Posts</a>
                </li>

                <li>
                    <a href="<?=APP_ROOT?>/posts">Posts</a>
                </li>

                <?php if ($this->isLoggedIn) : ?>
                    <script>

                        function hideLogin() {
                            document.getElementById('LogIn').style.display = 'none';
                            document.getElementById('register').style.display = 'none';

                        }
                        hideLogin();

                    </script>
                    <li>

                        <div class="dropdown">
                            <img class="img-responsive img-circle " data-toggle="dropdown"  src="<?=APP_ROOT?>/content/images/avatar/defaultavatar.jpg/" id="avatar"  style="width: 65px;z-index: 2">

                            <ul class="dropdown-menu" id="dropdownMenu">

                                <li><a href="<?=APP_ROOT?>/users/logout">Изход</a></li>
                            </ul>
                        </div>

                    </li>

                <?php endif; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<header class="intro-header" style="background-image: url('<?=APP_ROOT?>/content/sources/img/AUDI RS6.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Kalin Blog</h1>
                    <hr class="small">
                    <span class="subheading">Sponsored by AUDI RS6</span>
                </div>
            </div>
        </div>
    </div>
</header>



<?php require_once('show-notify-messages.php'); ?>

