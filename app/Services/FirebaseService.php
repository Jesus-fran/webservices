<?php 

namespace App\Services;

require './vendor/autoload.php';
use Kreait\Firebase\Factory;

class FirebaseService
{
    private $firebase;
    private $db;

    public function __construct()
    {
        $this->firebase = (new Factory)->withServiceAccount('./key/sistemariego-70eeb-50b76aac9edd.json');
        $this->db = $this->firebase->createDatabase();
    }

    public function temperaturaPlanta()
    {
        $reference = $this->db->getReference('/plantas/planta1');
        $registro  = $reference->getValue();
        return $registro;
    }
}