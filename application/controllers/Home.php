<?php

    class Home extends CI_Controller{

        public function index(){
            echo "Saya Lagi Belajar Codeigniter !";
        }

        public function about($nama,$kelas){
            echo "Nama Saya: $nama, Kelas:$kelas";
        }

        public function math($bilangan){
            if($bilangan % 2 == 0){
                echo "genap";
            }else{
                echo "ganjil";
            }
        }   

        public function fibonanci($jumlah){

            echo "deret fibonanci : <br>";

            $bil_start = 0;
            $bil_end = 1;

            $hasil = "$bil_start $bil_end";

            for($i=0;$i<$jumlah-2;$i++){
                $output = $bil_start + $bil_end;

                $hasil = $hasil." $output";

                $bil_start = $bil_end;
                $bil_end = $output;
            }

            echo $hasil;
            
        }

        function haha(){
            
            for($i=0; $i<10; $i++){
                echo $i;
            }

        }

        function prima(){
            
        }
        
    }