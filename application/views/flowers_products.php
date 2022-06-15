<?php
    include 'connectdata.php';
    $page = 1;
    $pageSize = 9;


    
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    if (isset($_GET['pageSize'])) {
        $pageSize = $_GET['pageSize'];
    }

    
    $sort_option = '';
    $sort_selected = '';
    $oderBySql = '';
    if(isset($_GET['sort_option'])){
        $sort_selected = $_GET['sort_option'];

        if($_GET['sort_option'] == '2'){
            $sort_option = 'ASC';
            $oderBySql =  "ORDER BY price_product " . $sort_option;
        }
        if($_GET['sort_option'] == '3'){
            $sort_option = 'DESC';
            $oderBySql =  "ORDER BY price_product " . $sort_option;
        }
        if($_GET['sort_option'] == '4'){
            $sort_option = 'ASC';
            $oderBySql =  "ORDER BY name_product " . $sort_option;
        }
        if($_GET['sort_option'] == '5'){
            $sort_option = 'DESC';
            $oderBySql =  "ORDER BY name_product " . $sort_option;
        }
    }
    
    $sql = "SELECT COUNT(*) AS id FROM products  where id_category=2 " . ((strlen($oderBySql) > 0 ) ? $oderBySql :'' );
    $resultCount = $conn->query($sql);
    $totalUser = mysqli_fetch_assoc($resultCount);

   $numPage = floor($totalUser['id']/$pageSize) + 1;

    $file = 'newfile.txt';
    $current = file_get_contents($file);
    $current .= $sql . "\n";
    file_put_contents($file, $current);

    $sql = "SELECT * FROM products where id_category=2 "  .  ((strlen($oderBySql) > 0 ) ? $oderBySql : "")  . " LIMIT " . ($page - 1)*$pageSize . ", " . $pageSize;

    $result = $conn->query($sql);
    $resultData = array();
    if (isset($result->num_rows)) {
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $object = (object) $row;
                array_push($resultData, $object);
            }
        }
    }else{
        $resultData = $result;
    }

    $conn->close();

    include 'flower_product_list.php';

?>
