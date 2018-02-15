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

        /**
         * CART is the key of the cart in the session array
        **/ 
        public function __construct() {               
            $this->cart = isset($_SESSION['CART']) ? $_SESSION['CART'] : array();
        }
        
        /**
         * Add a product to the cart 
        **/
        public function addItem($prodID) {
            /**
             * If the product already exists in the cart, we just need to increase the quntty
             * else we should add the product as product ID => (name, image, price, quntty = 1)
             * to the cart and in the end save the cart in the session
            **/
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
        
        /**
         * Get the total number of the products in the cart 
        **/
        public function getQuantities() {
            $antal = 0;
            foreach($this->cart as $item) {
                $antal += $item['quntty'];
            }
            return $antal;
        }
        
        /**
         * If you like you can use these functions to get items 
         * and total price in the cart, remove or change the quantity
         * of a product in the cart and clear CART in the session
        **/
        
        /*
        public function getItems() {
            $items = array();
            foreach($this->cart as $prodID => $product) {
                array_push($items, array(
                    'id'       => $prodID,
                    'name'     => $product['name'],
                    'image'    => $product['image'],
                    'price'    => $product['price'],
                    'quantity' => $product['quntty']
                ));
            }
            return $items;
        }
        
        public function totalPrice() {
            $price = 0;
            foreach($this->cart as $item) {
                $price += $item['quntty'] * $item['price'];
            }
            return $price;
        }
        
        public function changeQuantity($prodID, $newQuantity) {
            if(isset($this->cart[$prodID])) {
                $this->cart[$prodID]['quntty'] = $newQuantity;
                $_SESSION['CART'] = $this->cart;
            }
        }
        
        public function removeItem($prodID) {
            if(isset($this->cart[$prodID])) {
                unset($this->cart[$prodID]);
                $_SESSION['CART'] = $this->cart;
            }
        }
        
        public function removeCART() {
            if(isset($_SESSION['CART'])) unset($_SESSION['CART']);
        }
        */
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
            echo '<a href="' . $this->url . '">' . $this->title .'</a><form method="post" action="favFunctions.php"><input type="hidden" name="target" value="' . $this->title . '"><input type="submit" name="remove" value="Remove Me"></form>';
        }

        public function addToArray($array)
        {
            $array[$this->title] = $this;
        }

        public function removeFromArray($array)
        {
            unset($array[$this->title]);
        }
    }
?>