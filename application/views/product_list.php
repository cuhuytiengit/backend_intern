<div class="choose-product">
                        <div class="choose-show ">
                            <div class="text-show">Show</div>
                            <div class="choose-number-show">
                               <?php include 'number_product.php'  ?>
                                <?php include 'select_number_product.php'  ?>
      
                            </div>
                        </div>
                        <div class="choose-sort ">
                            <div class="text-sort">Sort by</div>
                            <div class="choose-sort-style">
                                <?php include 'sort_price.php' ?>
                                <?php include 'select_sort_price.php' ?>
                            </div>
                        </div>
                        <div class="choose-page">
                            <?php  
                                     $servername = "localhost";
                                     $username = "root";
                                     $password = "cuhuytien@3003";
                                     $dbname = "backend_intern";
                                     $conn = mysqli_connect($servername,$username,$password,$dbname);
                        

                                    include 'vegetable_product.php';
                                    include 'button.php';  
                          ?>
                        </div>
                    </div>


                    <div class="list-product-page">
                        <div class="product-list-sale-page-1">

    <div class="product-list-top" >
        <?php  foreach((array)$resultData as $user) { ?>
            <div class="product1 "  > 
                <div class="product1-box">
                    <div class="product1-box-top">
                    <img src="<?php echo $user->img_product ?>" width="50%">
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


<div class="choose-product">
<div class="choose-show ">
                            <span class="text-show">Show</span>
                            <span class="choose-number-show">
                               <?php include 'number_product.php'  ?>
                                <?php include 'select_number_product.php'  ?>
      
                            </span>
                        </div>
                        <div class="choose-sort ">
                            <span class="text-sort">Sort by</span>
                            <span class="choose-sort-style">
                                <?php include 'sort_price.php' ?>
                                <?php include 'select_sort_price.php' ?>
                            </span>
                        </div>
                        <div class="choose-page">
                            <?php  
                                     $servername = "localhost";
                                     $username = "root";
                                     $password = "cuhuytien@3003";
                                     $dbname = "backend_intern";
                                     $conn = mysqli_connect($servername,$username,$password,$dbname);
                        

                                    include 'vegetable_product.php';
                                    include 'button.php';  
                          ?>
                        </div>
                    </div>
        </div>