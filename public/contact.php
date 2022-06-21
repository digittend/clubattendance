<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UiTM Club Activities Approval System - Contact</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <!--svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg-->
                    <img src="https://korporat.uitm.edu.my/images/download/2019/LogoUiTM.png" class="" height="50px" alt="alzhahir Logo">
                    <p class="h6 ps-3">Club Activities Approval System</p>
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="/login.php" class="nav-link px-2 link-dark">Login</a></li>
                    <li><a href="/contact.php" class="nav-link px-2 link-dark">Contact</a></li>
                    <li><a href="/faq.php" class="nav-link px-2 link-dark">FAQs</a></li>
                    <li><a href="/about.php" class="nav-link px-2 link-dark">About</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <?php
                        if(isset($_SESSION["uid"])){
                            $shortName = strtok($_SESSION["name"], " ");
                            echo "<label class=\"px-2\">Welcome, ".$shortName."!</label>";
                            echo '<button type="button" class="btn btn-primary" onclick="location.href=\'/doSignOut.php\';">Logout</button>';
                        } else {
                            echo '<button type="button" class="btn btn-primary" onclick="location.href=\'/login.php\';">Login</button>';
                        }
                    ?>
                </div>
            </header>
        </div>
        <div class="px-5 text-center">
            <h1>Contact</h1>
        </div>
        <div class="px-5 py-4">
            <h4 style="text-align: justify; text-justify: inter-word;">The administrators can be contacted via email at megat@alzhahir.com</h4>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>