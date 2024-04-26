<?php

	include('session_check.php');

	if (isset($_POST['action']) && !empty($_POST['action'])) {
		$action = $_POST['action'];
		switch ($action) {

			case 'insert_cust':
				insert_cust();
				break;

			case 'insert_rep':
				insert_rep();
				break;

			case 'insert_item':
				insert_item();
				break;

			case 'pdf':
				pdf();
				break;

			case 'update_order':
				update_order();
				break;

			case 'update_cust':
				update_cust();
				break;	

			case 'update_item':
					update_item();
					break;	
			
			case 'update_cat':
						update_cat();
						break;

			case 'update_rep':
				update_rep();
					break;



			case 'get_cust_update':
				get_cust_update();
				break;

			case 'get_item_update':
					get_item_update();
					break;
			
			case 'get_rep_update':
			    	get_rep_update();
					break;
			
			case 'get_order_update':
				get_order_update();
				break;


				case 'get_order_view':
					get_order_view();
					break;
			
				case 'get_order_cust':
					get_order_cust();
					break;		
					

			case 'get_session':
				get_sessions();
				break;

			case 'get_cust_nameid':
				get_cust_nameid();
				break;

			case 'get_itemcat':
				get_itemcat();
				break;

			case 'get_rep_name':
				get_rep_name();
				break;

			case 'get_cust':
				get_cust();
				break;

			case 'get_rep':
				get_rep();
				break;

			case 'get_item':
				get_item();
				break;


			case 'put_order':
				put_order();
				break;

			case 'put_itemcat':
				put_itemcat();
				break;

			case 'get_order':
				get_order();
				break;


			case 'create':
				create();
				break;

			case 'update':
				update();
				break;

			case 'delete':
				delete();
				break;

			case 'delete_item':
				delete_item();
				break;


			case 'delete_itemcat':
					delete_itemcat();
					break;


			case 'delete_rep':
				delete_rep();
				break;



			case 'order_delete':
				order_delete();
				break;

			default:
				echo "No action found";
				break;
		}
	} else {
		read();
	}

	function pdf() {
		// include('http://localhost/8_3udayam/auto/pdf2.php');

		// header('http://localhost/8_3udayam/auto/pdf2.php');
	

	}



	function create() {
		execute_query(insert_query(), "Record added successfully !");
	}

	function read() {
		include('db.php');
		header('Content-Type: application/json');
		$data = array();
		$result = $con -> query('SELECT *, DATE_FORMAT(dob, "%Y-%m-%d") as dob, DATE_FORMAT(dom, "%Y-%m-%d") as dom FROM members');
		if ($result) {
			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$row['baptism'] = $row['baptism'] == 1 ? TRUE : FALSE;
				$row['conformation'] = $row['conformation'] == 1 ? TRUE : FALSE;
				$data[] = $row;
			}
			$result -> free_result();
		}
		echo json_encode($data, JSON_NUMERIC_CHECK);
		$con -> close();
	}

	function update() {
		execute_query(update_query(), "Record updated successfully !");
	}

	function delete() {
		execute_query(delete_query(), "Record deleted successfully !");
	}

	function order_delete() {
		execute_query(order_delete_query(), "Record deleted successfully !");
	}

	function insert_query() {
    	$json = json_decode($_POST['json'], true);
    	$keys   = implode('`,`', array_map('addslashes', array_keys($json)));
    	$values_arr = array_map('addslashes', array_values($json));

    	$values = "";
    	for ($i = 0; $i < count($values_arr); $i++) {
    		$value = $values_arr[$i];
    		if ($value == '') {
    			$values .= "NULL";
    		} else {
    			$values .= "'$value'";
    		}
    		if ($i < count($values_arr) - 1) {
    			$values .= ',';
    		}
    	}
    	return "INSERT INTO master_cust (`$keys`) VALUES ($values)";
    }

    function update_query() {
    	$json = json_decode($_POST['json'], true);
    	$keys = array_map('addslashes', array_keys($json));
    	$values = array_map('addslashes', array_values($json));
    	$sql = "";
    	for ($i = 0; $i < count($keys); $i++) {
    		$key = $keys[$i];
    		$value = $values[$i];
    		if ($value == '') {
    			$sql .= "`$key`=NULL ";
    		} else {
    			$sql .= "`$key`='$value' ";
    		}
    		if ($i < count($keys) - 1) {
    			$sql .= ',';
    		}
    	}
    	$id = $_POST['id'];
    	$sql = "UPDATE members SET" . $sql . " WHERE family_no = '$id'";
    	return $sql;
    }

    function delete_query() {
    	$id = $_POST['cust_id'];
    	return "DELETE FROM `master_cust` WHERE `cust_id`=$id" ;
    }

    function order_delete_query() {
    	$id = $_POST['order_id'];
    	// return "DELETE FROM `order_cust` WHERE `order_id`='$id'" ;
    	return "UPDATE `order_cust` SET `delete_order`=1 WHERE `order_id`= '$id'";
    }


    function delete_item() {
    	$id = $_POST['item_code'];
    	$sql= "DELETE FROM `master_item` WHERE `item_code`='$id'" ;
  		execute_query($sql,'successfully deleted');	 

    }


	
    function delete_itemcat() {
    	$id = $_POST['item_cat'];
    	$sql= "DELETE FROM `item_cat` WHERE `item_cat_name` = '$id' " ;
  		execute_query($sql,'successfully deleted');	 

    }


      function delete_rep() {
    	$id = $_POST['rep_id'];
    	$sql= "DELETE FROM `rep_id` WHERE `rep_id`='$id'" ;
  		execute_query($sql,'successfully deleted');	 

    }

    function insert_cust() {
    	include('db.php');


    	$cust_name=$_POST['cust_name'];
		$cust_area=$_POST['cust_area'];
		$rep_name=$_POST['rep_name'];
		// $area=$_POST['cust_area'];
		// $city=$_POST['cust_city'];
		// $pin=$_POST['cust_pincode'];
		// $phone=$_POST['cust_phone'];
		// $gst=$_POST['cust_gstNo'];
		
	

	 $sql="INSERT INTO `master_cust` (`cust_name`, `cust_area`, `rep_name`)
	  VALUES ('$_POST[cust_name]', '$_POST[cust_area]','$_POST[rep_name]')";



	execute_query($sql,'successfully added');	 


	
	
    }


    function insert_rep() {
    	include('db.php');


    	$rep_name=$_POST['rep_name'];
		$rep_phone=$_POST['rep_phone'];
		$rep_id=$_POST['rep_id'];

		
	

	 $sql="INSERT INTO `rep_id` (`rep_name`, `rep_phone`, `rep_id`)
	  VALUES ('$rep_name','$rep_phone','$rep_id')";



	execute_query($sql,'successfully added');	 


	
	
    }

