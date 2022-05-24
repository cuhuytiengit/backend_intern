<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<body>
<?php include 'header.php';?>

    <div class = 'containers'>
        <div class="banner">
                <div class="banner-top-1">
                        <div class="row">
                                <div class="col-8">
                                        <div class = 'banner-header1'>
                                                <div class="img-banner-1">
                                                        <img src="../img/img/img_header/píc1_layco_1.jpg" alt="">
                                                </div>
                                                <div class = 'text-banner'>
                                                        <span class = 'text-grass'> Grass & </span><br/>
                                                        <span class = 'text-grass1'> Grass Seeds</span>
                                                </div>
                                                <div class = 'button-hover-box-shadownn'  onclick = onCick_but    ton()>
                                                        <a onclick = onCick_button()>SHOP NOW</a>
                                                </div>
                                        </div>
                                </div>
                                <div class="col">

                                        <div class = 'banner-header2'>
                                                <div class = 'text-banner2'>
                                                        <span class = 'text-grass'> 10 SEED PACKETS </span><br/>
                                                        <span class = 'text-grass1'> AT ONLY</span>
                                                </div>
                                                <div class = 'text-banner3'>
                                                        <span class = 'phamtram'> $10 </span>
                                                </div>
                                                <div class = 'text-banner4'>
                                                        <span class = 'text-varieties'> MIX 'N MATCH SELECT VARIETIES!</span><br/>
                                                        <span class = 'text-savebig'> USE CODE: SAVEBIG</span>
                                                </div>
                                                <div class = 'button-hover-box-shadownn'  onclick = onCick_but    ton()>
                                                        <a onclick = onCick_button()>SHOP NOW</a>
                                                </div>        
                                        </div>
                                </div>
                        </div>
                </div>
<div class="banner-bottom">
                <div class="container-1">
                        <div class="row">
                                <div class="col ">
                                        <div class = 'filter1'>
                                                <div class = 'filter-img1'>
                                                <div class = 'text-filter'>   NEW FOR 2017</div> 
                                        </div>
                                </div>
                        </div>
                                <div class="col">
                                        <div class = 'filter2'>
                                                <div class = 'filter-img1'>
                                                        <div class = 'text-filter'>        VEGETABLES  </div> 
                                                </div>
                                        </div>
                                </div>
                        <div class="col">
                                <div class = 'filter3'>
                                        <div class = 'filter-img1'>
                                                <div class = 'text-filter'> HERBS </div> 
                                        </div>
                                </div>
                        </div>
                        <div class="col">
                                <div class = 'filter4'>
                                        <div class = 'filter-img1'>
                                                <div class = 'text-filter'> FLOWERS </div> 
                                        </div>
                                </div>
                </div>
</div>
</div>
</div>

</div>
        
<?php 

        $servername = "localhost";
        $username = "root";
        $password = "cuhuytien@3003";
        $dbname = "backend_intern";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        $sql = "SELECT id, name_product, price_product,img_product FROM products LIMIT 0,8";
        $result = $conn->query($sql);

?>
<div class="product">
        <div class="text-product">PRODUCTS  </div>
        <div class="product-menu">
        <div class="product-top">
        <?php while($row = $result->fetch_assoc()) { ?>
                <div class="product-1">
                        <div class="top-product">
                                <div class="top-img">
                                <img src="<?php echo  $row['img_product']; ?>" width="95%">
                                </div>
                        </div>
                        <div class="bottom-product">
                        <div class="info-product-1"><?php echo  $row['name_product']; ?></div>
                        <div class="price-product"><?php  echo  $row['price_product']; ?></div>
                        <div class="button-add-to-cart">
                                <button> <i class="fa fa-shopping-cart"></i>  ART TO CART</button>
                        </div>
                
                        </div>
        
                </div>
                <?php    
                }

        ?>
        </div>
</div>

<div class="banner-sub">
        <div class="row">
                <div class="col">
                        <div class = 'banner-sub1'>
                                <span class ='text-save'>Save</span><br/>
                                <span class ='text-sales-20'>20%</span><br/>
                        <div class = 'span-text-new'>
                                <span class = 'text-on-new'>ON NEW 2019 VARIETIES </span><br/>
                                <span class = 'text-on-new1'>OUR NEW INTRODUCTIONS ARE HERE!</span><br/>
                        </div>
                </div>
                <div class="col">
                        <div class = 'banner-sub2'>
                                <span class = 'text-on-new'>THE BEST HEIRLOOM & GOURMET</span><br/>
                                <span class = 'text-on-new1'>VEGETABLE, FLOWER & HERB SEEDS</span><br/>
                        <div class = 'button-hover-box-shadownn'  onclick = onCick_button()>
                                <a onclick = onCick_button()>SHOP NOW!</a>
                        </div>
                        </div>
                </div>
        </div>
</div>
        </div>
       
<div class="banner-logo1">       
        <div class="row">
                <div class="col">
                        <div class = 'logo-thuonghieu1'>
                                <img src="<?php echo base_url();?>img/img/img_brand/agriframes-logo-list.png" >
                        </div>
                </div>
                <div class="col">
                        <div class = 'logo-thuonghieu2'>
                                <img src="<?php echo base_url();?>img/img/img_brand/logo-juliana.png" >
                        </div>
                </div>
                <div class="col">
                        <div class = 'logo-thuonghieu3'>
                                <img src="<?php echo base_url();?>img/img/img_brand/logo-blooms.png" >
                        </div>
                </div>
                <div class="col">                  
                        <div class = 'logo-thuonghieu4'>
                                <img src="<?php echo base_url();?>img/img/img_brand/eden_logo.png">
                        </div>
                </div>
                <div class="col">
                        <div class = 'logo-thuonghieu5'>
                                <img src="<?php echo base_url();?>img/img/img_brand/halls_logo.png">
                        </div>
                </div>
                <div class="col">
                        <div class = 'logo-thuonghieu6'>
                                <img src="<?php echo base_url();?>img/img/img_brand/alko-logo.png" >
                        </div>
                </div>
        </div>
</div>

<div class="infor-activity-1">
        <div class="row">
                <div class="col">
                        <div class = 'phone'>
                                <div class = 'icon'>
                                                <i class = 'fa fa-phone'></i>
                                </div>
                                <div class = 'infor'>
                                        <div class = 'text1'>
                                                (123) 456-7890
                                        </div>
                                        <div class = 'text2'>
                                                Round-the-clock free hotline (24/7)
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="col">
                <div class = 'time'>
                        <div class = 'icon'>
                                <i class = 'fa fa-clock-o'></i>
                        </div>

                        <div class = 'infor'>
                                <div class = 'text1'>
                                        OPENING HOURS
                                </div>
                                <div class = 'text2'>
                                        7 days a week from 9:00 am to 7:00 pm
                                </div>

                                </div>

                        </div>
                </div>
                <div class="col">
                <div class = 'ship'>
                        <div class = 'icon'>
                                <i class="fa fa-truck"></i>
                        </div>
                        <div class = 'infor'>
                                <div class = 'text1'>FREE SHIPPING</div>
                                <div class = 'text2'>
                                                We provide you with fast and free delivery regardless of the product size.
                                </div>
                                </div>
                        </div>
                </div>
                <div class="col">
                        <div class = 'return'>
                                <div class = 'icon'>
                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                </div>
                                <div class = 'infor'>
                                        <div class = 'text1'> RETURN & EXCHANGE </div>
                                        <div class = 'text2'>
                                                You can return or exchange the item within 30 days.
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
                
    <?php include 'footer.php';?>

</body>
</html>
