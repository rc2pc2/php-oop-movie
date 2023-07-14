<?php

    class Movie{
        public $title;
        public $director;
        public $synopsis;
        public $year;
        public $genres;

        function __construct( String $_title,  String $_director, String $_synopsis, Int $_year, Array $_genres = [] ){
            $this->title = $_title;
            $this->director = $_director;
            $this->synopsis = $_synopsis;
            $this->year = $_year;
            $this->genres = $_genres;
        }

        public function getTitle(){
            return $this->title;
        }
    }