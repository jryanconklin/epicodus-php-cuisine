<?php

    class Review
    {
//Properties
        private $id;
        private $review;
        private $score;
        private $restaurant_id;

//Constructor
        function __construct($id = null, $review, $score, $restaurant_id = null)
        {
            $this->id = $id;
            $this->review = $review;
            $this->score = $score;
            $this->restaurant_id = $restaurant_id;
        }

//Getter and Setter Methods
        function getId()
        {
            return $this->id;
        }

        function getReview()
        {
            return $this->review;
        }

        function getScore()
        {
            return $this->score;
        }

        function getRestaurantId()
        {
            return $this->restaurant_id;
        }

        function setReview($new_review)
        {
            $this->review = (string) $new_review;
        }

        function setScore($new_score)
        {
            $this->score = (integer) $new_score;
        }

        function setRestaurantId($new_restaurant_id)
        {
            $this->restaurant_id = (integer) $new_restaurant_id;
        }



//Regular Methods







//Static Methods







    }
?>
