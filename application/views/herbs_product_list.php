<div class="choose-product-1">
    <div class="row">
    <div class="col-12 col-sm-12  col-md-4 col-lg-4">
    
            <div class="text-show">Show</div>
            <div class="choose-number-show">
            <?php include 'number_product.php'  ?>
            <?php include 'select_number_herbs.php'  ?>

            </div>
    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-4">

    <div class="text-sort">Sort by</div>
                            <div class="choose-sort-style">
                                <?php include 'sort_price.php' ?>
                                <?php include 'select_sort_herbs.php' ?>
                            </div>

    </div>
    
    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
    <div class="choose-page">
                            <?php  
                                     $servername = "localhost";
                                     $username = "root";
                                     $password = "";
                                     $dbname = "backend_intern";
                                     $conn = mysqli_connect($servername,$username,$password,$dbname);
                                    include 'herbs_product.php';
                                    include 'button.php';  
                          ?>
                        </div>
                        </div>

    </div>
  </div>
  



 <div class="list-product-page container-lg">
         <div class="product-list-sale-page-1">
    <div class="product-list-top" >
        <?php  foreach((array)$resultData as $user) { ?>
            <div class="product1  col-12 col-sm-12 col-md-4 col-lg-4"  > 
                <div class="product1-box">
                    <div class="product1-box-top">
                    <img src="<?php echo $user->img_product ?>" width="100%" height="200px">
                    </div>
                    <div class="product1-box-bottom">
                        <div class="product-name">
                        <?php echo   $user->name_product  ?>
                        </div>
                        <div class="product-price"> 
                        <?php  echo '$'?><?php  echo $user->price_product ?>
                        </div>
                        <div class="product-button">
                            <button><i class="fa fa-shopping-cart"></i> ART TO CARD</button>
                        </div>
                    </div>             
                </div>
            </div>
        <?php  } ?>
    </div>

</div>

<div class="choose-product-1">
    <div class="row">
    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
    
                            <div class="text-show">Show</div>
                            <div class="choose-number-show">
                               <?php include 'number_product.php'  ?>
                                <?php include 'select_number_herbs.php'  ?>
      
                            </div>
                        </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-4">

    <div class="text-sort">Sort by</div>
                            <div class="choose-sort-style">
                                <?php include 'sort_price.php' ?>
                                <?php include 'select_sort_herbs.php' ?>
                            </div>

    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
    <div class="choose-page">
                            <?php  
                                     $servername = "localhost";
                                     $username = "root";
                                     $password = "";
                                     $dbname = "backend_intern";
                                     $conn = mysqli_connect($servername,$username,$password,$dbname);
                                    include 'herbs_product.php';
                                    include 'button.php';  
                          ?>
                        </div>
                        </div>

    </div>
  </div>
  
</div>

