<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../src/Cuisine.php";
    require_once __DIR__."/../src/Restaurant.php";
    require_once __DIR__."/../src/Review.php";
    require_once __DIR__."/../inc/ConnectionTest.php";

    class RestaurantTest extends PHPUnit_Framework_TestCase
    {

        function test_getId() //Read Restaurant Id
        {
            //Arrange
            $id = 1;
            $name = "Pok Pok";
            $description = "Tasty Thai Food!";
            $test_restaurant = new Restaurant($id = null, $name, $description);

            //Act
            $result = $test_restaurant->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

       function test_getName() //Read Restaurant Name
       {
           //Arrange
           $id = 1;
           $name = "Pok Pok";
           $description = "Tasty Thai Food!";
           $test_restaurant = new Restaurant($id = null, $name, $description);

           //Act
           $result = $test_restaurant->getName();

           //Assert
           $this->assertEquals($name, $result);
        }

        function test_getDescription() //Read Restaurant Description
        {
            //Arrange
            $id = 1;
            $name = "Pok Pok";
            $description = "Tasty Thai Food!";
            $test_restaurant = new Restaurant($id = null, $name, $description);

            //Act
            $result = $test_restaurant->getDescription();

            //Assert
            $this->assertEquals($description, $result);
         }

         function test_getCuisineId() //Read Restaurant Cuisine Id
         {
             //Arrange
             $id = 1;
             $name = "Pok Pok";
             $description = "Tasty Thai Food!";
             $cuisine_id = null;
             $test_restaurant = new Restaurant($id = null, $name, $description);

             //Act
             $result = $test_restaurant->getCuisineId();

             //Assert
             $this->assertEquals($cuisine_id, $result);
          }


    //     function test_setStyle() //Update Restaurant Style
    //     {
    //         //Arrange
    //         $id = 1;
    //         $description = "Thai";
    //         $test_cuisine = new Restaurant($id, $description);
    //         $new_style = "Northern Thai";
       //
    //         //Act
    //         $test_cuisine->setStyle($new_style);
    //         $result = $test_cuisine->getStyle();
       //
    //         //Assert
    //         $this->assertEquals($new_style, $result);
    //     }


    }
?>
