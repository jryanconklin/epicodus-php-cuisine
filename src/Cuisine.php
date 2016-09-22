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

    function setStyle($new_style)
    {
        $this->style = (string) $new_style;
    }

    function getStyle()
    {
        return $this->style;
    }

//Regular Methods







//Static Methods







    }
?>
