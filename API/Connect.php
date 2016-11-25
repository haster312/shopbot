<?php

class Connect {

    public function ConnectDB()
    {
        $dbopts = parse_url(getenv('DATABASE_URL'));
        $hostname = $dbopts['host'];
        $username = $dbopts['user'];
        $password = $dbopts['pass'];
        $database = ltrim($dbopts['path'], '/');

        try {
            $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            return "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
