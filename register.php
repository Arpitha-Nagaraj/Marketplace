<?php
require_once "config.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

$firstname = $lastname = "";
$firstname_err = $lastname_err = "";

$email = "";
$email_err = "";

$homephone = "";
$homephone_err = "";

$cellphone = "";
$cellphone_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        $sql = "SELECT id FROM users WHERE name = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = trim($_POST["username"]);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    //Validation of Input fields
    if (empty(trim($_POST["firstname"]))) {
        $firstname_err = "Please enter First Name.";
    } else {
        $firstname = trim($_POST["firstname"]);
    }

    if (empty(trim($_POST["lastname"]))) {
        $lastname_err = "Please enter Last Name.";
    } else {
        $lastname = trim($_POST["lastname"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 8) {
        $password_err = "Password must have atleast 8 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty(trim($_POST["homephone"]))) {
        $homephone_err = "Please enter homephone.";
    } else {
        $homephone = trim($_POST["homephone"]);
    }

    if (empty(trim($_POST["cellphone"]))) {
        $cellphone_err = "Please enter cellphone.";
    } else {
        $cellphone = trim($_POST["cellphone"]);
    }

    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)
    && empty($lastname_err) && empty($firstname_err) && empty($email_err) && empty($homephone_err) && empty($cellphone_err)) {

        $sql = "INSERT INTO users (name, firstname, lastname, password, email, homephone, cellphone) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username, $param_firstname, $param_lastname, $param_password, $param_email, $param_homephone, $param_cellphone);

            // Set parameters
            $param_username = $username;
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_password = md5($password); //password_hash with MD5 
            $param_email = $email;
            $param_homephone = $homephone;
            $param_cellphone = $cellphone;

            if (mysqli_stmt_execute($stmt)) {
                header("location: index.php");
            } else {
                echo "Error!";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 14px sans-serif;
            background-image: url('./signin.jpg'); /* Replace 'your-image.jpg' with the path to your image */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover; /* This ensures the image covers the entire body */
        }

        .wrapper {
            width: 360px;
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
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Existing User?</a></li>
            </ul>
        </div>
    </nav>
    <div style="margin-top:60px;color:white;float:right" class="wrapper">
        <h2>Sign Up</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>FirstName</label>
                <input type="text" name="firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>">
                <span class="invalid-feedback"><?php echo $firstname_err; ?></span>
            </div>
            <div class="form-group">
                <label>LastName</label>
                <input type="text" name="lastname" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastname; ?>">
                <span class="invalid-feedback"><?php echo $lastname_err; ?></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group">
                <label>homephone</label>
                <input type="text" name="homephone" class="form-control <?php echo (!empty($homephone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $homephone; ?>">
                <span class="invalid-feedback"><?php echo $homephone_err; ?></span>
            </div>
            <div class="form-group">
                <label>cellphone</label>
                <input type="text" name="cellphone" class="form-control <?php echo (!empty($cellphone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $cellphone; ?>">
                <span class="invalid-feedback"><?php echo $cellphone_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-primary" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>

</html>
