<?php
session_start();

if ((!isset($_SESSION['role'])) || (empty($_SESSION['role']))) {
    header("location: ../home.php");
}
if (($_SESSION['role'] == 'admin')) {
    header("location: ../session_admin/page_admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../product/header_logo.png">
    <title>LES SEMINAIRES DU CLUB</title>
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles_clients.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style>
        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .file-input {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .btn-custom {
            border: 2px solid #1ab186;
            color: white;
            background-color: #1ab186;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-custom:hover {
            background-color: #17a278;
        }

        #logo {
            height: 45px;
            width: 120px;
            left: 7px;
            top: 3px;
            position: absolute;
        }
    </style>
</head>

<body>
    <font face="century gothic">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" style="color: white">Bienvenue, <?php echo $_SESSION['nom']; ?></a></li>
                        <li><a href="../auth/client_logout.php" style="color: white">Déconnexion</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1>
                            <img src="<?php echo isset($_SESSION['profile_image']) ? $_SESSION['profile_image'] : '../images/user.png'; ?>"
                                style="width: 50px; height: 50px; border-radius: 50%;">
                            Les seminaires du club
                            <small>&nbsp;&nbsp;</small>
                        </h1>
                    </div>
                </div>
            </div>
        </header>
    </font>
</body>

</html>