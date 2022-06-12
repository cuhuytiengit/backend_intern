

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backend_intern";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die('Kết nối thất bại:'.mysqli_connect_error());
 }else{
     echo"kết nối thành công"; 
 }

 $delete  = '';
 
if(isset($_GET['id'])){
    
    $id= $_GET['id'];

    $delete = mysqli_query($conn,  "DELETE FROM `products` WHERE `id` = '$id' ");
    if($delete){
        echo "<script type='text/javascript'>alert('Bạn có chắc chắn muốn xóa ko');</script>";
    } 




}


// $insert = '';
// if(isset($_POST['id'])){
//     $id= $_POST['id'];
//     $name_product = $_POST['name_product'];
//     $price_product = $_POST['price_product'];
//     $img_product = $_POST['img_product'];
//     $img_product = $_POST['id_category'];
//     $conn = mysqli_connect($servername,$username,$password,$dbname);
//      $insert = mysqli_query($conn,  "INSERT INTO  `products` VALUES('$id', '$name_product', '$price_product ', '$img_product ') ");
//     if(!$id){
//     echo 'Successfully  Insert';
//     }else if($id ==' ' || $name_product ==' '  || $price_product ==' ' || $img_product ==' '  ){
//     echo 'Ban nhap thieu';
//     }
//     else{
//     echo "<script type='text/javascript'>alert('Bạn đã nhập trùng id..Mời bạn nhập lại');</script>";
//       echo 'insertion failer';
//     }

// }



$sql = "SELECT * FROM products ";
$query =mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url();?>css/backend.css">

	<!-- Main Styles -->
	<link rel="stylesheet" href="css/styles.css">
	


</head>
<body>




<div class="card-body">
    
<?php include  'form_insert.php' ?>

      <table id= 'product_data' class="table text-center table-hover table-bordered">
          <tr>
              <th>ID</th>
              <th>Tên sản phẩm</th>
              <th>Giá sản phẩm</th>
              <th>Hình ảnh</th>
              <th>categories</th>
              <th>delete</th>
          </tr>
              <?php 
                    $sql = "SELECT * FROM products";
                  $result = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_array($result) ){     
                  $id = $row['id'];
              ?>
          <tr>

              <td ><?php echo $row['id']; ?></td>
              <td><?php echo $row['name_product'] ?></td>
              <td><?php echo $row['price_product'] ?></td>
              <td> <img src="<?php echo  $row['img_product']; ?>" width="30%"></td>
              <td> <?php echo $row['id_category'] ?></td>
              <td><?php echo "<a href='?id=".$row['id']."'>Delete</a>";  ?>
                </td>
          </tr>
 
              <?php

                  }
              ?>
      </table>
     
</div>



</body>
</html>














