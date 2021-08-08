<?php
include("classes/DomDocumentParser.php");

function createLink($src, $url)
{
    $scheme = parse_url($url)["scheme"];
    $host = parse_url($url)["host"];

    if (substr($src, 0, 2) == "//") {
        $src = parse_url($url)["scheme"] . ":" . $src;
    } else if (substr($src, 0, 1) == "/") {
        $src = $scheme . "://" . $host . $src;
    }
    return $src;
}

function followLinks($url)
{
    $parser = new DomDocumentParser($url);

    $linkList = $parser->getLinks();

    foreach ($linkList as $link) {
        $href = $link->getAttribute("href");

        if (strpos($href, "#") !== false) {
            continue;
        } else if (substr($href, 0, 11) == "javascript:") {
            continue;
        }

        $href = createLink($href, $url);

        // echo $href . "<br>";
    }
}

$staticUrl = "http://grazziano.space/";
followLinks($staticUrl);
