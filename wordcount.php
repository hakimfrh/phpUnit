<?php
    class wordcount{
        public function countword ($sentence){
            return count(explode(" ", $sentence));
        }
    } 
?>