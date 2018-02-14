<?php

    abstract class products {
        public abstract function getProductName();
        public abstract function getProductImage();

        public function echoImage() {
            echo "<img src='/images/".$this->getAttractionImage()."' alt='Kolla, en cool ".$this->getAttractionName()."' width='".rand(70, 140)."px;' onClick='".$this->onClickCode()."'/>";
        }
    }

?>