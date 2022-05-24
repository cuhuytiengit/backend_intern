<?php 
           
           $servername = "localhost";
           $username = "root";
           $password = "cuhuytien@3003";
           $dbname = "backend_intern";
           $conn = mysqli_connect($servername,$username,$password,$dbname);
            $sql = "SELECT id, name_product, price_product,img_product FROM products ";
           $result = $conn->query($sql);
           
     ?>       