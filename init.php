<?php
session_start();
require_once "functions.php";
/**
 * @return PDO
 */
function getDbConnection(): PDO
{
    static $DB;
    if (!$DB) {
        try {
            $DB = new PDO('mysql:dbname=security;host=127.0.0.1;port=3307', 'root');
        } catch (Exception $e) {
            die('Error: '.$e->getMessage());
        }
    }
    return $DB;
}


