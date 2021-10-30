<?php
namespace App\Models;
use CodeIgniter\Model;

class M_Login extends Model
{
    protected $table            = 'admin';
    protected $allowedFields    = [
        'id',
        'username',
        'password',
        'created_at'
    ];
}