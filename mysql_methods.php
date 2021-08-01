<?php

// ============================================
// Set the global vars for database connection
// ============================================

$host = ''; // MYSQL Database Host 

$db = ''; 	// MYSQL Database name

$user = ''; // MYSQL Database username

$pass = ''; // MYSQL Database password



// ==============================================================================
// Get database host name as a method
// ==============================================================================
function getDatabaseHost() { global $db; return $db; }

// ==============================================================================
// Get database name as a method
// ==============================================================================
function getDatabaseName() { global $db; return $db; }

// ==============================================================================
// Get database username as a method
// ==============================================================================
function getDatabaseUsername() { global $user; return $user; }

// ==============================================================================
// Get database username as a method
// ==============================================================================
function getDatabasePassword() { global $pass; return $pass; }





// ==============================================================================
// mysql_affected_rows — Get number of affected rows in previous MySQL operation
// ==============================================================================
if (!function_exists('mysql_affected_rows'))
{
	function mysql_affected_rows($var1)
	{
		return mysqli_affected_rows($var1);
	}
}

// ========================================
// — Returns the name of the character set
// ========================================
if (!function_exists('mysql_client_encoding'))
{
	function mysql_affected_rows()
	{
		return mysqli_character_set_name(mysql_connect());
	}
}


// ========================================
// — Close MySQL connection
// ========================================
if (!function_exists('mysql_close'))
{
	function mysql_close()
	{
		return mysqli_close(mysql_connect());
	}
}

// ==========================================
// — Top vars are required for 
// — Open a connection to a MySQL Server
// ==========================================
if (!function_exists('mysql_connect'))
{
	function mysql_connect()
	{

		$return = mysqli_connect($host, $user, $pass, getDatabaseName()); 

		return $return;
	}
}


// ==========================================
// — Create a MySQL database
// - @var $database = Mysql database name
// - @var $MySQL = Mysql object
// ==========================================
if (!function_exists('mysql_create_db'))
{
	function mysql_create_db($database, $MySQL)
	{
		return  (mysql_query("CREATE DATABASE " . $database)) ? true : "Error creating database: " . mysql_error();
	}
}

// ==========================================
// — Move internal result pointer
// - @var $result = Mysql query result
// - @var $row_number = Mysql row number
// ==========================================
if (!function_exists('mysql_data_seek'))
{
	function mysql_data_seek($result, $row_number)
	{
		return  mysqli_data_seek($result, $row_number);
	}
}

// ==========================================
//  — Retrieves database name from the call to mysql_list_dbs
// - @var $database = Mysql database nameD
// ==========================================
if (!function_exists('mysql_db_name'))
{
	function mysql_db_name($database)
	{
		return getDatabaseName();
	}
}


// ==========================================
// — Selects a database and executes a query on it
// - @var $database = Mysql database name
// - @var $query = Mysql query
// ==========================================
if (!function_exists('mysql_db_query'))
{
	function mysql_db_query($database, $query)
	{
		mysql_select_db($database);

		return mysql_query($query);
	}
}

// ==========================================
// — Drop (delete) a MySQL database
// - @var $database = Mysql database name
// ==========================================
if (!function_exists('mysql_drop_db'))
{
	function mysql_drop_db($database)
	{
		return  (mysql_query("DROP DATABASE " . $database)) ? true : "Error: " . mysql_error();
	}
}



// ==================================================================================
// — Returns the numerical value of the error message from previous MySQL operation
// ==================================================================================
if (!function_exists('mysql_error'))
{
	function mysql_error()
	{
		return mysqli_error(mysql_connect());
	}
}


// ==================================================================================
// — Returns the text of the error message from previous MySQL operation
// ==================================================================================
if (!function_exists('mysql_error'))
{
	function mysql_error()
	{
		return mysqli_error(mysql_connect());
	}
}

// ==================================================================================
// — Escapes a string for use in a mysql_query
// - @var $string = String to be escaped
// ==================================================================================
if (!function_exists('mysql_escape_string'))
{
	function mysql_escape_string($string)
	{
		return mysqli_escape_string($string);
	}
}


// ==================================================================================
// — Fetch a result row as an associative array, a numeric array, or both
// - @var $result = Mysql query result
// - @var $result_type = Mysql result type
// ==================================================================================
if (!function_exists('mysql_fetch_array'))
{
	function mysql_fetch_array($result, $result_type = MYSQL_BOTH)
	{
		return mysqli_fetch_array($result, $result_type);
	}
}


 
// ==================================================================================
//  — Fetch a result row as an associative array
// - @var $result = Mysql query result
// ==================================================================================
if (!function_exists('mysql_fetch_assoc'))
{
	function mysql_fetch_assoc($result)
	{
		return mysqli_fetch_assoc($result);
	}
}


