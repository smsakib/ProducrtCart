<?php

$product = new Product(1, "Head Phone", 9.99);
$product->showDetails();

class Product {
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }

    public function showDetails() {
        echo "ID: " . $this->id . "\n";
        echo "Name: " . $this->name . "\n";
        echo "Price: $" . $this->getFormattedPrice() . "\n";
    }
}

?>
