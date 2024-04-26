<?php

	include('session_check.php');

	if (isset($_POST['action']) && !empty($_POST['action'])) {
		$action = $_POST['action'];
		switch ($action) {
			case 'create':
				create();
				break;

			case 'update':
				update();
				break;

			case 'delete':
				delete();
				break;

			default:
				echo "No action found";
				break;
		}
	} else {
		read();
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
    	return "INSERT INTO order_add (`$keys`) VALUES ($values)";
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
    	$id = $_POST['id'];
    	return "DELETE FROM members where family_no='$id'";
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

?>