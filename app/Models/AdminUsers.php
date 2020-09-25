<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class AdminUsers extends User
{
    protected $table = 'admin_users';
}
