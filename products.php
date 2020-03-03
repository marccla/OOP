<? 

    class Product {
        // Properties
        public $vat = 0.25;
        public $foodVat = 0.12;
        public $priceWithVat;
        public $priceWithFoodVat;     
    }

    class ProductVat extends Product {
        // Moar properties
        public $name;
        public $price;
        // Constructor - (((We take the price and * with the Vat's)))
        public function __construct($price, $name) {
            $this->price = $price;
            $this->name = $name;
            $this->priceWithVat = $this->price * $this->vat + $this->price;
            $this->priceWithFoodVat = $this->price * $this->foodVat + $this->price;
    }
}





?>