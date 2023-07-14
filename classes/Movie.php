<?php
    /**
     * This class is an example of a Movie.
     * @license Boolean
     * @version 1.0.0
     * @author Riccardo Petricca <rcpc.bool@gmail.com>
     *
     * */
    class Movie{
        public $title;
        public $director;
        public $synopsis;
        public $year;
        public $genres;

        /**
         * Consctructor for a new Movie, genres are optional.
         *
         * @param String $_title the title of the movie.
         * @param String $_director the director of the movie.
         * @param String $_synopsis the synopsis of the movie.
         * @param Int $_year the year in which the movie has been released.
         * @param array $_genres optional: the list of genres of this movie.
         */
        function __construct( String $_title,  String $_director, String $_synopsis, Int $_year, Array $_genres = [] ){
            $this->title = $_title;
            $this->director = $_director;
            $this->synopsis = $_synopsis;
            $this->year = $_year;
            $this->genres = $_genres;
        }

        /**
         * Returns the movie's title.
         *
         */
        public function getTitle(){
            return $this->title;
        }
    }