<?php
    use PHPUnit\Framework\TestCase;//Menggunakan PHPUnit
    require_once "wordcount.php";//membutuhkan wordcount.php
    class Simpletest extends TestCase {
        public function testcountword (){
            // Menggunakan Class yang akan di test / mendeklarasi class
            $wc = new wordcount();
            
            //Masukkan kata kata 
            $TestSentence = "Aku lapar ingin makan";// total kata = 4
            $Wordcount = $wc ->countword($TestSentence);//Menghitung kata dari variable katatesting
            
            $this -> assertEquals(4, $Wordcount);// jika kata == 4, Berarti Benar
        }
    }
?>