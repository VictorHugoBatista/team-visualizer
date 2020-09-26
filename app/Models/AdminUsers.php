<?php

namespace App\Models;

use Brackets\AdminAuth\Models\AdminUser;
use App\Models\Team;

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

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
