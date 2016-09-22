<?php

    class Restaurant
    {
//Properties
        private $id;
        private $name;
        private $description;
        private $cuisine_id;

//Constructor
        function __construct($id = null, $name, $description, $cuisine_id = 0)
        {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->cuisine_id = $cuisine_id;
        }

//Getter and Setter Methods
        function getId()
        {
            return $this->id;
        }

        function getName()
        {
            return $this->name;
        }

        function getDescription()
        {
            return $this->description;
        }

        function getCuisineId()
        {
            return $this->cuisine_id;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function setDescription($new_description)
        {
            $this->description = (string) $new_description;
        }

        function setCuisineId($new_cuisine_id)
        {
            $this->cuisine_id = (integer) $new_cuisine_id;
        }


//Regular Methods
        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO restaurants (name, description, cuisine_id) VALUES ('{$this->getName()}', '{$this->getDescription()}', {$this->getCuisineId()})");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }


//Static Methods
        static function getAll()
        {
            $returned_restaurants = $GLOBALS['DB']->query("SELECT * FROM restaurants;");
            $restaurants = array();

            foreach($returned_restaurants as $restaurant) {
                $id = $restaurant['id'];
                $name = $restaurant['name'];
                $description = $restaurant['description'];
                $cuisine_id = $restaurant['cuisine_id'];
                $new_restaurant = new Restaurant($id, $name, $description, $cuisine_id);
                array_push($restaurants, $new_restaurant);
            }
            return $restaurants;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM restaurants;");
        }



    }
?>
