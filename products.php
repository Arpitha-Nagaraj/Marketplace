<!DOCTYPE html>
<html>

<head>
    <title>PETS CARE| ONLINE PET CONSULATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="recent-news-boxes.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .products .products-title {
            text-align: center;
            padding-bottom: 30px;
            font-family: 'nimbus-sans-condensed', sans-serif;
            font-size: 55px;
            font-weight: bold;

        }

        .products .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .products .ct-blog {
            margin-bottom: 30px;
        }

        .ct-blog .inner {
            background-color: #FFF;
            padding: 10px;
            transition: all 0.2s ease-in-out 0s;
            cursor: pointer;
            height: 100%;
        }

        .ct-blog .inner:hover {
            background-color: #e6e6e6;
        }

        .ct-blog .fauxcrop {
            height: 180px;
            overflow: hidden;
        }

        .ct-blog .fauxcrop img {
            width: 100%;
        }

        .ct-blog-content {
            display: table;
            padding: 30px 0 28px;
        }

        .ct-blog-content .ct-blog-date {
            border-right: 1px solid #95A5A6;
            display: table-cell;
            font-family: "Lato", sans-serif;
            padding: 0px 18px 0px 15px;
            text-align: center;
        }

        .ct-blog-content .ct-blog-date span {
            font-size: 16px;
            color: rgb(20, 117, 175);
            font-weight: 700;
            display: block;
            line-height: 1;
        }

        .ct-blog-content .ct-blog-date strong {
            font-size: 25px;
            color: rgb(20, 117, 175);
        }

        .ct-blog-content .ct-blog-header {
            color: #000;
            display: table-cell;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -0.2px;
            line-height: 1.1;
            padding: 0 20px;
            vertical-align: top;
        }

        .btn-news {
            color: #333;
            font-size: 14px;
            font-weight: bold;
            padding-bottom: 30px;
            text-align: center;
        }

        .btn-news.btn-contests a {
            color: #fff;
            font-family: 'nimbus-sans-condensed', sans-serif;
            font-size: 24px;
            transition: all 0.2s ease-in-out 0s;
        }

        .btn-news.btn-contests a:hover {
            color: #000;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">PETS CARE</a>
            </div>
            <ul class="nav navbar-nav">
                <li class=""><a href="aboutus.php">About Us</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="products.php">All Products</a></li>
                        <li><a href="recentlyViewedProducts.php">Recently Viewed Products</a></li>
                                        </ul>
                </li>
                <li class=""><a href="news.php">News</a></li>
                <li class=""><a href="contacts.php">Our Contacts</a></li>
            </ul>
        </div>
    </nav>
    <section class="products" style="margin-top:60px;">
        <div class="container" >
            <h2 class="products-title">Products</h2>
            <div class="row">
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="product_dogFood.php"><img alt="October Sale" src="./Product2_Food.jpg"></a>
                        </div>
                        <div class="ct-blog-content">
                            <h3 class="ct-blog-header">
                                Dog Food
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="product_shampoo.php"><img alt="Employement Opportunities" src="./Product6_Dogshampoo.jpg"></a>
                        </div>
                        <div class="ct-blog-content">
                            <h3 class="ct-blog-header">
                                Shampoo
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="product_comb.php"><img alt="Summer sales" src="./Comb.jpg"></a>
                        </div>
                        <div class="ct-blog-content">
                            <h3 class="ct-blog-header">
                                  Comb
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="product_Toothbrush.php"><img alt="News Entry" src="./Product10_brush.jpg"></a>
                        </div>
                        <div class="ct-blog-content">
                            <h3 class="ct-blog-header">
                                 Toothbrush
                           </h3>
                        </div>
                    </div>
                </div>
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="product_dogLeash.php"><img alt="October Sale" src="./Product3_Leash.jpg"></a>
                        </div>
                        <div class="ct-blog-content">
                            <h3 class="ct-blog-header">
                                Dog Leash
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="product_VaccinationKit.php"><img alt="Employement Opportunities" src="./Product9_dogvaccine.jpg"></a>
                        </div>
                        <div class="ct-blog-content">
                            <h3 class="ct-blog-header">
                                Vaccination Kit
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="product_foodBowl.php"><img alt="Summer sales" src="./Product4_Bowl.jpg"></a>
                        </div>
                        <div class="ct-blog-content">
                            <h3 class="ct-blog-header">
                                  Food Bowl
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="product_Toys.php"><img alt="News Entry" src="./Product8_Dogtoys.jpg"></a>
                        </div>
                        <div class="ct-blog-content">
                            <h3 class="ct-blog-header">
                                 Toys
                           </h3>
                        </div>
                    </div>
                </div>
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="product_NameTag.php"><img alt="October Sale" src="./Product5_Tag.jpg"></a>
                        </div>
                        <div class="ct-blog-content">
                            <h3 class="ct-blog-header">
                               Name Tag
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="product_supplements.php"><img alt="Employement Opportunities" src="./Product7_Dogsupplements.jpg"></a>
                        </div>
                        <div class="ct-blog-content">
                            <h3 class="ct-blog-header">
                                Supplements
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>