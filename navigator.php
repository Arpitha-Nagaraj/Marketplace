<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Include config file for database connection
require_once "config.php";

// Define variables and initialize with empty values
$firstname = "";

// Retrieve the user's first name from the database
$username = $_SESSION["username"];
$sql = "SELECT firstname FROM users WHERE username = ?";
if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
            mysqli_stmt_bind_result($stmt, $firstname);
            if (mysqli_stmt_fetch($stmt)) {
                // First name retrieved successfully
            }
        }
    }
    mysqli_stmt_close($stmt);
}

// Handle the link click and update session
if (isset($_GET['link']) && isset($_GET['name'])) {
    $link = $_GET['link'];
    $name = $_GET['name'];

    if (!isset($_SESSION['recentLinks'])) {
        $_SESSION['recentLinks'] = [];
    }

    array_unshift($_SESSION['recentLinks'], ['url' => $link, 'name' => $name]);

    if (count($_SESSION['recentLinks']) > 2) {
        $_SESSION['recentLinks'] = array_slice($_SESSION['recentLinks'], 0, 2);
    }

    header("Location: " . $link);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New India Shopping and Services</title>
  <style>
    body {
      background-color: black;
      display: grid;
      grid-template-rows: auto 1fr;
      grid-template-columns: auto auto;
      min-height: 100vh;
      margin: 0;
      padding: 20px;
      font-family: Arial, sans-serif;
    }

    .header {
      grid-column: 1 / -1;
      text-align: center;
      color: white;
      font-size: 24px;
      line-height: 1.5;
      margin-bottom: 20px;
    }

    .card-container {
      grid-row: 2;
      grid-column: 1;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-right: 20px; /* Add margin for spacing */
    }

    .card {
      color: aliceblue;
      margin-bottom: 10px;
      padding: 20px;
      border: 1px solid #ddd;
      text-align: center;
      cursor: pointer;
      width: 200px;
    }

    .iframe-container {
      grid-row: 2;
      grid-column: 2;
      margin-left: 20px; /* Add margin for spacing */
    }

    .website-iframe {
      border: none;
      width: 1500px; /* Adjust width to fill the container */
      height: 750px; /* Adjust the height */
    }

    .button-container {
      position: absolute;
      top: 20px;
      right: 20px;
    }

    .button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin: 0 5px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #3e8e41;
    }
  </style>
</head>

<body>

  <div class="button-container">
    <a href="logout.php" class="button">Sign Out</a>
    <a href="mostvisited.php" class="button">Top Products</a>
  </div>

  <div class="header">
    <h1>Welcome to New India Shopping and Services, <?php echo htmlspecialchars($firstname); ?>!</h1>
  </div>

  <div class="card-container">
    <div class="card" onclick="loadWebsite('https://shreksonline.000webhostapp.com/', 'Shreks Online')">
      <img src="https://cdn-icons-png.flaticon.com/128/10215/10215504.png" alt="ShreksOnline">
      <h2>Shreks Online</h2>
    </div>

    <div class="card" onclick="loadWebsite('https://arpithan.000webhostapp.com/', 'Pets Care')">
      <img src="https://cdn-icons-png.flaticon.com/128/489/489399.png" alt="PetsCare">
      <h2>Pets Care</h2>
    </div>

    <div class="card" onclick="loadWebsite('https://vishalgowdabookstore.000webhostapp.com/', 'Vishal\'s Books')">
       <img src="https://cdn-icons-png.freepik.com/256/3145/3145765.png?semt=ais_hybrid" alt="Vishalsbooks" style="width: 100px; height: 100px;">
      <h2>Vishal's Books</h2>
    </div>
  </div>

  <!-- Iframe to display the loaded website -->
  <div class="iframe-container">
    <iframe id="websiteIframe" class="website-iframe" src="" frameborder="0"></iframe>
  </div>

  <h3 style="color:white;">Recently Clicked Links:</h3>
  <div id="recent-links" style="color:white;">
    <?php
    if (isset($_SESSION['recentLinks'])) {
        foreach ($_SESSION['recentLinks'] as $link) {
            echo '<div><a href="' . htmlspecialchars($link['url']) . '" target="_blank" style="color: white;">' . htmlspecialchars($link['name']) . '</a></div>';
        }
    }
    ?>
  </div>

  <script>
    function loadWebsite(url, name) {
      // Update URL with query parameters to store the link in the session
      window.location.href = "?link=" + encodeURIComponent(url) + "&name=" + encodeURIComponent(name);
    }
  </script>

</body>

</html>
