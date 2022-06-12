<?php 
           
           $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "backend_intern";
           $conn = mysqli_connect($servername,$username,$password,$dbname);
           $sql = "SELECT * FROM products";
           $result = $conn->query($sql);
           
     ?>       