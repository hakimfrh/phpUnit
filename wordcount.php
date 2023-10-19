<?php
    class wordcount{
        public function countword ($sentence){//membuat fungsi untuk menampung kata
            return count(explode(" ", $sentence));//memecah kata menggunakan exploda agar bisa dihiung
        }
    } 
?>