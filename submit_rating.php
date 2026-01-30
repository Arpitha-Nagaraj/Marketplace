<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0;
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $review = isset($_POST['review']) ? trim($_POST['review']) : '';

    if ($rating >= 1 && $rating <= 5 && $product_id > 0 && strlen($review) <= 5000) {
        try {
            $sql = "INSERT INTO productRating (product_id, rating, review) VALUES (?,?,?)";
            
            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "sss",$product_id, $rating, $review);
    
            
                if (mysqli_stmt_execute($stmt)) {
                    header("location: products.php");
                } else {
                    echo "Error!";
                }
                mysqli_stmt_close($stmt);
            }
            mysqli_close($link);

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Invalid rating, product ID, or review.";
    }
} else {
    echo "No rating submitted.";
}
?>
