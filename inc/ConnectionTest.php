<?php
//Home Connection #1
    // try {
    // $DB = new PDO("mysql:host=localhost;dbname=restaurant_guide_test;port=8889","root","root");
    // $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch (Exception $e) {
    //   echo "Unable to Connect";
    //   //echo $e->getMessage();
    //   exit;
    // } // native exception class

// Home Connection #2
    // $server = 'mysql:host=localhost:8889;dbname=restaurant_guide_test';
    // $username = 'root';
    // $password = 'root';
    // $DB = new PDO($server, $username, $password);

//Epicodus Connection
    $server = 'mysql:host=localhost;dbname=restaurant_guide_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);
