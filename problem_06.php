<?php

/* Make a Class MyName, use constructor to set your name in the $name variable.(use $this). Now print that name with welcome by calling method. */
    class MyName {
        private $name;
        
        
        public function setName($name) {
            $this->name = $name;
        }
        
        
        public function getName() {
            return $this->name;
        }
    }
    
    
    $shahin = new MyName();
    
    
    $shahin->setName("Md. Shahinul Islam");
    
    
    echo "Welcome  " . $shahin->getName();

?>