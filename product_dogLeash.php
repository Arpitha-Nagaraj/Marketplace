<?php require "config.php"?>
<?php
$sql = "SELECT * FROM products where name = 'Dog Leash'";
$result = $link->query($sql); 
if ($result->num_rows > 0) {
    // Fetch the product data
    $product = $result->fetch_assoc();
    $productId = $product['id'];
    $views = $product['views'];

    // Increment the views
    $newViews = $views + 1;
    
    $updateSql = "UPDATE products SET views = $newViews WHERE id = $productId";
    if ($link->query($updateSql) === TRUE) {
        echo "Views updated successfully.";
    } else {
        echo "Error updating views: " . $link->error;
    }
}
?><?php
if (isset($_COOKIE["recentProducts"])) {
    if (explode(",", $_COOKIE["recentProducts"])[0] != null) {
        setcookie("recentProducts", "Dog Leash" . "," . $_COOKIE["recentProducts"], time() + (86400 * 30));
    }
} else {
    setcookie("recentProducts", "Dog Leash", time() + (86400 * 30));
}
?>

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
                        <li><a href="recentlyViewedProducts.php">Recently Viewed Products</a></li>                    </ul>
                </li>
                <li class=""><a href="news.php">News</a></li>
                <li class=""><a href="#">Our Contacts</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="container" style="margin-top: 80px; margin-bottom: 50px;">
            <div class="row-style-login-page-pannel">
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4>Dog Leash</h4>
                           <img src= './Product3_Leash.jpg'>
                        </div>
                        <div class="panel-body">
                            <p>A dog leash is a tool that connects you to your dog during walks. It provides control and keeps your
                                 pup safe while giving them some freedom to sniff and explore. 
                            </p>
                            <form action="submit_rating.php" method="post">
                                <input type="hidden" name="product_id" value="6">

                                <label for="rating1">Rate this product:</label>
                                <select name="rating" id="rating1">
                                        <option value="1">1 - Poor</option>
                                        <option value="2">2 - Fair</option>
                                        <option value="3">3 - Good</option>
                                        <option value="4">4 - Very Good</option>
                                        <option value="5">5 - Excellent</option>
                                </select>
                                <br><br>

                                 <label for="review1">Write your review:</label>
                                <textarea name="review" id="review1" maxlength="5000" rows="10" cols="50" placeholder="Write your review here (up to 5000 characters)"></textarea>
                                <br><br>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Rating</th>
                                    <th>Review</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM productRating WHERE product_id = 6";
                                    $result = $link->query($sql);
                                    $myInteger = 0;
                                    while ($item = $result->fetch_assoc()) {
                                ?>
                            <tr>
                                <td><?php echo $myInteger + 1; ?></td>
                                <td><?php echo $item['rating']; ?></td>
                                <td><?php echo $item['review']; ?></td>
                            </tr>
                            <?php
                                $myInteger++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
</body>

</html>