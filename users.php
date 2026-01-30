<?php
require "config.php";
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
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
                <a class="navbar-brand" href="users.php">PETS CARE</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="fetchAllCompanyUsers.php">FETCH ALL COMPANY USERS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>

    <br /><br />
    <section style="margin-top: 60px;" class="main-section alabaster" id="tops">
        <h1 style="text-align: center"><b>PET CARE USERS</b></h1><br />
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>    
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM users WHERE name != 'admin'";
                            $result = $link->query($sql);
                            $myInteger = 0;
                            while ($item = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $myInteger + 1; ?></td>
                            <td><?php echo $item['firstname']; ?></td>
                            <td><?php echo $item['lastname']; ?></td>
                        </tr>
                        <?php
                                $myInteger++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>