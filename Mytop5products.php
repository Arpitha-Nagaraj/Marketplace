<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETS CARE | ONLINE PET CONSULTATION</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
            background-image: url('./users.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }

        .wrapper {
            width: 450px;
            padding: 20px;
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
                <li><a href="aboutus.php">About Us</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="products.php">All Products</a></li>
                        <li><a href="recentlyViewedProducts.php">Recently Viewed Products</a></li>
                    </ul>
                </li>
                <li><a href="news.php">News</a></li>
                <li><a href="contacts.php">Our Contacts</a></li>
            </ul>
        </div>
    </nav>
    <section style="margin-top: 60px;" class="main-section alabaster" id="tops">
        <h1 style="text-align: center"><b>Top 5 Products of Pets Care</b></h1><br />
        
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Price</th>    
                            <th>Views</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            $curl_handle = curl_init();
                                
                            curl_setopt($curl_handle, CURLOPT_URL, "https://arpithan.000webhostapp.com/expose_mytopproducts.php");
                            curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
                            $contents = curl_exec($curl_handle);
                            $data = json_decode($contents, true);
                            
                            $myInteger = 0;
                            
                            foreach ($data as $key => $item) {
                                ?>
                            <tr>
                            <td><?php echo $myInteger + 1; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['price']; ?></td>
                            <td><?php echo $item['views']; ?></td>
                        </tr>
                        <?php
                                $myInteger++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


    </body>
</html>
