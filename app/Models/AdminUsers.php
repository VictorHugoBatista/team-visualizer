<?php

namespace App\Models;

use App\Models\AdminUsersTeam;
use App\Models\Team;
use Brackets\AdminAuth\Models\AdminUser;
use Spatie\MediaLibrary\Models\Media;

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
        return AdminUsersTeam::get($this, Team::class);
    }

    public function media()
    {
        return $this->belongsTo(Media::class, 'id', 'model_id');
    }

    public function syncTeams($teams)
    {
        AdminUsersTeam::sync($teams, $this->teams());
    }
}
