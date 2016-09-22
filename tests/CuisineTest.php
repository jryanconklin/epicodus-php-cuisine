<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Cuisine.php";
    require_once __DIR__."/../src/Restaurant.php";
    require_once __DIR__."/../src/Review.php";

    class CuisineTest extends PHPUnit_Framework_TestCase
    {

        protected function tearDown()
        {
            Cuisine::deleteAll();
        }


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

        function test_save()
        {
            //Arrange
            $id = null;
            $style = "Thai";
            $test_cuisine = new Cuisine($id, $style);
            $test_cuisine->save();

            //Act
            $result = Cuisine::getAll();

            //Assert
            $this->assertEquals($test_cuisine, $result[0]);
        }

        function test_getAll()
        {
            //Arrange
            $id1 = null;
            $id2 = null;
            $style1 = "Thai";
            $style2 = "Northern Thai";
            $test_cuisine1 = new Cuisine($id1, $style1);
            $test_cuisine1->save();
            $test_cuisine2 = new Cuisine($id2, $style2);
            $test_cuisine2->save();

            //Act
            $result = Cuisine::getAll();

            //Assert
            $this->assertEquals([$test_cuisine1, $test_cuisine2], $result);
        }

        function test_deleteAll()
        {
            //Arrange
            $id1 = null;
            $id2 = null;
            $style1 = "Thai";
            $style2 = "Northern Thai";
            $test_cuisine1 = new Cuisine($id1, $style1);
            $test_cuisine1->save();
            $test_cuisine2 = new Cuisine($id2, $style2);
            $test_cuisine2->save();

            //Act
            Cuisine::deleteAll();
            $result = Cuisine::getAll();

            //Assert
            $this->assertEquals([], $result);
        }


    }
?>
