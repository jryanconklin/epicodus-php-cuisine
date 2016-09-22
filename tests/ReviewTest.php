<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/Cuisine.php";
    require_once __DIR__."/../src/Restaurant.php";
    require_once __DIR__."/../src/Review.php";

    class ReviewTest extends PHPUnit_Framework_TestCase
    {

        function test_getId() //Read Review Id
        {
            //Arrange
            $id = 1;
            $review = "Tasty Food, So good. Thanks!";
            $score = 4;
            $restaurant_id = null;
            $test_review = new Review($id, $review, $score, $restaurant_id);

            //Act
            $result = $test_review->getId();

            //Assert
            $this->assertEquals($id, $result);
        }

        function test_getReview() //Read Review Review
        {
            //Arrange
            $id = 1;
            $review = "Tasty Food, So good. Thanks!";
            $score = 4;
            $restaurant_id = null;
            $test_review = new Review($id, $review, $score, $restaurant_id);

            //Act
            $result = $test_review->getReview();

            //Assert
            $this->assertEquals($review, $result);
        }

        function test_getScore() //Read Review Score
        {
            //Arrange
            $id = 1;
            $review = "Tasty Food, So good. Thanks!";
            $score = 4;
            $restaurant_id = null;
            $test_review = new Review($id, $review, $score, $restaurant_id);

            //Act
            $result = $test_review->getScore();

            //Assert
            $this->assertEquals($score, $result);
        }

        function test_getRestaurantId() //Read Review Restaurant ID
        {
            //Arrange
            $id = 1;
            $review = "Tasty Food, So good. Thanks!";
            $score = 4;
            $restaurant_id = null;
            $test_review = new Review($id, $review, $score, $restaurant_id);

            //Act
            $result = $test_review->getRestaurantId();

            //Assert
            $this->assertEquals($restaurant_id, $result);
        }

        function test_setReview()
        {
            //Arrange
            $id = 1;
            $review = "Tasty Food, So good. Thanks!";
            $score = 4;
            $restaurant_id = null;
            $test_review = new Review($id, $review, $score, $restaurant_id);

            $new_review = "Even better the second time!";

            //Act
            $test_review->setReview($new_review);
            $result = $test_review->getReview();

            //Assert
            $this->assertEquals($new_review, $result);
        }

        function test_setScore()
        {
            //Arrange
            $id = 1;
            $review = "Tasty Food, So good. Thanks!";
            $score = 4;
            $restaurant_id = null;
            $test_review = new Review($id, $review, $score, $restaurant_id);

            $new_score = 5;

            //Act
            $test_review->setScore($new_score);
            $result = $test_review->getScore();

            //Assert
            $this->assertEquals($new_score, $result);
        }

        function test_setRestaurantId()
        {
            //Arrange
            $id = 1;
            $review = "Tasty Food, So good. Thanks!";
            $score = 4;
            $restaurant_id = null;
            $test_review = new Review($id, $review, $score, $restaurant_id);

            $new_restaurant_id = 2;

            //Act
            $test_review->setRestaurantId($new_restaurant_id);
            $result = $test_review->getRestaurantId();

            //Assert
            $this->assertEquals($new_restaurant_id, $result);

        }


    }
?>
