<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


    <title><?= $this->title ?></title>
<!--    <script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>-->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assets_admin/style.css">


</head>

<body>
<div  class="wrapper " style="display: flex;">
    <div class="my_left_side sidebar" data-color="purple" data-background-color="white">

        <div class="logo">
            <a class="simple-text logo-mini">
                ADMIN
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="my_nav_it nav-item">
                    <a style="background: #32383e;padding: 20px;" class="nav-link" href="/admin">
                        DASHBOARD
                    </a>
                </li>
                <li class="my_nav_it nav-item">
                    <a style="background: #32383e;padding: 20px;" class="nav-link" href="/admin/sport">
                        SPORTS
                    </a>
                </li>
                <li class="my_nav_it nav-item">
                    <a style="background: #32383e;padding: 20px;" class="nav-link" href="/admin/country">
                        COUNTRIES
                    </a>
                </li>
                <li class="my_nav_it nav-item">
                    <a style="background: #32383e;padding: 20px;" class="nav-link" href="/admin/post">
                        POSTS
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" style="width: 100%;">
        <!-- Navbar -->
        <nav style="margin: 0" class="p-0 navbar navbar-expand-lg navbar-transparent navbar-absolute ">
            <div style="padding: 10px;background: whitesmoke;" class="container-fluid">
                <h2 class="my_title"><b><?= $this->title ?></b></h2>
                <div style="padding: 0;float: right" class="header_main collapse navbar-collapse justify-content-end">

                    <ul class=" navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/" target="_blank">
                                SITE HOME
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                LOG OUT
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

