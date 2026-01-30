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
                <a class="navbar-brand" href="#">PETS CARE</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>
    <section style="margin-top: 60px;" class="main-section alabaster" id="tops">
        <h1 style="text-align: center"><b>ALL COMPANY USERS</b></h1><br />
        <div class="container">
            <div class="table-responsive">
            <h4 style="text-align: center"><b><U>SHREKS SPORTS WORLD COMPANY USERS</U></b></h4><br />
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
                            $curl_handle = curl_init();
                                
                            curl_setopt($curl_handle, CURLOPT_URL, "https://shreksonline.000webhostapp.com/assignment-4/sharemycontacts.php");
                            curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
                            $contents = curl_exec($curl_handle);
                            $data = json_decode($contents, true);
                            
                            $myInteger = 0;
                            
                            foreach ($data as $key => $item) {
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
        <div class="container">
            <div class="table-responsive">
            <h4 style="text-align: center"><b><U>PET CARE COMPANY USERS</U></b></h4><br />
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
                            $curl_handle = curl_init();
                                
                            curl_setopt($curl_handle, CURLOPT_URL, "https://arpithan.000webhostapp.com/expose_users.php");
                            curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
                            $contents = curl_exec($curl_handle);
                            $data = json_decode($contents, true);
                            
                            $myInteger = 0;
                            
                            foreach ($data as $key => $item) {
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


    </body>
</html>
