<?php

class Connect {

    public static function ConnectDB()
    {
        $dbopts = parse_url(getenv('DATABASE_URL'));
        $hostname = $dbopts['host'];
        $username = $dbopts['user'];
        $password = $dbopts['pass'];
        $database = ltrim($dbopts['path'], '/');

        $dsn = "pgsql:"."host=$hostname;"."dbname=$database;"."user=$username;"."password=$password";

        try {
            $db = new PDO($dsn);
            // set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            return $db;
        } catch (PDOException $e) {
            return "Connection failed: " . $e->getMessage();
        }
    }
}
