<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Cuisine.php";
    require_once __DIR__."/../src/Restaurant.php";
    require_once __DIR__."/../src/Review.php";


    class RestaurantTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Cuisine::deleteAll();
            Restaurant::deleteAll();
        }

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


        function test_setName() //Update Restaurant Name
        {
            //Arrange
            $id = 1;
            $name = "Pok Pok";
            $description = "Tasty Thai Food!";
            $cuisine_id = null;
            $test_restaurant = new Restaurant($id = null, $name, $description);

            $new_name = "Pok Pok Noi";

            //Act
            $test_restaurant->setName($new_name);
            $result = $test_restaurant->getName();

            //Assert
            $this->assertEquals($new_name, $result);
        }

        function test_setDescription() //Update Restaurant Description
        {
            //Arrange
            $id = 1;
            $name = "Pok Pok";
            $description = "Tasty Thai Food!";
            $cuisine_id = null;
            $test_restaurant = new Restaurant($id = null, $name, $description);

            $new_description = "Super Good Thai Food!";

            //Act
            $test_restaurant->setDescription($new_description);
            $result = $test_restaurant->getDescription();

            //Assert
            $this->assertEquals($new_description, $result);
        }

        function test_setCuisineId() //Update Restaurant Cuisine Id
        {
            //Arrange
            $id = 1;
            $name = "Pok Pok";
            $description = "Tasty Thai Food!";
            $cuisine_id = null;
            $test_restaurant = new Restaurant($id = null, $name, $description);

            $new_cuisine_id = 2;

            //Act
            $test_restaurant->setCuisineId($new_cuisine_id);
            $result = $test_restaurant->getCuisineId();

            //Assert
            $this->assertEquals($new_cuisine_id, $result);
        }

        function test_save()
        {
            //Arrange
            $id = null;
            $name = "Pok Pok";
            $description = "Tasty Thai Food!";
            $cuisine_id = 0;
            $test_restaurant = new Restaurant($id, $name, $description, $cuisine_id);
            $test_restaurant->save();

            //Act
            $result = Restaurant::getAll();

            //Assert
            $this->assertEquals($test_restaurant, $result[0]);
        }

        function test_getAll()
        {
            //Arrange
            $id1 = null;
            $id2 = null;
            $name1 = "Pok Pok";
            $name2 = "Aprisa";
            $description1 = "Tasty Thai Food!";
            $description2 = "So good!";
            $cuisine_id1 = 0;
            $cuisine_id2 = 0;
            $test_restaurant1 = new Restaurant($id1, $name1, $description1, $cuisine_id1);
            $test_restaurant1->save();
            $test_restaurant2 = new Restaurant($id2, $name2, $description2, $cuisine_id2);
            $test_restaurant2->save();

            //Act
            $result = Restaurant::getAll();

            //Assert
            $this->assertEquals([$test_restaurant1, $test_restaurant2], $result);
        }

        function test_deleteAll()
        {
            //Arrange
            $id1 = null;
            $id2 = null;
            $name1 = "Pok Pok";
            $name2 = "Aprisa";
            $description1 = "Tasty Thai Food!";
            $description2 = "So good!";
            $cuisine_id1 = 0;
            $cuisine_id2 = 0;
            $test_restaurant1 = new Restaurant($id1, $name1, $description1, $cuisine_id1);
            $test_restaurant1->save();
            $test_restaurant2 = new Restaurant($id2, $name2, $description2, $cuisine_id2);
            $test_restaurant2->save();

            //Act
            Restaurant::deleteAll();
            $result = Restaurant::getAll();

            //Assert
            $this->assertEquals([], $result);
        }


    }
?>
