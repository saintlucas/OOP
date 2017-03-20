<?php

require_once 'Product.php';

class Scanner {

    private $products;

    public function __construct() {
        $this->products = array();
    }

    public function addProduct(Product $product) {
        if (isset($this->products[$product->getId()])) {
            //if the $product is already on the product list
            $this->addQuantity($product->getId(), $product->getQuantity());
        } else {
            //if the $product is not on the product list
            /*
             * Objects are always passed by reference in php 5 or later 
             * so we have to use clone operator to have independent objects 
             * on the product list
             */
            $this->products[$product->getId()] = clone $product;
        }
    }

    public function removeProduct($productId) {
        if (isset($this->products[$productId])) {
            unset($this->products[$productId]);
        }
    }

    public function changeQuantity($productId, $newQuantity) {
        if (isset($this->products[$productId])) {
            $this->products[$productId]->setQuantity($newQuantity);
        }
    }

    /*
     * add $newQuantity to quantity of product existing on the product list
     */

    public function addQuantity($productId, $newQuantity) {
        if (isset($this->products[$productId])) {
            $currentQuantity = $this->products[$productId]->getQuantity();
            $this->products[$productId]->setQuantity($currentQuantity + $newQuantity);
        }
    }

    public function printReceipt() {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->getTotalPrice();
            echo $product;
        }
        echo "Total price: $total";

        //var_dump($this->products);
    }

}
