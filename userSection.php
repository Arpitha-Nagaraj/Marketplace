<?php
require "config.php";
?>

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
        </div>
    </nav>

    <br /><br />
    <section class="main-section alabaster" id="users">
        <div class="container fullsize" >
            <br />
            <br />
            <center>
                <a class="link animated fadeInUp delay-1s servicelink" href="register.php" style="font-size: 24px;">USER CREATION</a>&nbsp;&nbsp;&nbsp;
                <a class="link animated fadeInDown delay-1s servicelink" href="searchuser.php" style="font-size: 24px;">SEARCH USER</a>&nbsp;&nbsp;&nbsp;
            </center>
        </div>
    </section>
</body>

</html>