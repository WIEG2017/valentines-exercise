<?php

    abstract class Products {
        public abstract function getProductName();
        public abstract function getProductImage();

        public function echoImage() {
            echo "<img src='/bilder/".$this->getProductImage()."' alt='Kolla, en cool ".$this->getProductName()."' width='".rand(70, 140)."px;' onClick='".$this->onClickCode()."'/>";
        }
    }


    class Flower extends Products {
        public function getProductImage() {
            return "blomma1.jpg";
        }
        public function getProductName() {
            switch (LANGUAGE) {
                case "sv":
                    return "Ljuvlig Blomma";
                case "en":
                    return "Beautiful Flower";
            }
        }
      
    }

    












?>