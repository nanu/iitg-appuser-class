<?php
/*
 * Database.php
 * 
 * The Database class is meant to simplify the task of
 * accessing information from the backend database
 *
 * Written by: Nanu Alan Kachari, Department of CSE, IIT Guwahati on 7 July 2017
 * 
 */

class database
{
    protected static $instance = null;

    public function __construct() {}
    public function __clone() {}

    public static function instance()
    {
        if (self::$instance === null)
        {
            $opt  = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => FALSE,
            );
            $dsn = 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset='.DBCHARSET;
            self::$instance = new PDO($dsn, DBUSER, DBPASS, $opt);
        }
        return self::$instance;
    }

    public static function __callStatic($method, $args)
    {
        return call_user_func_array(array(self::instance(), $method), $args);
    }

    public static function run($sql, $args = [])
    {
        $stmt = self::instance()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
?>
