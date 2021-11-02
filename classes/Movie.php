<?php

class Movie{
    private $title;
    private $year;
    private $regist;
    private $length;
    private $language;

    public function __construct( $_title, $_year, $_regist, $_length, $_language )
    {
        $this-> title = $_title;
        $this-> year = $_year;
        $this-> regist = $_regist;
        $this-> length = $_length;
        $this-> language = $_language;
    }

    public function setMovie($_title){
        if ($_title != "Tre metri sopra il cielo"){
            $this-> title = $_title;
        }
    }
    public function getMovie(){
        return $this -> title;
    }
} 