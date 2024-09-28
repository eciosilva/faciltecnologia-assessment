<?php

namespace App\Lib;

use App\Helper\VarDumper;

/**
 * This class implements the Singleton patterng to get an instance of a database connection object
 */
class DbConn {

    private static ?\PDO $dbInstance = null;

    /**
	 * Prevent from creating instance
	 */
	private function __construct()
	{

	}
	
	/**
	 * Prevent cloning the object
	 */
	private function __clone()
	{
		
	}

	/**
	 * SingleTon getInstance method
	 */
	public static function getInstance()
	{
		// Check if database is null
		if ( self::$dbInstance == null  ) {

			$dbName = $_ENV['DB_DATABASE'];
			$dbUser = $_ENV['DB_USERNAME'];
			$dbPassword = $_ENV['DB_PASSWORD'];
			
			// Creates a new PDO connection
			try {
				self::$dbInstance = new \PDO("mysql:host=db;dbname={$dbName}", $dbUser, $dbPassword);
			} catch (\Exception $e) {
				echo $e->getMessage();			
			}
		}
		return self::$dbInstance;
	}

}