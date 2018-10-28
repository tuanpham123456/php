<?php
	class Cart{
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}

	
	function CartProduct($listProductCartID) {
         $sql = mysqli_query($this->conn,"SELECT products.id,products.name, products.price, products.image, 
         product_categories.name as category_name FROM products INNER JOIN product_categories ON products.product_category_id = product_categories.id 
                WHERE products.id IN $listProductCartID");
        $cartProduct = array();

        while ( ($obj = mysqli_fetch_object($sql)) != NULL ) {
            $cartProduct[] = $obj;
        }
        return $cartProduct;

    	
		}
	}

?>