function put_itemcat() {
    	include('db.php');


    	$itemcat=$_POST['item_cat_name'];
		$itemcatsort=$_POST['item_cat_sort'];



	 $sql="INSERT INTO `item_cat` (`item_cat_name`,`item_cat_sort`) VALUES ('$itemcat','$itemcatsort');";



	execute_query($sql,'successfully added');	 


        copycattoitem();
	
    }


function insert_item() {
    	include('db.php');


    	$item_name=$_POST['newitem_name'];
		$item_price=$_POST['newitem_price'];
		$newitem_cat=$_POST['newitem_cat'];



	 $sql="INSERT INTO `master_item` (`item_name`, `item_price`, `item_cat`)
	  VALUES ('$item_name', '$item_price', '$newitem_cat')";



	execute_query($sql,'successfully added');	 

        copycattoitem();

	
	
    }





    function update_cust() {
    	include('db.php');

    	$id=$_POST['cust_id'];

    
		
		
	
 $sql=("UPDATE `master_cust` SET `cust_name`='$_POST[cust_name]',
						`cust_area`='$_POST[cust_area]',
						`rep_name`='$_POST[rep_name]'
					
						
						 WHERE `cust_id` ='$id'"); 

	execute_query($sql,'successfully updated');	 


	
	
    }



    function update_item() {
    	include('db.php');

    
	
	
 $sql=("UPDATE `master_item` SET 
						`item_cat`='$_POST[item_cat]',
						`item_name`='$_POST[item_name]',
						`item_price`='$_POST[item_price]'
						
						
						 WHERE `item_code` = '$_POST[item_id]'"); 

	execute_query($sql,'successfully updated');	 

        copycattoitem();



    }


	
	function update_cat() {
    	include('db.php');

    
	
	
 $sql=("UPDATE `item_cat` SET 
						`item_cat_name`='$_POST[item_cat]',
						`item_cat_sort`='$_POST[edititemcatsort]'
						
						
						
						 WHERE `item_cat_name` = '$_POST[old_cat]'"); 

	execute_query($sql,'successfully updated');	 


        copycattoitem();


    }



	
	function update_rep() {
    	include('db.php');

    
	
	
 $sql=("UPDATE `rep_id` SET 
						`rep_name`='$_POST[rep_name]',
						`rep_phone`='$_POST[rep_phone]',
						`rep_id`='$_POST[rep_id]'

						
						
						 WHERE `rep_id` = '$_POST[old_rep]'"); 

	execute_query($sql,'successfully updated');	 




    }




    function put_order() {
    	include('db.php');
    	$orderdata=$_POST['order'];
    	$count=$_POST['count'];
    	$cust_id=$_POST['cust_id'];
    	$cust_name=$_POST['cust_name'];
    	$note1=$_POST['note1'];
    	$note2=$_POST['note2'];
    	$note3=$_POST['note3'];
    	$note4=$_POST['note4'];
    	$note5=$_POST['note5'];
    	$note6=$_POST['note6'];
    	$note7=$_POST['note7'];
        
	   $order_id= uniqid();
	   $rep_id= $_SESSION['username']; 
	  //$date= current_timestamp('d-m-Y h:i:sa');
// $date= current_timestamp();
	  
	   $sno=0;
	   $result = $con -> query("SELECT * FROM `order_cust` WHERE`rep_id`= '$rep_id' ");
		
			$sno=$result->num_rows;
			$sno++;
			



	// echo $sno;


	   // $sql= "INSERT INTO `order_cust` (`order_id`, `cust_id`, `cust_name`, `order_date`,`rep_id`,'sno') 
	   // VALUES ('$order_id', $cust_id, '$cust_name', current_timestamp(),'$rep_id','$sno')";

// $sql = "INSERT INTO `order_cust`(`order_id`, `cust_id`, `cust_name`, `order_date`, `rep_id`, `notes`, `sno`, ) VALUES ()";


	   $sql = "INSERT INTO `order_cust` (`order_id`, `cust_id`, `cust_name`, `order_date`, `rep_id`, `sno`,  `notes`,  `notes2`,  `notes3`,  `notes4`,  `notes5`,  `notes6`,  `notes7`)
	    VALUES ('$order_id', '$cust_id', '$cust_name',current_timestamp(), '$rep_id', '$sno', '$note1', '$note2', '$note3', '$note4', '$note5', '$note6', '$note7')";

	    execute_query($sql,'successfully added');

    	echo $note1;

    	    	// $it=$name[0]['item_name'];
		
		// echo json_encode($it);
		$i=0;
		
    	while ($i <$count) {


    	$item_code=$orderdata[$i]['item_code'];
	
    	$item_name=$orderdata[$i]['item_name'];
    	$item_qty=$orderdata[$i]['item_qty'];
    	$item_price=$orderdata[$i]['item_price'];


 		$sql="INSERT INTO `order_item` (`item_code`,`order_id`, `cust_id`, `item_name`, `item_qty`, `item_price`) 
 		VALUES ('$item_code','$order_id', '$cust_id', '$item_name', '$item_qty', '$item_price')";	
		
 		execute_query($sql,'successfully added',$count);
 		$i++;
		}



// whatsapp send #######################################

        $custdata='';
        $custname='';
        $repcell='';
	    $result = $con -> query("SELECT * FROM `master_cust` WHERE `cust_name` = '$cust_name'");
	    
	      if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				
				$custdata= $row["cust_city"];
                		$custname=$row["cust_name"];
				// $custcell=$row["cust_phone"];
			}
			} else {
			echo "0 results";
			}
        
        
        
        $result = $con -> query(" SELECT * FROM `rep_id` WHERE `rep_name`='$rep_id' ");
	    
	      if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				
			
				$repcell=$row["rep_phone"];
			}
			} else {
			echo "0 results";
			}

        
        
        

        
        
        
    
// include('../auto/pdf2.php');
include('img.php');


	$arr=json_encode(array(
	"phone"=>"91"."$repcell",
	"body"=>"http://udayamvellore.com/php/IMAGE.jpg",
	"filename"=>"$custdata"."_"."$custname"."_Order".".jpg"
	
));


$url="https://api.chat-api.com/instance320761/sendFile?token=m7zlyq77cwjd9ds0";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
curl_setopt($ch,CURLOPT_HTTPHEADER,array(
	'Content-type:application/json',
	'Content-length:'.strlen($arr)
));
$result=curl_exec($ch);
curl_close($ch);
echo $result;

//echo "$note1 $note2 $note3 $note4 $note5 $note6 $note7";

// whatsapp send #######################################
 }



