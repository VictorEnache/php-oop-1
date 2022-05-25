<?php

class Movie{
    public $name;
    public $genre;
    public $length;

    function __construct($name, $genre, $length){
        $this->name = $name;
        $this->genre = $genre;
        $this->length = $length;
    }

    function getName(){
        echo  "<p>Il nome del film è <strong>$this->name</strong></p>"; 
    }
};

$avatar = new Movie('Avatar','fantasy',120);
$avengers = new Movie('Avengers','Adventure',140);

var_dump($avatar);
$avatar->getName();

var_dump($avengers);
$avengers->getName();



