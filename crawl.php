<?php
include("classes/DomDocumentParser.php");

function followLinks($url)
{
    $parser = new DomDocumentParser($url);
}

$staticUrl = "http://grazziano.space/";
followLinks($staticUrl);