function update_order() {
    	include('db.php');
    	$orderdata=$_POST['order'];
    	$count=$_POST['count'];
    	$cust_id=$_POST['cust_id'];
    	$cust_name=$_POST['cust_name'];
	   $order_id=$_POST['order_id'];
	   $rep_id= $_SESSION['username']; 


	    $sql = "DELETE FROM `order_item` WHERE `order_id` = '$order_id'";
	    execute_query($sql,'successfully deleted');



	   // $sql= "INSERT INTO `order_cust` (`order_id`, `cust_id`, `cust_name`, `order_date`,`rep_id`) 
	   // VALUES ('$order_id', $cust_id, '$cust_name', current_timestamp(),'$rep_id')";


	   //  execute_query($sql,'successfully added');

    	

    	    	// $it=$name[0]['item_name'];
		
		// echo json_encode($it);
		$i=0;
		
    	while ($i <$count) {


    	$item_code=$orderdata[$i]['item_code'];
	
    	$item_name=$orderdata[$i]['item_name'];
    	$item_qty=$orderdata[$i]['item_qty'];
    	$item_price=$orderdata[$i]['item_price'];


 		$sql="INSERT INTO `order_item` (`item_code`,`order_id`, `cust_id`, `item_name`, `item_qty`, `item_price`) 
 		VALUES ('$item_code','$order_id', '$cust_id', '$item_name', '$item_qty', '$item_price')";	
		
 		execute_query($sql,'successfully added',$count);
 		$i++;
		}

		
		
    }




    function execute_query($sql, $message) {
    	include('db.php');
		if ($con->query($sql) === TRUE) {
			echo $message;
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
		$con -> close();
    }



     function get_cust() {
    	include('db.php');
		$data=[];
    	
    	

		
		$result = $con -> query('SELECT * FROM master_cust');
		if ($result->num_rows > 0) {
			$num=0;
			while($row = $result->fetch_assoc()) {
				
				$data[$num]['cust_id'] = $row["cust_id"];
				$data[$num]['cust_name']=$row["cust_name"];
				$data[$num]['cust_address1']=$row["cust_address1"];
				$data[$num]['cust_address2']=$row["cust_address2"];
				$data[$num]['cust_area']=$row["cust_area"];
				$data[$num]['cust_city']=$row["cust_city"];
				$data[$num]['cust_pincode']=$row["cust_pincode"];
				$data[$num]['cust_gstNo']=$row["cust_gstNo"];
				$data[$num]['cust_phone']=$row["cust_phone"];
				$data[$num]['rep_name']=$row["rep_name"];



				$num=$num+1;
				$data['rows']=$num;
				
			}
			} else {
			echo "0 results";
			}

			 echo json_encode($data);
			

              

		$con -> close();
    }


function get_rep() {
    	include('db.php');
		$data=[];
    	
    	

		
		$result = $con -> query('SELECT * FROM rep_id');
		if ($result->num_rows > 0) {
			$num=0;
			while($row = $result->fetch_assoc()) {
				
				$data[$num]['rep_id'] = $row["rep_id"];

				$data[$num]['rep_name'] = $row["rep_name"];
				$data[$num]['rep_phone']=$row["rep_phone"];
				


				$num=$num+1;
				$data['rows']=$num;
				
			}
			} else {
			echo "0 results";
			}

			 echo json_encode($data);
			

              

		$con -> close();
    }


function get_item() {
    	include('db.php');
		$data=[];
    	
    	

		
		$result = $con -> query("SELECT * FROM `master_item` ORDER BY `master_item`.`cat_sort`  ASC" );
		if ($result->num_rows > 0) {
			$num=0;
			while($row = $result->fetch_assoc()) {
				
				$data[$num]['item_code'] = $row["item_code"];
				$data[$num]['item_name']=$row["item_name"];
				$data[$num]['item_price']=$row["item_price"];

				$data[$num]['item_cat']=$row["item_cat"];
			


				$num=$num+1;
				$data['rows']=$num;
				
			}
			} else {
			echo "0 results";
			}

			 echo json_encode($data);
			

              

		$con -> close();
    }



  function get_cust_nameid() {
    	include('db.php');
		$data=[];
    	
    	$user=$_SESSION['username'];

		
		$result = $con -> query("SELECT * FROM `master_cust` WHERE `rep_name` = '$user' ");
		if ($result->num_rows > 0) {
			$num=0;
			while($row = $result->fetch_assoc()) {
				
				$data[$num]['cust_id'] = $row["cust_id"];
				$data[$num]['cust_name']=$row["cust_name"];
			


				$num=$num+1;
				$data['rows']=$num;
				
			}
			} else {
			echo "0 results";
			}

			 echo json_encode($data);
			

              

		$con -> close();
    }

function get_itemcat() {
    	include('db.php');
		$data=[];
    	
    	

		
		$result = $con -> query("SELECT * FROM `item_cat` ");
		if ($result->num_rows > 0) {
			$num=0;
			while($row = $result->fetch_assoc()) {
				
				$data[$num]['item_cat_name'] = $row["item_cat_name"];
				$data[$num]['item_cat_sort'] = $row["item_cat_sort"];



				$num=$num+1;
				$data['rows']=$num;
				
			}
			} else {
			echo "0 results";
			}

			 echo json_encode($data);
			

              

		$con -> close();
    }

function get_itemcatupdate() {
    	include('db.php');
		$data=[];
    	
    	

		
		$result = $con -> query("SELECT * FROM `item_cat` WHERE '$_POST[item_cat]'");
		if ($result->num_rows > 0) {
			$num=0;
			while($row = $result->fetch_assoc()) {
				
				$data[$num]['item_cat_name'] = $row["item_cat_name"];
				$data[$num]['item_cat_sort'] = $row["item_cat_sort"];



				$num=$num+1;
				$data['rows']=$num;
				
			}
			} else {
			echo "0 results";
			}

			 echo json_encode($data);
			

              

		$con -> close();
    }




  function get_rep_name() {
    	include('db.php');
		$data=[];
    	
    	

		
		$result = $con -> query("SELECT * FROM `rep_id` ");
		if ($result->num_rows > 0) {
			$num=0;
			while($row = $result->fetch_assoc()) {
				
				$data[$num]['rep_name'] = $row["rep_name"];
				// $data[$num]['cust_name']=$row["cust_name"];
			


				$num=$num+1;
				$data['rows']=$num;
				
			}
			} else {
			echo "0 results";
			}

			 echo json_encode($data);
			

              

		$con -> close();
    }





	 function get_cust_update() {
    	include('db.php');
		$data=[];
    	
    	$cust_id=$_POST['cust_id'];

		$sql = "SELECT * FROM `master_cust` WHERE `cust_id`=$cust_id";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		    $data['cust_id'] = $row["cust_id"];
		    $data['cust_name'] = $row["cust_name"];
		    $data['cust_address1'] = $row["cust_address1"];
		    $data['cust_address2'] = $row["cust_address2"];
		    $data['cust_area'] = $row["cust_area"];
		    $data['cust_city'] = $row["cust_city"];
   		    $data['cust_pincode'] = $row["cust_pincode"];
		    $data['cust_phone'] = $row["cust_phone"];
		    $data['cust_gstNo'] = $row["cust_gstNo"];

		  }
		} else {
		  echo "0 results";
		  echo $user;
		}


			 echo json_encode($data);
			

              

		$con -> close();
 }



 function get_item_update() {
	include('db.php');
	$data=[];
	
	$item_id=$_POST['item_id'];

	$sql = "SELECT * FROM `master_item` WHERE `item_code`=$item_id";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		$data['item_id'] = $item_id; 
		$data['item_name'] = $row["item_name"];
		$data['item_price'] = $row["item_price"];
	

	  }
	} else {
	  echo "0 results";
	  echo $user;
	}


		 echo json_encode($data);
		

		  

	$con -> close();
}


