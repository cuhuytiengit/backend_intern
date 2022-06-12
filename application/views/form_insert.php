
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
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


    	
	<!-- Google Fonts -->
    <link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	
	<!-- Template Styles -->
	  <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css">
	
	<!-- CSS Reset -->
	  <link rel="stylesheet" href="<?php echo base_url();?>css/normalize.css">
	
	<!-- Milligram CSS minified -->
	  <link rel="stylesheet" href="<?php echo base_url();?>css/milligram.min.css">
	
	<!-- Main Styles -->
	  <link rel="stylesheet" href="<?php echo base_url();?>css/styles.css">
	


</head>
<body>

<div class="navbar">
		<div class="row">
			<div class="column column-30 col-site-title"><a href="#" class="site-title float-left">Admin</a></div>
	
			<div class="column column-30">
				<div class="user-section"><a href="#">
					<img src="http://via.placeholder.com/50x50" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
					<div class="username">
						<h4>Jane Donovan</h4>
						<p>Administrator</p>
					</div>
				</a></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="sidebar" class="column">
			<h5>DANH MỤC</h5>
			<ul>
				<li><a href="http://localhost:8080/backend_intern/index.php/Admin/savedata"><em class="fa fa-home"></em>PRODUCTS</a></li>
				<li><a href="#charts"><em class="fa fa-bar-chart"></em> Charts</a></li>
				<li><a href="#widgets"><em class="fa fa fa-clone"></em> Widgets</a></li>
				<li><a href="#forms"><em class="fa fa-pencil-square-o"></em> Forms</a></li>
				<li><a href="#alerts"><em class="fa fa-warning"></em> Alerts</a></li>
				<li><a href="#buttons"><em class="fa fa-hand-o-up"></em> Buttons</a></li>
				<li><a href="#tables"><em class="fa fa-table"></em> Tables</a></li>
				<li><a href="#grid"><em class="fa fa-columns"></em> Grid</a></li>
			</ul>
		</div>
		<section id="main-content" class="column column-offset-20">
	
			

			


	

			<!--Tables-->
			<h5 class="mt-2">FORM PRODUCTS</h5><a class="anchor" name="tables"></a>
			
<div class="card-body">
    
    <form method ='POST' action="<?= base_url()?>index.php/Admin/savedata">
            <div class="box">
                <label>ID</label><input type="text" name="id" id="id" />
            </div>
            <div class="box">
                <label>Name product:</label><input type="text" name="name_product" id="name_product" />
            </div>
            <div class="box">
                <label>Price product</label><input type="number" name="price_product" id="price_product" />
            </div>
            <div class="box">
                <label>ID category</label><input type="number" name="id_category" id="id_category" />
            </div>
            <div class="box">
                <label>Image</label><textarea type="text" name="img_product" id="img_product"></textarea>
            </div>
            <button type = 'submit' name = 'save' value = 'Save Data'>Insert</button>
    </form>


    <h5 class="mt-2">TABLE PRODUCTS</h5><a class="anchor" name="tables"></a>
    
    <table id= 'product_data' class="table text-center table-hover table-bordered">
              <tr>
                  <th>ID</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá sản phẩm</th>
                  <th>Hình ảnh</th>
                  <th>categories</th>
                  <th>delete</th>
                  <th>Update</th>
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
                  <td><?php echo "<a href='deletedata?id=".$row['id']."'>Delete</a>";  ?>
                    </td>
                    <td><?php echo "<a href=‘updatedata?id=".$row['id']."'>Update</a>";?></td>
              </tr>
     
                  <?php
    
                      }
                  ?>
          </table>
         
    
        
    
    </div>
    
			
		
	


</body>
</html>

