<?php ?>

<!DOCTYPE html>
<html>

<head>
    <title>PETS CARE| ONLINE PET CONSULATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                        <li><a href="products.php">All Products</a></li>

                                        </ul>
                </li>
                <li class=""><a href="news.php">News</a></li>
                <li class="active"><a href="contacts.php">Our Contacts</a></li>
            </ul>
        </div>
    </nav>
    <div class="row" style="margin-top:60px">
        <div class="container" style="padding: 20px; background-color:whitesmoke; border: 3px solid  #bbb ">
            <div class="row-style-login-page-pannel">
                <div class="col-sm-9 col-xs-12">
                    <h2 class="headertekst"><b>CONTACTS</b></h2>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="container" style="margin-top: 20px; margin-bottom: 50px;">
            <h2 class="section-title">
                You can contact below people for our services
            </h2>
            <?php
            $myfile = file("./companycontacts.txt");
            foreach ($myfile as $line) {
              $fields = explode(', ', $line);
              $contacts[] = [
                  'Name' => $fields[0],
                  'Email' => $fields[1],
                  'Phone' => $fields[2],
              ];
            }
            ?>
            <ol type="1">
                <?php foreach ($contacts as $contact) { ?>
                    <li><?php echo $contact['Name']; ?> : <?php echo $contact['Email']; ?> : <?php echo $contact['Phone']; ?></li>
                <?php }  ?>
            </ol>
        </div>
    </div>
</body>

</html>