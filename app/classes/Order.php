<?php 

    class Order extends Cart{

        protected $conn;

        public function __construct(){
            global $conn;
            $this -> conn = $conn;
        }

        public function create($delivery_adress){

            $stmt = $this -> conn -> prepare("INSERT INTO orders (user_id, delivery_adress) VALUES (?,?)");
            $stmt -> bind_param('is', $_SESSION['user_id'], $delivery_adress);
            $stmt -> execute();

            $order_id = $this->conn-> insert_id;

            $cart_items = $this -> get_cart_items();

            $stmt = $this -> conn -> prepare ("INSERT INTO order_items (order_id, product_id, quantity) VALUES (?,?,?)");

            foreach ($cart_items as $item ){

                $stmt -> bind_param ("iis", $order_id, $item["product_id"], $item['quantity']);
                $stmt -> execute();
            }
            
        }

    }