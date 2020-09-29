<?php

namespace App\Models;

use App\BO\AdminUsersTeam;
use App\Models\Team;
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

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function syncTeams($teams)
    {
        AdminUsersTeam::sync($teams, $this->teams());
    }
}
