<?php session_start(); ?>
<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAVORITE LIST</title>
    <link rel="stylesheet" href="css/design.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/swiper-bundle.min.css" >
</head>
<body>
<nav>
    <a class="nav" ; style='padding: 20px;position:absolute; top:0.01px;left:0px;text-decoration: none;'  href="profile1.php"> Edit Profile </a>
    <a class="nav" ; style=' padding: 20px;position:absolute; top:0.01px;left:150px;text-decoration: none;'  href="Fav.html"> Favorite List </a>
</nav>
<br>

<section class="trendy container" id="apps">
    <div class="heading">
        <i class='bx bxs-flame'></i>
        <h2>Favorite Apps</h2>
    </div>

    <div class="trendy-content">
        <!--box1-->
        <div class="itemBox" data-item="gaming">
            <img src="img/trending4.jpg" alt="pubg">
            <div class="box-text">
                <h2>ToDo App</h2>
                <h3>Learn</h3>

                <div class="rate-down-price">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <span>4.7</span>

                    </div>

                    <div class="price">
                        <i class='bx bx-dollar'></i>
                        <span>5</span>

                    </div>
                    <a href="deleteFav.php" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                </div>
            </div>

        </div>

        <!--box2-->
        <div class="itemBox" data-item="social">
            <img src="img/facebook.png" alt="pubg">
            <div class="box-text">
                <h2>ToDo App</h2>
                <h3>Action Game</h3>

                <div class="rate-down-price">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <span>4.7</span>

                    </div>

                    <div class="price">
                        <i class='bx bx-dollar'></i>
                        <span>5</span>

                    </div>
                    <a href="deleteFav.php" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                </div>
            </div>

        </div>

        <!--box1-->
        <div class="itemBox" data-item="tools">
            <img src="img/to-do-list.png" alt="pubg">
            <div class="box-text">
                <h2>ToDo App</h2>
                <h3>Action Game</h3>

                <div class="rate-down-price">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <span>4.7</span>

                    </div>

                    <div class="price">
                        <i class='bx bx-dollar'></i>
                        <span>5</span>

                    </div>
                    <a href="deleteFav.php" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                </div>
            </div>

        </div>

        <!--box1-->
        <div class="itemBox" data-item="gaming">
            <img src="img/trending7.png" alt="pubg">
            <div class="box-text">
                <h2>ToDo App</h2>
                <h3>Action Game</h3>

                <div class="rate-down-price">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <span>4.7</span>

                    </div>

                    <div class="price">
                        <i class='bx bx-dollar'></i>
                        <span>5</span>

                    </div>
                    <a href="deleteFav.php" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                </div>
            </div>

        </div>

        <!--box1-->
        <div class="itemBox" data-item="gaming">
            <img src="img/trending6.jpg" alt="pubg">
            <div class="box-text">
                <h2>ToDo App</h2>
                <h3>Action Game</h3>

                <div class="rate-down-price">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <span>4.7</span>

                    </div>

                    <div class="price">
                        <i class='bx bx-dollar'></i>
                        <span>5</span>

                    </div>
                    <a href="deleteFav.php" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                </div>
            </div>

        </div>
        <!--box1-->
        <div class="itemBox" data-item="kids">
            <img src="img/new1.jpg" alt="game">
            <div class="box-text">
                <h2>Subway</h2>
                <h3>Action Game</h3>

                <div class="rate-down-price">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <span>4.7</span>

                    </div>

                    <div class="price">
                        <i class='bx bx-dollar'></i>
                        <span>5</span>

                    </div>
                    <a href="deleteFav.php" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                </div>
            </div>

        </div>

        <!--box1-->
        <div class="itemBox" data-item="learn">
            <img src="img/new3.jpg" alt="game">
            <div class="box-text">
                <h2>Subway</h2>
                <h3>Action Game</h3>

                <div class="rate-down-price">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <span>4.7</span>

                    </div>

                    <div class="price">
                        <i class='bx bx-dollar'></i>
                        <span>5</span>

                    </div>
                    <a href="" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                </div>
            </div>

        </div>

        <!--box1-->
        <div class="itemBox" data-item="social">
            <img src="img/twitter.png" alt="game">
            <div class="box-text">
                <h2>Subway</h2>
                <h3>Action Game</h3>

                <div class="rate-down-price">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <span>4.7</span>

                    </div>

                    <div class="price">
                        <i class='bx bx-dollar'></i>
                        <span>5</span>

                    </div>
                    <a href="deleteFav.php" class="box-btn"><i class='bx bx-down-arrow-alt'></i></a>
                </div>
            </div>

        </div>




    </div>
</section>

</body>
</html>