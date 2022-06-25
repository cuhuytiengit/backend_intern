
                       <?php  
                                     $servername = "localhost";
                                     $username = "root";
                                     $password = "";
                                     $dbname = "backend_intern";
                                     $conn = mysqli_connect($servername,$username,$password,$dbname);
                                     ?>
              

<div class="header-black container-fluid">
    <div class="header  container-lg">
            <div class="row">
                    <div class="col-12 col-sm-12  col-md-4 col-lg-4 ">
                            <div class = 'text-phone'>
                                    <i class = 'fa fa-phone'></i> 
                                    <span class = 'phone'><a href ='#'><?php 
                                     $sql = "SELECT * FROM information where id_infor='i01'";
                                     $result = mysqli_query($conn,$sql);
                                     while($row = mysqli_fetch_array($result) ){     
                                         echo  $row['tiltle'] ?></a>
                                                      <?php

}
?></span> <?php 
$sql = "SELECT * FROM information where id_infor='i02'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result) ){     
    echo  $row['tiltle'] ?></a>
                 <?php

}
?>
                            </div>
                    </div>
                            <div class="col-12 col-sm-12  col-md-5 col-lg-5">
                            <div class = 'text-time'>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <span class = 'text-hours'>
                                    <?php 
                                     $sql = "SELECT * FROM information where id_infor='i03'";
                                     $result = mysqli_query($conn,$sql);
                                     while($row = mysqli_fetch_array($result) ){     
                                         echo  $row['tiltle'] ?></a>
                                                      <?php

}
?>
                                    </span>
                            </div>
                    </div>

                    <div class="menu-filter col-12 col-sm-12  col-md-3  col-lg-3">
                            <ul>
                                    <li class ='active' ><a href ='http://localhost:8080/backend_intern/'>Home</a></li>    
                                    <li><a href ='http://localhost:8080/backend_intern/index.php/home/about_page'>About</a></li>
                                    <li><a href ='http://localhost:8080/backend_intern/index.php/home/contact'>Contacts</a></li>
                                    <li><a href ='http://localhost:8080/backend_intern/index.php/home/blog'>Blog</a></li>
                            </ul>
                    </div>
            </div>      
    </div>
</div>


<div class="header-logo-1  container-fluid">
        <div class="header-logo-icon container-lg">
                <div class="row">
                                <div class="col-12 col-sm-12  col-md-5   col-lg-5">
                                <div class="logo">
                                <span class = 'logo-img'>
                                        <a href="http://localhost:8080/backend_intern/"> <img src="<?php echo base_url();?>img/img/img_header/logo_gg.png" alt=""></a>  </span>
                                <span class='text-evolveris'>  <a href="http://localhost:8080/backend_intern/">Evolveris</a></span>
                                </div>
                                </div>
                                        <div class="col-sm-12  col-md-4  col-lg-4 ">
                                        <div class="input-search ">
                                <input /> <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                                </div>
                                <div class="col-sm-12  col-md-3  col-lg-3">
                                <div class="icon ">
                
                                <i class="fa fa-shopping-cart"></i>
                                <i class="fa fa-circle"><i class="number">0</i> </i>
                                <i class="fa fa-balance-scale"></i>
                                <i class="fa fa-circle" ><i class="number">0</i> </i>
                                <i class="fa fa-user" ></i>
                        
                        </div> 
                                </div>
                        </div>
         </div>              
</div>

<div class="header-menu  container-lg">
    <div class="menu-main">
        <div class="row">
            <ul class="col-12">
                <li>
                    <a href="http://localhost:8080/backend_intern/index.php/home/vegetable"> VEGETABLES</a>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </li>
                <li>
                <a href="http://localhost:8080/backend_intern/index.php/home/flower">  FLOWERS   </a>
                      </li>


                      <li>
                <a href="http://localhost:8080/backend_intern/index.php/home/herbs">HERBS  </a>
                      </li>

                      <li>
                <a href="http://localhost:8080/backend_intern/index.php/home/fruits">  FRUITS   </a>
                      </li>
                      <li>
                <a href="http://localhost:8080/backend_intern/index.php/home/organics"> ORGANICS </a>
                      </li>
            </ul>
        </div>
    </div>
</div>
</div>