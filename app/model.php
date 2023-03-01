<?php
    abstract class model{
        private $host ="localhost";
        private $user ="root";
        private $db = "bu";
        private $pass ="";
        protected $connexion ;
        protected $id;
        protected $table;
        public function connecting(){
            $this->connexion =null;
            $this->connexion = new PDO("mysql: host=".$this->host.";dbname=".$this->db, $this->user, $this->pass);
        }
        public function GetAll()
        {
            $req = $this->connexion->prepare("SELECT * FROM $this->table");
            $req->execute();
            $content = $req->fetchAll();
            //var_dump("content");
            return $content;
        }
    }