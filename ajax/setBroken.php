<?php
include("../config.php");

if (isset($_POST["src"])) {
    $query = $con->prepare("UPDATE images SET broken = 1 WHERE image_url  = :src");
    $query->bindParam(":src", $_POST["src"]);
    $query->execute();
} else {
    echo "No link passed to page";
}
