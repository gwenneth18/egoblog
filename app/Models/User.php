<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
 protected $table = 'users';
 protected $primarykey = 'id';
 protected $allowedFields = ['name','username','email','password','picture', 'bio'];
    
}
