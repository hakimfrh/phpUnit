<?php
    use PHPUnit\Framework\TestCase;
    require_once "wordcount.php";
    class Simpletest extends TestCase {
        public function testcountword (){
            $wc = new wordcount();

            $TestSentence = "My name is joko";
            $Wordcount = $wc ->countword($TestSentence);
            
            $this -> assertEquals(4, $Wordcount);
        }
    }
?>