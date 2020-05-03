<?php


// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'food_delivery_management_system';

$dbConn = new mysqli($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed.' . $dbConn->error);
$dbConn->select_db($dbName) or die('Cannot select database. ' . $dbConn->error);

function dbQuery($sql)
{
	global $dbConn;
	$result = $dbConn->query($sql) or die($dbConn->error);
	
	return $result;
}

function dbAffectedRows()
{
	global $dbConn;
	
	return $dbConn->affected_rows;
}

function dbFetchArray($result, $resultType = MYSQLI_NUM) {
	return $result->fetch_array($resultType);
}

function dbFetchAssoc($result)
{
	return $result->fetch_assoc();
}

function dbFetchRow($result) 
{
	return $result->fetch_row();
}

function dbFreeResult($result)
{
	return $result->free_result();
}

function dbNumRows($result)
{
	return $result->num_rows;
}

function dbSelect($dbName)
{
	return $dbConn->select_db($dbName);
}

function dbInsertId()
{
	return $dbConn->insert_id;
}
?>