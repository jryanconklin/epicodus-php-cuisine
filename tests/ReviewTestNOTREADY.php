<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../src/Cuisine.php";
    require_once __DIR__."/../src/Restaurant.php";
    require_once __DIR__."/../src/Review.php";
    require_once __DIR__."/../inc/ConnectionTest.php";

    class ReviewTest extends PHPUnit_Framework_TestCase
    {

        function test_getId() //Read Review Style
        {
            //Arrange
            $id = 1;
            $style = "Thai";
            $test_cuisine = new Review($id = null, $style);

            //Act
            $result = $test_cuisine->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

       function test_getStyle() //Read Review Style
       {
           //Arrange
           $id = 1;
           $style = "Thai";
           $test_cuisine = new Review($id, $style);

           //Act
           $result = $test_cuisine->getStyle();

           //Assert
           $this->assertEquals($style, $result);
        }

        function test_setStyle() //Update Review Style
        {
            //Arrange
            $id = 1;
            $style = "Thai";
            $test_cuisine = new Review($id, $style);
            $new_style = "Northern Thai";

            //Act
            $test_cuisine->setStyle($new_style);
            $result = $test_cuisine->getStyle();

            //Assert
            $this->assertEquals($new_style, $result);
        }


    }
?>
