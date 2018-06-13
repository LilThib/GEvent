<?php
require_once 'dbUtil.php';

session_start();

function ExtractMarkerFromBDD() {

// Start XML file, create parent node
    $dom = new DOMDocument("1.0");
    $dom->formatOutput = true;
    $node = $dom->createElement("markers");
    $parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server
    $db = myPdo();

// Select all the rows in the markers table
    $sql = "SELECT * FROM `t_events` WHERE `validate` = 2";
    $reponse = $db->query($sql);

// Iterate through the rows, adding XML nodes for each
    while ($row = $reponse->fetch()) {
        // Add to XML document node
        $node = $dom->createElement("marker");
        $newnode = $parnode->appendChild($node);
        $newnode->setAttribute("name", $row['name']);
        $newnode->setAttribute("description", $row['description']);
        $newnode->setAttribute("lat", $row['lat']);
        $newnode->setAttribute("lng", $row['lng']);
        $newnode->setAttribute("date", $row['date']);
        $newnode->setAttribute("content", "");
    }
    $dom->save('markers.xml');
}

function geocode($adress) {
    $json_adress = str_replace(" ", "+", $adress);
    $response = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address={$json_adress}&key=AIzaSyDSom_03mhi45ixDwuHHibM9ZsoCyHrMs0");
    return $response;
}