// ==================================================================================
//   — Get column information from a result and return as an object
// - @var $result = Mysql query result
// ==================================================================================
if (!function_exists('mysql_fetch_field'))
{
	function mysql_fetch_field($result)
	{
		return mysqli_fetch_field($result);
	}
}


// ==================================================================================
// — Get the length of each output in a result
// - @var $result = Mysql query result
// ==================================================================================
if (!function_exists('mysql_fetch_lengths'))
{
	function mysql_fetch_lengths($result)
	{
		return mysqli_fetch_lengths($result);
	}
}


// ==================================================================================
// — Fetch a result row as an object
// - @var $result = Mysql query result
// - @var $class_name = The name of the class to instantiate, set the properties of and return. 
//		-- If not specified, a stdClass object is returned.
// - @var $params = An optional array of parameters to pass to the constructor
// ==================================================================================
if (!function_exists('mysql_fetch_object'))
{
	function mysql_fetch_object($result, $class_name = null, $params = null)
	{
		return mysqli_fetch_object($result, $class_name, $params);
	}
}


// ==================================================================================
// — Get a result row as an enumerated array
// - @var $result = Mysql query result
// ==================================================================================
if (!function_exists('mysql_fetch_row'))
{
	function mysql_fetch_row($result)
	{
		return mysqli_fetch_row($result);
	}
}


// ==================================================================================
// — Get the flags associated with the specified field in a result
// - @var $result = Mysql query result
// - @var $index = Mysql result index
// ==================================================================================
if (!function_exists('mysql_field_flags'))
{
	function mysql_field_flags($result, $index = 0)
	{
		return mysqli_fetch_field_direct($result, $index);
	}
}

// ==================================================================================
// — Returns the length of the specified field
// - @var $result = Mysql query result
// - @var $index = Mysql result index
// ==================================================================================
if (!function_exists('mysql_field_len'))
{
	function mysql_field_len($result, $index = 0)
	{
		return mysqli_fetch_field_direct($result, $index);
	}
}


// ==================================================================================
// — Get the name of the specified field in a result
// - @var $result = Mysql query result
// - @var $index = Mysql result index
// ==================================================================================
if (!function_exists('mysql_field_name'))
{
	function mysql_field_name($result, $index = 0)
	{
		return mysqli_fetch_field_direct($result, $index);
	}
}


// ==================================================================================
// — Set result pointer to a specified field offset
// - @var $result = Mysql query result
// - @var $index = Mysql result index
// ==================================================================================
if (!function_exists('mysql_field_seek'))
{
	function mysql_field_seek($result, $index = 0)
	{
		return mysqli_fetch_field_direct($result, $index);
	}
}


// ==================================================================================
// — Set result pointer to a specified field offset
// - @var $result = Mysql query result
// - @var $index = Mysql result index
// ==================================================================================
if (!function_exists('mysql_field_seek'))
{
	function mysql_field_seek($result, $index = 0)
	{
		return mysqli_fetch_field_direct($result, $index);
	}
}


// ==================================================================================
// — Get name of the table the specified field is in
// - @var $result = Mysql query result
// - @var $index = Mysql result index
// ==================================================================================
if (!function_exists('mysql_field_table'))
{
	function mysql_field_table($result, $index = 0)
	{
		return mysqli_fetch_field_direct($result, $index);
	}
}

// ==================================================================================
// — Free result memory
// - @var $result = Mysql query result
// ==================================================================================
if (!function_exists('mysql_free_result'))
{
	function mysql_free_result($result)
	{
		return mysqli_free_result($result);
	}
}


// ==================================================================================
// — Get MySQL client info
// ==================================================================================
if (!function_exists('mysql_get_client_info'))
{
	function mysql_get_client_info()
	{
		return mysqli_get_client_info(mysql_connect());
	}
}


// ==================================================================================
// — Get MySQL host info
// ==================================================================================
if (!function_exists('mysql_get_host_info'))
{
	function mysql_get_host_info()
	{
		return mysqli_get_host_info(mysql_connect());
	}
}


// ==================================================================================
// — Get MySQL protocol info
// ==================================================================================
if (!function_exists('mysql_get_proto_info'))
{
	function mysql_get_proto_info()
	{
		return mysqli_get_proto_info(mysql_connect());
	}
}


// ==================================================================================
// — Get MySQL server info
// ==================================================================================
if (!function_exists('mysql_get_server_info'))
{
	function mysql_get_server_info()
	{
		return mysqli_get_server_info(mysql_connect());
	}
}


