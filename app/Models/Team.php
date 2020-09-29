<?php

namespace App\Models;

use App\BO\AdminUsersTeam;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';

    protected $fillable = [
        'title',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'resource_url',
        'name',
    ];

    public function getResourceUrlAttribute()
    {
        return url('/admin/teams/'.$this->getKey());
    }

    public function getNameAttribute()
    {
        return $this->title;
    }

    public function users()
    {
        return $this->belongsToMany(AdminUsers::class);
    }

    public function syncUsers($users)
    {
        AdminUsersTeam::sync($users, $this->users());
    }
}
