<?php
        $cust_id = '';
        $cust_name = '';
        $order_date= '';
        $rep_id='';
        $cust_address1='';
        $cust_address2 = '';
        $cust_area= '';
        $cust_city = '';
        $cust_pincode ='';
        $cust_phone = '';
        $cust_gstNo = '';
        $sno = '';


    $data=[];


    // $order_id=$_POST['order_id'];

  



    $order_id;

    $sql = "SELECT * FROM `order_cust` WHERE `order_id`='$order_id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

        $data['order_id'] = $row["order_id"];

        $cust_id = $row["cust_id"];
        $cust_name = $row["cust_name"];
        $order_date=  $row["order_date"];
        // $order_date=date_format($temp_date,"d/m/Y H:i:s");
        $rep_id= $row["rep_id"];
        $sno= $row["sno"];


       }
    } 

    else 
    {
      echo "0 results";
     
    }
    
    
    
    
    
    
    
    
    $sql = "SELECT * FROM `master_cust` WHERE `cust_id`=$cust_id";
    $result = $con->query($sql);

    

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $cust_address1= $row["cust_address1"];
        $cust_address2 = $row["cust_address2"];
        $cust_area= $row["cust_area"];
        $cust_city = $row["cust_city"];
        $cust_pincode = $row["cust_pincode"];
        $cust_phone = $row["cust_phone"];
        $cust_gstNo = $row["cust_gstNo"];



      }
    } else {
      echo "0 results";
      
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   

    
    
    
    
    
    
    
    
      

$text='ORDER';
$text1='4 PCS CAKE BOX MULTICOLOR (GREY BACK)';


$img = imagecreate(500, 600);
$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);
imagefilledrectangle($img, 0, 0, 500, 300, $white);
imagestring($img, 5, 240, 10, $text, $black);
imagestring($img, 5, 0, 15, "______________________________________________________", $black);

imagestring($img, 5, 10, 30,"Sales Executive : ".$rep_id , $black);


imagestring($img, 5, 0, 40, "______________________________________________________", $black);


imagestring($img, 5, 10, 55,"Order No        : ".$sno, $black);


imagestring($img, 5, 0, 60, "______________________________________________________", $black);

imagestring($img, 5, 10, 75,"Order Date      : ".$order_date, $black);
imagestring($img, 5, 0, 80, "______________________________________________________", $black);

imagestring($img, 5, 10, 95,"Delivery  Date  : ".$order_date, $black);
imagestring($img, 5, 0, 100, "______________________________________________________", $black);


//imagestring($img, 5, 10, 115,"Customer Details", $black);
imagestring($img, 5, 10, 115,"Area            : ".$cust_area, $black);
imagestring($img, 5, 10, 130,"Customer Name   : ".$cust_name, $black);



imagestring($img, 5, 0, 135, "______________________________________________________", $black);



imagestring($img, 5, 10, 150,"S.no|          Item Name             |  Qty  | Price", $black);

imagestring($img, 5, 0, 155, "______________________________________________________", $black);

// imagestring($img, 5, 10, 200, "1)".$text1, $black);
// imagestring($img, 5, 390, 200, "| 1111", $black);
// imagestring($img, 5, 496, 200, "| 3333", $black);
// imagestring($img, 5, 390, 210, "| ", $black);
// imagestring($img, 5, 496, 210, "| ", $black);


// imagestring($img, 5, 0, 215, "________________________________________________________________________", $black);




// $i=1;
// $row=185;
// $items=200;

// while ( $i<= 10) {


// imagestring($img, 5, 10, $items, $i." ) ".$text1, $black);
// imagestring($img, 5, 390, $items, "| 1111", $black);
// imagestring($img, 5, 496, $items, "| 3333", $black);
// imagestring($img, 5, 390, $items+10, "| ", $black);
// imagestring($img, 5, 496, $items+10, "| ", $black);


// imagestring($img, 5, 0, $row, "________________________________________________________________________", $black);

// $i++;
// $row=$row+30;
// $items=$items+30;

// }


// imagestring($img, 5, 10, 230, "1)".$text1, $black);
// imagestring($img, 5, 390, 230, "| 1111", $black);
// imagestring($img, 5, 496, 230, "| 3333", $black);
// imagestring($img, 5, 390, 235, "| ", $black);
// imagestring($img, 5, 496, 235, "| ", $black);


// imagestring($img, 5, 0, 245, "________________________________________________________________________", $black);





$sql = "SELECT `order_id`, `cust_id`, `item_name`, `item_qty`, `item_price`
		 FROM `order_item` WHERE `order_id` = '$order_id'";
		 $result = $con->query($sql);

		if ($result->num_rows > 0) {


$n=1;
$nl=175;
$items=172;
		 while($row = $result->fetch_assoc()) {
		 	$num=0;


		    
imagestring($img, 5, 25, $items,$n, $black);
imagestring($img, 5, 45, $items, "| ".$row["item_name"], $black);
imagestring($img, 5, 345, $items, "| ". $row["item_qty"], $black);
imagestring($img, 5, 415, $items, "| ". $row["item_price"], $black);
imagestring($img, 5, 345, $items, "| ", $black);
imagestring($img, 5, 415, $items, "| ", $black);
imagestring($img, 5, 45, $items, "| ", $black);
imagestring($img, 5, 45, $items, "| ", $black);
imagestring($img, 5, 0, $nl, "______________________________________________________", $black);	

$n++;
$nl=$nl+18;
$items=$items+18;

				
		  }
		}

		else {
		  echo "0 results";
		 
		}

imagestring($img, 5, 10, $nl+5, "Note - "+$note, $black);












imagepng($img, "IMAGE.jpg");

?>