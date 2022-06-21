<?php
    namespace App;
    use PDO;

    class DB{
        protected object $db;

        public function __construct(){
           
                $this->db = new PDO("mysql:host=localhost;dbname=tugas_2_siska", "root", "");
           
            }
        }
