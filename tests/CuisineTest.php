<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../src/Cuisine.php";
    require_once __DIR__."/../inc/ConnectionTest.php";

    class CuisineTest extends PHPUnit_Framework_TestCase
    {

       function test_getStyle()
       {
           //Arrange
           $name = "Thai";
           $test_cuisine = new Cuisine($id = null, $name);

           //Act
           $result = $test_cuisine->getStyle();

           //Assert
           $this->assertEquals($name, $result);
        }


    }
?>
