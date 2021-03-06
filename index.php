<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Doodle</title>

    <meta name="description" content="Search the web for sites and images.">
    <meta name="keywords" content="Search engine, doodle, websites">
    <meta name="author" content="Grazziano Fagundes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrapper indexPage">
        <div class="mainSection">
            <div class="logoContainer">
                <img src="assets/images/doodleLogo.png" title="Logo of our site" alt="Site logo">
            </div>

            <div class="searchContainer">
                <form action="search.php" method="GET">
                    <input class="searchBox" type="text" name="term">
                    <input class="searchButton" type="submit" value="Search">
                </form>
            </div>
        </div>
    </div>
</body>

</html>