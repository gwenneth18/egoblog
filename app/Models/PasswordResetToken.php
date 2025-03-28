<?php

namespace App\Models;

use CodeIgniter\Model;

class PasswordResetToken extends Model
{
    protected $DBGroup          = "default";
    protected $table            = 'password_reset_tokens';
    protected $allowedFields    = ['email','token','created_at'];
}