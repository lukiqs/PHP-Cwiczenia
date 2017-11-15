<?php
//lib_namespaces

namespace zwierze\domowe{
    class zwierze{
        private $type;
        
        public function __construct() {
            $this->type=' pies ';
        }
        
        public function getType(){
            return $this->type;
        }
    }   
}


namespace zwierze\dzikie{
    class zwierze{
        private $type;
        
        public function __construct() {
            $this->type=' dzik ';
        }
        
        public function getType(){
            return $this->type;
        }
    }   
}