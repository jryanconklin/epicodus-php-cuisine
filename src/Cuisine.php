<?php

    class Cuisine
    {
//Properties
        private $id;
        private $style;

//Constructor
        function __construct($id = null, $style)
        {
            $this->id = $id;
            $this->style = $style;
        }

//Getter and Setter Methods
        function getId()
        {
            return $this->id;
        }

        function getStyle()
        {
            return $this->style;
        }

        function setStyle($new_style)
        {
            $this->style = (string) $new_style;
        }

//Regular Methods
        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO cuisines (style) VALUES ('{$this->getStyle()}')");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }


//Static Methods
        static function getAll()
        {
            $returned_cuisines = $GLOBALS['DB']->query("SELECT * FROM cuisines;");
            $cuisines = array();
            foreach($returned_cuisines as $cuisine) {
                $id = $cuisine['id'];
                $style = $cuisine['style'];
                $new_cuisine = new Cuisine($id, $style);
                array_push($cuisines, $new_cuisine);
            }
            return $cuisines;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM cuisines;");
        }

    }
?>
