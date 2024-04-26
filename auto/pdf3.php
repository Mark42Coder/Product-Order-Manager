<?php

require_once __DIR__ . '/vendor/autoload.php';


  // include('..\php\session_check.php');
  // include('..\php\db.php');


    
    $mpdf = new \Mpdf\Mpdf();
    // $mpdf=new mPDF('utf-8', array(190,100));

// C:\wamp\www\auto\example1\ttt.png

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

       }
    } 

    else 
    {
      echo "0 results";
     
    }




    $sql = "SELECT `item_code`,`order_id`, `cust_id`, `item_name`, `item_qty`, `item_price`
     FROM `order_item` WHERE `order_id` = '$order_id'";
     $result = $con->query($sql);


    $rec='';
    $total=0;

    if ($result->num_rows > 0) {
      $num=0;
     while($row = $result->fetch_assoc()) {
      

        $data[$num]['item_code'] = $row["item_code"];
        $data[$num]['item_name'] = $row["item_name"];
        $data[$num]['item_qty'] = $row["item_qty"];
        $data[$num]['item_price'] = $row["item_price"];
        

      $num=$num+1;
        $data['rows']=$num;
        $price=0;
        $qty=0;
        $temp=0;
        $amount=0;


        $price = (float)$row["item_price"];
        $qty= (float)$row["item_qty"];
        $price=number_format((float)$price, 2, '.', '');
        $qty=number_format((float)$qty, 2, '.', '');


        $temp= $price * $qty ;
        $amount=(float)$temp;

        $amount=number_format((float)$amount, 2, '.', '');

        $total+=(float)$amount;
        $total=number_format((float)$total, 2, '.', '');
        $rec .= '<tr>
               
                <td width="7%" align="center"><b><font face="Verdana">'.$num.'</font></b></td>
                <td width="14%" align="left"><b><font face="Verdana">&nbsp;'.$row["item_name"].'</font></b></td>
                <td width="14%" align="right"><b><font face="Verdana">'.$price.'</font></b></td>
                <td width="14%" align="right"><b><font face="Verdana">'.$qty.'</font></b></td>
                <td width="14%" align="right"><b><font face="Verdana">'.$amount.'</font></b></td>

                
               </tr>';

      }
    }

    else {
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

    // $rec='';
    // $i=1;
    // while ( $i<= 25) {

    //   $rec .= '<tr>
    //             <td width="8%">&nbsp;'.$i.'</td>
    //             <td width="41%">&nbsp;2</td>
    //             <td width="14%">&nbsp;3</td>
    //             <td width="14%">&nbsp;4</td>
    //             <td width="16%">&nbsp;5</td>
    //            </tr>';
    //   $i++;
    // }


    

 $tb = '
 <html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>U D A Y A M</title>
</head>

<body leftmargin="12" rightmargin="12">

<table border="1" width="318" height="100" bordercolor="#000000">
	<tr>
		<td height="94" width="308">
		<p style="margin-top: 0; margin-bottom: 0" align="center"><b>
		<font face="Verdana" size="7">&nbsp;UDAYAM</font></b></p>
		<p style="margin-top: 0; margin-bottom: 0" align="center"><b>
		<font face="Verdana" size="5">&nbsp;&nbsp; Vellore.</font></b></td>
	</tr>
</table>
<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>

<table border="1" width="44%" bordercolor="#000000">
	<tr>
		<td colspan="2">
		<p align="center"><b><font face="Verdana">ORDER COPY</font></b></td>
	</tr>
	<tr>
		<td width="27%">
		Rep. ID</td>
		<td>
		&nbsp; sdfsdfsdf</td>
	</tr>
	<tr>
		<td>
		Order ID</td>
		<td>
		s&nbsp; sdf sdf</td>
	</tr>
	<tr>
		<td>
		<p align="left"><b><font face="Verdana">Order Date</font></b></td>
		<td>
		&nbsp;sdfsdfd </td>
	</tr>
	<tr>
		<td width="70%" align="left" valign="top" colspan="2"><b>
		<font face="Verdana">Customer Details</font></b><p style="margin-top: 0; margin-bottom: 0">
		<b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp; M/S. Shree Sai Computer</font></b></p>
		<p style="margin-top: 0; margin-bottom: 0"><b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp; 
		No. 86/19, Sri Murugan Theater Complex,</font></b></p>
		<p style="margin-top: 0; margin-bottom: 0"><b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp; 
		Sathuvachari,</font></b></p>
		<p style="margin-top: 0; margin-bottom: 0"><b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp; 
		Vellore - 632 001.</font></b></p>
		<p style="margin-top: 0; margin-bottom: 0"><b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp; 
		Mobile : 9944226286</font></b></td>
	</tr>
	</table>

<table border="1" width="44%" style="border: 1px solid #000000; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px">
	<tr>
		<td bordercolorlight="#000000" bordercolordark="#000000" align="center">
		<b><font face="Verdana">Item Name</font></b></td>
		<td width="79" bordercolorlight="#000000" bordercolordark="#000000" align="center">
		<b><font face="Verdana">Qty</font></b></td>
		<td width="82" bordercolorlight="#000000" bordercolordark="#000000" align="center">
		<b><font face="Verdana">Rate</font></b></td>
	</tr>
	<tr>
		<td bordercolorlight="#000000" bordercolordark="#000000">&nbsp;</td>
		<td width="79" bordercolorlight="#000000" bordercolordark="#000000">&nbsp;</td>
		<td width="82" bordercolorlight="#000000" bordercolordark="#000000">&nbsp;</td>
	</tr>
</table>

</body>

</html>
 ';


// $tb = 
// '

// <html>

// <head>
// <meta http-equiv="Content-Language" content="en-us">
// <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
// <title>U D A Y A M</title>
// </head>

// <body>

// <table border="1" width="627" height="3" bordercolor="#000000">
//   <tr>
//     <td height="3" width="108">
//     <img border="0" src="http://udayamvellore.com/img/logo.png" width="136" height="111"></td>
//     <td height="3" width="475">
//     <p style="margin-top: 0; margin-bottom: 0"><b>
//     <font face="Verdana" size="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UDAYAM</font></b></p>
//     <p style="margin-top: 0; margin-bottom: 0"><b>
//     <font face="Verdana" size="5">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vellore.</font></b></td>
//   </tr>
// </table>
// <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>

// <table border="1" width="92%" bordercolor="#000000">
//   <tr>
//     <td colspan="3">
//     <p align="center"><b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORDER COPY</font></b></td>
//   </tr>
//   <tr>
//     <td width="62%" rowspan="3" align="left" valign="top"><b>
//     <font face="Verdana">Customer Details</font></b><p style="margin-top: 0; margin-bottom: 0">
//     <b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp; '.$cust_name.'</font></b></p>
//     <p style="margin-top: 0; margin-bottom: 0"><b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp; 
//     '.$cust_address1.'<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$cust_address2.'</font></b></p>
//     <p style="margin-top: 0; margin-bottom: 0"><b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp; 
//     '.$cust_area.'</font></b></p>
//     <p style="margin-top: 0; margin-bottom: 0"><b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp; 
//     '.$cust_city.'</font></b></p>
//     <p style="margin-top: 0; margin-bottom: 0"><b><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp; 
//     Mobile : '.$cust_phone.'</font></b></td>
//     <td width="16%" height="42"><b><font face="Verdana">&nbsp;Rep. ID</font></b></td>
//     <td width="16%" height="42">&nbsp;'.$rep_id.'</td>
//   </tr>
//   <tr>
//     <td width="16%" height="48"><b><font face="Verdana">&nbsp;Order ID</font></b></td>
//     <td width="16%" height="48">&nbsp;'.$order_id.'</td>
//   </tr>
//   <tr>
//     <td width="16%" height="50"><b><font face="Verdana">&nbsp;Order Date</font></b></td>
//     <td width="16%" height="50">&nbsp;'.$order_date.'</td>
//   </tr>
//   </table>

// <table border="1" width="92%" bordercolor="#000000">
//   <tr>
//     <td width="8%"><b><font face="Verdana">S. No</font></b></td>
//     <td width="41%"><b><font face="Verdana">&nbsp;&nbsp; Item Description</font></b></td>
//     <td width="14%" align="center"><b><font face="Verdana">Rate /Per</font></b></td>
//     <td width="14%" align="center"><b><font face="Verdana">Qty</font></b></td>
//     <td width="16%" align="center"><b><font face="Verdana">Amount</font></b></td>
//   </tr>
  
  
//   '.$rec.'



    


//   <tr>



//     <td width="79%" colspan="4"  width="14%" align="right">
//     <p align="right"><font face="Verdana"><b>Total Amount</b></font></td>


//     <td width="14%" align="right"><b><font face="Verdana">'.$total.'</font></b></td>

//   </tr>
// </table>

// </body>

// </html>
// ';





// $bs = file_get_contents('C:\wamp\www\auto\bootstrap\css\bootstrap.min.css');

// $css = file_get_contents('C:\wamp\www\auto\example1\style.css');

// $mpdf->WriteHTML($css,1);

$mpdf->WriteHTML($tb);
// $mpdf->Output();


ob_clean();
$mpdf->Output('../pdfreport/'.$order_id.'.pdf', 'F','A5');
























?>
