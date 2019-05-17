<?php

    namespace App\Http\Controllers;

    class Greetings 
    {
        private $name = 'Anselm';

        public function __construct() 
        {
            
        }

        public function sum($a,$b) {
            $sum = $a + $b;
            return $sum;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }

        public function message($visitor)
        {
            $username = $this->getName();
           //$username = $this->name;
            return $username . ' greets ' . $visitor;

        }

        public function messageInUpperCase($visitor, $strupper) {
            $username = $this->getName();
            $str = $username . ' greets ' . $visitor;

            $result = $strupper->capitalize($str);

            return $result;
        }
    }