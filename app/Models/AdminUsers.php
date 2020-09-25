<?php

namespace App\Models;

use Brackets\AdminAuth\Models\AdminUser;

class AdminUsers extends AdminUser
{
    protected $appends = [
        'full_name',
        'resource_url',
        'name',
    ];

    public function getNameAttribute()
    {
        return $this->getFullNameAttribute();
    }
}
