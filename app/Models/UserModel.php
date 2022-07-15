<?php

namespace App\Models;

use App\Services\FirebaseService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    private $email;
    private $displayName;
    private static $service;

    public function __construct($email, $displayName)
    {
        $this->email = $email;
        $this->displayName = $displayName;
    }


    public static function getUser($email, $password)
    {
        $service = new FirebaseService();
        $result = $service->signIn($email, $password);
        return $result;
    }

}