function get_rep_update() {
	include('db.php');
	$data=[];
	
	$rep_id=$_POST['rep_id'];

	$sql = "SELECT * FROM `rep_id` WHERE `rep_id`=$rep_id";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		
		$data['rep_name'] = $row["rep_name"];
		$data['rep_phone'] = $row["rep_phone"];

	

	  }
	} else {
	  echo "0 results";
	  echo $user;
	}


		 echo json_encode($data);
		

		  

	$con -> close();
}



 function get_order_update() {
    	include('db.php');
		$data=[];
		// copy to temp item
		$sql="TRUNCATE TABLE temp_item";
		$con->query($sql);
		$sql = "INSERT INTO temp_item (`item_name`, `item_price`) SELECT `item_name`, `item_price` FROM master_item";
		$con->query($sql);
		// copy to temp item

    	$order_id=$_POST['order_id'];

		$sql = "SELECT * FROM `order_cust` WHERE `order_id`='$order_id'";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {

		  	$data['order_id'] = $row["order_id"];

		    $data['cust_id'] = $row["cust_id"];
		    $data['cust_name'] = $row["cust_name"];
		    $data['order_date'] = $row["order_date"];
		  
		 	 }
		} 

		else 
		{
		  echo "0 results";
		 
		}




		$sql = "SELECT `item_code`,`order_id`, `cust_id`, `item_name`, `item_qty`, `item_price`
		 FROM `order_item` WHERE `order_id` = '$order_id'";
		 $result = $con->query($sql);

		if ($result->num_rows > 0) {
			$num=0;

		 while($row = $result->fetch_assoc()) {
		 	

		 	$data[$num]['item_code'] = $row["item_code"];
		    $data[$num]['item_name'] = $row["item_name"];
		    $data[$num]['item_qty'] = $row["item_qty"];
		    $data[$num]['item_price'] = $row["item_price"];
		  
			


	// ADD ITEM FROM ITEM MATER


		




			$sql = "SELECT *  FROM `temp_item` WHERE `item_name` = '$row[item_name]'";
		    $result2 = $con->query($sql);

		 	if($result2->num_rows > 0) {
                     // The record(s) do exist
		 			$sql = "UPDATE `temp_item` SET `item_qty`='$row[item_qty]',`item_price`='$row[item_price]' WHERE `item_name`='$row[item_name]'";

					$con->query($sql);

                }
            else{
                     // No record found
            		$sql="INSERT INTO `temp_item`(`item_name`, `item_qty`, `item_price`)
            		 VALUES ('$row[item_name]','$row[item_qty]','$row[item_price]')";
                	$con->query($sql);

                }
	// ADD ITEM FROM ITEM MATER



		  $num=$num+1;
		  $data['rows']=$num;



		  }
		}

		else {
		  echo "0 results";
		 
		}

	
		$sql = "SELECT * FROM `temp_item`";

		 $result = $con->query($sql);

		if ($result->num_rows > 0) {
			$num=0;

		 while($row = $result->fetch_assoc()) {
		 	

		 	$data[$num]['item_code'] = $row["item_name"];
		    $data[$num]['item_name'] = $row["item_name"];
		    $data[$num]['item_qty'] = $row["item_qty"];
		    $data[$num]['item_price'] = $row["item_price"];
		  
		
		  $num=$num+1;
		  $data['rows']=$num;



		  }
		}

		else {
		  echo "0 results";
		 
		}
		
		echo json_encode($data);

			
		$con -> close();
 }



   function get_order_updateitem() {
    	include('db.php');
		$data=[];

		$sql = "SELECT `order_id`, `cust_id`, `item_name`, `item_qty`, `item_price`
		 FROM `order_item` WHERE `order_id` = '$order_id'";
		 $result = $con->query($sql);

		if ($result->num_rows > 0) {

		 while($row = $result->fetch_assoc()) {
		 	$num=0;


		    $data[$num]['item_name'] = $row["item_name"];
		    $data[$num]['item_qty'] = $row["item_qty"];
		    $data[$num]['item_price'] = $row["item_price"];
		  

		  $num=$num+1;
				$data['rows']=$num;
		  }
		}

		else {
		  echo "0 results";
		 
		}





	}



    function get_order() {
    	include('db.php');
		$data=[];
    	 $user=$_SESSION['username'];

    	

		if ($user=='Ramesh'){
		$result = $con -> query("SELECT * FROM `order_cust` WHERE `delete_order` = 0  ");
		}else{
		$result = $con -> query("SELECT * FROM `order_cust` WHERE `rep_id` = '$user' AND `delete_order` = 0  ");
		}
		
		if ($result->num_rows > 0) {
			$num=0;
			while($row = $result->fetch_assoc()) {
				
				$data[$num]['order_id'] = $row["order_id"];
				$data[$num]['cust_id']=$row["cust_id"];
				$data[$num]['cust_name']=$row["cust_name"];
				$data[$num]['order_date']=$row["order_date"];
				$data[$num]['sno']=$row["sno"];



				$num=$num+1;
				$data['rows']=$num;
				
			}
			} else {
			echo "0 results";
			}
                $data['user']=$user;
			 echo json_encode($data);
			

              

		$con -> close();
    }



    function get_order_view() {

		include('db.php');
		$data=[];
		$id=$_POST['order_id'];

		$sql = "SELECT * FROM `order_item` WHERE `order_id` = '$id'";
		 $result = $con->query($sql);
		 $num=0;
		if ($result->num_rows > 0) {


		 while($row = $result->fetch_assoc()) {
		 	


		    $data[$num]['item_name'] = $row["item_name"];
		    $data[$num]['item_qty'] = $row["item_qty"];
		    $data[$num]['item_price'] = $row["item_price"];
		  

		  $num=$num+1;
				$data['rows']=$num;
		  }
		}

		else {
		  echo "0 results";
		 
		}
		echo json_encode($data);
			

              

		$con -> close();
  
    }
    
    
      function get_order_cust() {

		include('db.php');
		$data=[];
		$id=$_POST['order_id'];

		$sql = "SELECT * FROM `order_cust` WHERE `order_id` = '$id'";
		 $result = $con->query($sql);
		 $num=0;
		if ($result->num_rows > 0) {


		 while($row = $result->fetch_assoc()) {
		 	

		    $data['sno'] = $row["sno"];

		    $data['order_id'] = $row["order_id"];
		    $data['cust_name'] = $row["cust_name"];
		    $data['order_date'] = $row["order_date"];
		    $data['rep_name'] = $row["rep_id"];
		    
		    $data['note1'] = $row["notes"];
		    $data['note2'] = $row["notes2"];
		    $data['note3'] = $row["notes3"];
		    $data['note4'] = $row["notes4"];
		    $data['note5'] = $row["notes5"];
		    $data['note6'] = $row["notes6"];
		    $data['note7'] = $row["notes7"];


		  }
		}

		else {
		  echo "0 results";
		 
		}
		echo json_encode($data);
			

              

		$con -> close();
  
    }





 	function get_sessions() {
    	include('db.php');
    	 $user=$_SESSION['username'];
    	 echo json_encode($user);

    }


 function copycattoitem() {
     
     	include('db.php');
	
    	

		
		$result = $con -> query("SELECT * FROM `item_cat` ");
		if ($result->num_rows > 0) {
			$num=0;
			while($row = $result->fetch_assoc()) {
				
			 //$row["item_cat_name"];
			 // $row["item_cat_sort"];



			
				
				
				 $sql=("UPDATE `master_item` SET 
						`cat_sort`='$row[item_cat_sort]'
						
						
						 WHERE `item_cat` = '$row[item_cat_name]'"); 

	                execute_query($sql,'successfully updated');	 

				
			}
			} else {
			echo "0 results";
			}



		$con -> close();
     
 }


?>