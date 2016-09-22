<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../src/Cuisine.php";
    require_once __DIR__."/../inc/ConnectionTest.php";

    class CuisineTest extends PHPUnit_Framework_TestCase
    {

        function test_getId() //Read Cuisine Style
        {
            //Arrange
            $id = 1;
            $style = "Thai";
            $test_cuisine = new Cuisine($id = null, $style);

            //Act
            $result = $test_cuisine->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

       function test_getStyle() //Read Cuisine Style
       {
           //Arrange
           $id = 1;
           $style = "Thai";
           $test_cuisine = new Cuisine($id, $style);

           //Act
           $result = $test_cuisine->getStyle();

           //Assert
           $this->assertEquals($style, $result);
        }

        function test_setStyle() //Update Cuisine Style
        {
            //Arrange
            $id = 1;
            $style = "Thai";
            $test_cuisine = new Cuisine($id, $style);
            $new_style = "Northern Thai";

            //Act
            $test_cuisine->setStyle($new_style);
            $result = $test_cuisine->getStyle();

            //Assert
            $this->assertEquals($new_style, $result);
        }


    }
?>
