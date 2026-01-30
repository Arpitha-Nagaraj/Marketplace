<?php
require "config.php";
$searchErr = '';
$employee_details = '';
if (isset($_POST['save'])) {
    if (!empty($_POST['search'])) {
        $search = $_POST['search'];
        $stmt = $link->prepare("select * from users where name like '%$search%' or firstname like '%$search%' or lastname like '%$search%' or cellphone like '%$search%' or homephone like '%$search%' or email like '%$search%'");
        //$stmt->execute();  
        $sql = "select * from users where name like '%$search%' or firstname like '%$search%' or lastname like '%$search%' or cellphone like '%$search%' or homephone like '%$search%' or email like '%$search%'";
        $employee_details = $link->query($sql);
        //$employee_details = $stmt->fetch_assoc(PDO::FETCH_ASSOC);
    } else {
        $searchErr = "Please enter the information!";
    }
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
                <a class="navbar-brand" href="index.php">PETS CARE</a>
            </div>
        </div>
    </nav>
    <br /><br />
    <br /><br />
    <br /><br />

<div class="container">
        <br /><br />
        <form class="form-horizontal" action="#" method="post">
            <div class="row">
                <div class="form-group">
                    <label for="email"><b>Search Users :</b></label>
                    <div>
                        <input type="text" class="form-control" name="search" placeholder="firstname/lastname/email/phone here">
                    </div><br />
                    <div>
                        <button type="submit" name="save" class="btn btn-success btn-sm" style="background-color: black;">Submit</button>
                    </div>
                </div>
                <div class="form-group">
                    <span class="error" style="color:red;">* <?php echo $searchErr; ?></span>
                </div>

            </div>
        </form>
        <br /><br />
        <h3>Search Result</h3><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Home Phone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!$employee_details) {
                        echo '<tr><b>Sorry, No data found</b></tr>';
                    } else {
                        foreach ($employee_details as $key => $value) {
                    ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo $value['homephone']; ?></td>
                                <td><?php echo $value['email']; ?></td>
                            </tr>

                    <?php
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>