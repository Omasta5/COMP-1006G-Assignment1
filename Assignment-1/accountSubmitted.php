<!doctype html>
<html lang="en">
    <head>
        <!-- Metadata -->
        <meta charset="utf-8" />
        <title>The Trendsetting Tiki-Taks Sign up Page | Submission Accepted!</title>
		<link rel="stylesheet" href="css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <meta name="description" content="A sign up website for a Tiki-themed baseball team, where users can add content to the database">
        <link rel="shortcut icon" href="./img/TikiLogo.webp" type="image/x-icon">
        <!-- Css -->
        <link rel="stylesheet" href="./css/style.css">
        <!-- Custom font links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Atma:wght@300;400;500;600;700&family=Barriecito&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
        <header>
            <div>
                <img src="./img/TikiLogo.webp" alt="Tiki Team Logo">
            </div>
            <!-- Navigation -->
            <nav>
                <menu>
                    <li><a href="#form">locations</a></li>
                    <li><a href="#form">Register</a></li>
                    <li><a href="#form">Seasons</a></li>
                </menu>
            </nav>
        </header>
        <main>
            <!-- Php -->
            <?php
                include_once ('crud.php');
                include_once ('validate.php');

                $crud = new crud();
                $validate = new validate();

                $fname = $crud->escape_string($_POST['fname']);
                $lname = $crud->escape_string($_POST['lname']);
                $email = $crud->escape_string($_POST['email']);
                $age = $crud->escape_string($_POST['age']);
                $phone = $crud->escape_string($_POST['phone']);

                $msg = $validate->checkEmpty($_POST, array('fname', 'lname', 'email', 'age', 'phone'));
                $checkFName = $validate->validFName($_POST['fname']);
                $checkLName = $validate->validLName($_POST['lname']);
                $checkEmail = $validate->validEmail($_POST['email']);
                $checkAge = $validate->validAge($_POST['age']);
                $checkPhone = $validate->validPhone($_POST['phone']);

                if($msg != null){ //If nothing is actually put in
                    echo "<p>$msg</p>";
                    echo "<a href='javascript:self.history.back();'>Head Back </a>";
                }
                elseif (!$checkFName) { //If the first name's invalid
                    echo "<p>Sorry, but that's not a valid first name. Please only enter letters</p>";  
                    echo "<a href='javascript:self.history.back();'>Head Back </a>";
                }
                elseif (!$checkLName) { //If the last name's invalid
                    echo "<p>Sorry, but that's not a valid last name. Please only enter letters</p>";  
                    echo "<a href='javascript:self.history.back();'>Head Back </a>";
                }
                elseif (!$checkEmail) { //If the email's invalid
                    echo "<p>Sorry, but that's not a valid email. Please enter an actually valid email this time, k?</p>";  
                    echo "<a href='javascript:self.history.back();'>Head Back </a>";
                }
                elseif (!$checkAge) { //If the age's invalid
                    echo "<p>Sorry, but that's not a valid age. Please only enter numbers into this.</p>";  
                    echo "<a href='javascript:self.history.back();'>Head Back </a>";
                }
                elseif (!$checkPhone) { //If the phone number's invalid
                    echo "<p>Sorry, but that's not a valid phone number. Please enter a proper phone number here, no silly business.</p>";  
                    echo "<a href='javascript:self.history.back();'>Head Back </a>";
                }
                else{ //If every value is put throw smoothly
                    $result = $crud->execute("INSERT INTO applications(fname, lname, email, age, phone) VALUES('$fname', '$lname', '$email', '$age', '$phone')");
                    echo "<p>Congratulations! Your responce has been submitted!</p>";
                }
            ?>
        </main>
    </body>