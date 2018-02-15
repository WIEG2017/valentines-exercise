<?php
    /**
     * I have included this file to the project in header.php 
    **/
    
    
    /** The Cart class;
     * I have created an instance of this class ; $theCart = new Cart(); in header.php to
     * show the total number of the items in the cart beside Kundvagn in the top menu for all the pages.
     * This instance ($theCart) has been used in produkt.php and it can be used in the kundvagn.php page. 
    **/
    class Cart {
        private $cart;

        public function __construct() {               
            $this->cart = isset($_SESSION['CART']) ? $_SESSION['CART'] : array();
        }

        public function addItem($prodID) {
            if(isset($this->cart[$prodID])) $this->cart[$prodID]['quntty']++;
            else {
                global $products;
                $product = $products[$prodID];
                $product['quntty'] = 1;
                unset($product['catid']);
                unset($product['dscrptn']);
                $this->cart[$prodID] = $product;
            }
            $_SESSION['CART'] = $this->cart;
        }

        public function getQuantities() {
            $antal = 0;
            foreach($this->cart as $item) {
                $antal += $item['quntty'];
            }
            return $antal;
        }

        public function getItems() {
            return $this->cart;
        }
        
        public function totalPrice() {
            $price = 0;
            foreach($this->cart as $item) {
                $price += $item['quntty'] * $item['price'];
            }
            return $price;
        }
        
        public function removeCART() {
            if(isset($_SESSION['CART'])) unset($_SESSION['CART']);
        }        
    }

    class Favourite
    {
        private $title;
        private $url;

        public function __construct($pagetitle, $pageurl)
        {
            $this->title = $pagetitle;
            $this->url = $pageurl;
        }

        public function drawMe()
        {
            echo '<a href="' . $this->url . '">' . $this->title .'</a><button>remove me</button>';
        }
    }
?>