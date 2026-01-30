<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">PETS CARE</a>
            </div>
            <ul class="nav navbar-nav">
                <li class=""><a href="#">About Us</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="products.php">All Products</a></li>
                        <li><a href="recentlyViewedProducts.php">Recently Viewed Products</a></li>
                                        </ul>
                </li>
                <li class=""><a href="news.php">News</a></li>
                <li class=""><a href="#">Our Contacts</a></li>
            </ul>
        </div>
    </nav>
    <section style="margin-top: 60px;" class="main-section alabaster" id="tops">
        <div class="container fullsize">
            <div class="row">
                <div class="col-lg-7 col-sm-12 wow fadeInRight">
                    <h2>Recently Visted products</h2>
                    <?php
                         if(isset($_COOKIE['recentProducts'])) {
                             $cookieValue = $_COOKIE['recentProducts'];
                             $cookieArray = explode(',', $cookieValue);
                             $uniqueValues = array_values(array_flip(array_flip($cookieArray)));

                                for ($i = 0; $i < min(5, count($uniqueValues)); $i++) {
                                    echo $uniqueValues[$i] . "<br>";
                                }
                         }
                         else {
                                echo "You have not viewed any products";
                         }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>