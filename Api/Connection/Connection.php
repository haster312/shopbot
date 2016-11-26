<?php

namespace Api\Connection;
use Illuminate\Database\Capsule\Manager as Capsule;

class Connection{
    /**
     * Builder instance
     *
     * @var $driver
     */
    protected $db = null;

    public function __construct()
    {
        $this->createConnection();
    }

    private function createConnection()
    {
        $this->db = new Capsule;

        $url = "postgres://trdczucnrhrtaf:-Ck0ag6FHo_ASToRoNxzntymnT@ec2-54-243-203-232.compute-1.amazonaws.com:5432/d4fumq7k3caj6v";

        $this->db->addConnection([
            'driver'    => 'pgsql',
            'host'      => $url['host'],
            'database'  => substr($url["path"], 1),
            'username'  => $url['user'],
            'password'  => $url['pass'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        // Make this Capsule instance available globally via static methods... (optional)
        $this->db->setAsGlobal();

        $this->db->bootEloquent();
    }
}