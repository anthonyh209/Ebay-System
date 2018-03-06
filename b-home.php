<?php
 session_start();








 ?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="b-home.php">
                <img width="100" src="efast.png">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="col-md-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    Search by Catagory
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">BOOKS</a>
                                    <a class="dropdown-item" href="#">MOVIES</a>
                                    <a class="dropdown-item" href="#">ELECTRONICS</a>
                                    <a class="dropdown-item" href="#">HOME</a>
                                    <a class="dropdown-item" href="#">CHILDREN</a>
                                    <a class="dropdown-item" href="#">SPORTS</a>
                                    <a class="dropdown-item" href="#">FOOD</a>
                                    <a class="dropdown-item" href="#">BEAUTY</a>
                                    <a class="dropdown-item" href="#">VEHICLE</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>



                </div>
            </div>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li><a href="b-myprofile.html"><img height="30px" src="img/user1.png"> <?php echo "Hi "; echo  $_SESSION['first_name'] ;     ?> </a></li>
        </ul>
    </div>

    <button style="margin-left: 10px" type="button" onclick="window.location='logout.php';" class="btn btn-outline-danger btn-sm ">Logout</button>


</nav>












<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/healthandbeauty.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>HEALTH AND BEAUTY</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/homeandgarden.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>HOME AND GARDEN</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/outdoor.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>SPORTS AND OUTDOOR</h5>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<br>
<br>
<br>




<div class="container-fluid">
    <div class="jumbotron">
        <h1>View upcoming auctions and bid away!</h1>
        <p><strong>eFast</strong> is an online auction system which allows users to buy and sell items. </p>
        <button type="button" onclick="window.location='./b-watch-page.html';" class="btn btn-primary">Go to your watchlist</button>
    </div>

</div>


<div class="container-fluid">
    <h1 class="text-center">HUNDEREDS OF DIFFERENT ITEMS</h1>
    <div align="center" class="tg-wrap">
        <table class="tg">

            <tr>
                <th align="center" class="tg-32ig">
                    <img src="img/homeandgarden.jpg" class="img-responsive" alt="logo" align="center" width="400" height="auto"></a>
                </th>
                <th align="center" class="tg-fefd">
                    <img src="img/fashion.jpg" class="img-responsive" alt="logo" align="center" width="400" height="auto"></a>
                </th>
                <th align="center" class="tg-fefd">
                    <img src="img/outdoor.jpg" class="img-responsive" alt="logo" align="center" width="400" height="auto"></a>
                </th>
            </tr>

            <tr>
                <td align="center" class="tg-fefd">
                    <img src="img/office.jpg" class="img-responsive" alt="logo" align="center" width="400" height="auto"></a>
                </td>
                <td align="center" class="tg-fefd">
                    <img src="img/healthandbeauty.jpg" class="img-responsive" alt="logo" align="center" width="400" height="auto"></a>
                </td>
                <td align="center" class="tg-fefd">
                    <img src="img/techimage.jpg" class="img-responsive" alt="logo" align="center" width="400" height="auto"></a>
                </td>

            </tr>


        </table>
    </div>
</div>



<style>
    .img-responsive {
        border-style:1px solid green;
        opacity: 0.3;
        -webkit-transition: opacity .1s ease-in-out;
        -moz-transition: opactiy .1s ease-in-out;
        -ms-transition: opacity .1s ease-in-out;
        -o-transition: opacity .1s ease-in-out;
        transition: opacity .1s ease-in-out;
    }

    .img-responsive:hover{
        opacity: 1;
        -webkit-transition: opacity .1s ease-in-out;
        -moz-transition: opactiy .1s ease-in-out;
        -ms-transition: opacity .1s ease-in-out;
        -o-transition: opacity .1s ease-in-out;
        transition: opacity .1s ease-in-out;
    }

    .jumbotron{
        background-color: transparent;
    }

</style>





<div class="container-fluid" >
    <div class="jumbotron">
        <h1 align="center">Items we reccomend for you, based on your bid history.</h1>
    </div>



    <table id="mytable" class="table table-bordred table-striped">

        <thead>


        <th>Item Image</th>
        <th>Item Name</th>
        <th>Item Description</th>
        <th>Current Bid</th>
        <th>Auction End Date</th>
        <th>           </th>

        </thead>
        <tbody>

        <tr>
            <td><img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"></td>
            <td>muffins</td>
            <td>tasty blueberry muffins</td>
            <td>£10</td>
            <td> in 2 hours  </td>
            <td><button class="btn btn-success btn-md">Go to bid   </button></td>
        </tr>

        <tr>
            <td><img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"></td>
            <td>muffins</td>
            <td>tasty blueberry muffins</td>
            <td>£7</td>
            <td> in 1 hour  </td>
            <td><button class="btn btn-success btn-md"></button></td>
        </tr>

        <tr>
            <td><img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"></td>
            <td>muffins</td>
            <td>tasty blueberry muffins</td>
            <td>£3</td>
            <td>in 5 hours </td>
            <td><button class="btn btn-success btn-md"></button></td>
        </tr>


        <tr>
            <td><img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"></td>
            <td>muffins</td>
            <td>tasty blueberry muffins</td>
            <td>£4</td>
            <td> in 8 hours </td>
            <td><button class="btn btn-success btn-md"></button></td>
        </tr>

        <tr>
            <td><img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"></td>
            <td>muffins</td>
            <td>tasty blueberry muffins</td>
            <td>£10</td>
            <td> in 32 hours </td>
            <td><button class="btn btn-success btn-md"></button></td>

        </tr>

        </tbody>

    </table>




</div>




<style>
     .btn.btn-success.btn-md {
         height: 40px;
         width: 150px;
        padding: 15px 25px;
        font-size: 20px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #ffffff;
        background-color: #20d3fb;
        border: none;
        border-radius: 15px;
        box-shadow: 0 8px #999;
    }

     .btn.btn-success.btn-md:hover {background-color: rgba(32, 215, 255, 0.37)
     }

     .btn.btn-success.btn-md:active {
        background-color: #20d3fb;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
</style>







<body>


</html>