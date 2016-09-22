<?php

    class Restaurant
    {
//Properties
        private $id;
        private $name;
        private $description;
        private $cuisine_id;

//Constructor
        function __construct($id = null, $name, $description, $cuisine_id = null)
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







//Static Methods







    }
?>