// ==================================================================================
// — Get information about the most recent query
// ==================================================================================
if (!function_exists('mysql_info'))
{
	function mysql_info()
	{
		return mysqli_info(mysql_connect());
	}
}


// ==================================================================================
// — Get the ID generated in the last query
// ==================================================================================
if (!function_exists('mysql_insert_id'))
{
	function mysql_insert_id()
	{
		return mysqli_insert_id(mysql_connect());
	}
}


// ==================================================================================
// — List databases available on a MySQL server
// ==================================================================================
if (!function_exists('mysql_list_dbs'))
{
	function mysql_list_dbs()
	{
		return mysql_query("SHOW DATABASES;");
	}
}


// ==================================================================================
// — List MySQL processes
// ==================================================================================
if (!function_exists('mysql_list_processes'))
{
	function mysql_list_processes()
	{
		return mysqli_thread_id(mysql_connect());
	}
}


// ==================================================================================
// — List tables in a MySQL database
// ==================================================================================
if (!function_exists('mysql_list_tables'))
{
	function mysql_list_tables()
	{
		return mysql_query("SHOW TABLES FROM ". getDatabaseName());
	}
}


// ==================================================================================
// — Get number of fields in result
// - @var $result = Mysql query result
// ==================================================================================
if (!function_exists('mysql_num_fields'))
{
	function mysql_num_fields($result)
	{
		return mysqli_num_fields($result);
	}
}


// ==================================================================================
// — Get number of rows in result
// - @var $result = Mysql query result
// ==================================================================================
if (!function_exists('mysql_num_rows'))
{
	function mysql_num_rows($result)
	{
		return mysqli_num_rows($result);
	}
}

// ==================================================================================
// — Open a persistent connection to a MySQL server
// ==================================================================================
if (!function_exists('mysql_pconnect'))
{
	function mysql_pconnect()
	{
		return mysql_connect();
	}
}


// ==================================================================================
// — Ping a server connection or reconnect if there is no connection
// ==================================================================================
if (!function_exists('mysql_ping'))
{
	function mysql_ping()
	{
		return mysqli_ping(mysql_connect());
	}
}


// ==================================================================================
// — Escapes special characters in a string for use in an SQL statement
// @var $string = String to be escaped
// ==================================================================================
if (!function_exists('mysql_real_escape_string'))
{
	function mysql_real_escape_string($string)
	{
		return mysqli_real_escape_string($string);
	}
}


// ==================================================================================
// — Get result data
// @var $result = MySql database query
// ==================================================================================
if (!function_exists('mysql_result'))
{
	function mysql_result($result)
	{
		return mysqli_fetch_all($result);
	}
}



// ==================================================================================
// — Sets the client character set
// @var $string = MySql database charset
// ==================================================================================
if (!function_exists('mysql_set_charset'))
{
	function mysql_set_charset($string)
	{
		return mysqli_set_charset(mysql_connect(), $string);
	}
}


// ==================================================================================
// — Get current system status
// ==================================================================================
if (!function_exists('mysql_stat'))
{
	function mysql_stat()
	{
		return 	mysqli_stat(mysql_connect());
	}
}



// ==================================================================================
// — Get table name of field
// @var $result = MySql database query
// @var $index = The field number. 
// 		-- This value must be in the range from 0 to number of fields - 1
// ==================================================================================
if (!function_exists('mysql_tablename'))
{
	function mysql_tablename($result, $index = 0)
	{
		return mysqli_fetch_field_direct($result, $index);
	}
}


// ==================================================================================
// — Return the current thread ID
// @var $result = MySql database query
// 		-- This value must be in the range from 0 to number of fields - 1
// ==================================================================================
if (!function_exists('mysql_thread_id'))
{
	function mysql_thread_id()
	{
		return mysqli_thread_id(mysql_connect());
	}
}


// ==================================================================================
// — Select a MySQL database
// @var $database = MySql database name
// ==================================================================================
if (!function_exists('mysql_select_db'))
{
	function mysql_select_db($database)
	{
		mysqli_select_db(mysql_connect(), $database);
		
		return 1; 
	}
}


// ========================================
// — Send a MySQL query
// @var $query = MySql query result
// ========================================
if (!function_exists('mysql_query'))
{
	function mysql_query($query)
	{
		return mysqli_query(mysql_connect(), $query);
	}
}




// ==================================================================================
// — Send an SQL query to MySQL without fetching and buffering the result rows
// ==================================================================================
if (!function_exists('mysql_unbuffered_query'))
{
	function mysql_unbuffered_query()
	{
		return mysqli_thread_id(mysql_connect());
	}
}


