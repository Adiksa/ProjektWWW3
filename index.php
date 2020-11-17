<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Honda Fan Site</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/styles.css">

</head>
<header>

</header>
<body>
<header>
    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
        <div class="container">
            <a class="navbar-brand" href="?pokaz=""">Honda Fan Site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="?pokaz=""">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="?pokaz=2">Przykładowe modele</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="?pokaz=3">Historia</a>
                    </li>
                    <li class="nav-item">
                                            <a class="nav-link text-dark" href="?pokaz=4">Fani</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section>
        <?php
            if($_GET['pokaz'] == ""){
                include("main.php");
            }
            if($_GET['pokaz'] == "2"){
                include("modele.php");
            }
            if($_GET['pokaz'] == "3"){
                include("history.php");
            }
            if($_GET['pokaz'] == "4"){
                            include("fani.php");
                        }
        ?>
    </section>


<footer class="border-top footer text-muted">
    <div class="container">
        &copy; 2020 - Honda Fan Site - made by Hajkowski Adrian
    </div>
</footer>
</body>
</html>