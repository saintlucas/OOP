<?php

class Product {
	
	private $quantity;
	private $description;
	private $id;
	private $price;
	
	public function __construct($quantity, $description, $id, $price) {
		$this->quantity = is_numeric($quantity) && $quantity > 0 ? $quantity : 0;
		$this->description = is_string($description) ? $description : '';
		$this->id = $id;
		$this->price = is_numeric($price) && $price > 0 ? $price : 0;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function getQuantity() {
		return $this->quantity;
	}
	
	public function setQuantity($newQuantity) {
		if(is_numeric($newQuantity) && $newQuantity > 0) {
			$this->quantity = $newQuantity;
		}
		return $this;
	}
	
	public function getTotalPrice() {
		$totalPrice = $this->quantity * $this->price;
		if($this->quantity >= 3) {
			$totalPrice *= 0.8;
		}
		return $totalPrice;
	}
	
	public function __toString() {
		return "id: $this->id, desc: $this->description, quant: $this->quantity, price: $this->price<br>";
		
	}
	
	
}   