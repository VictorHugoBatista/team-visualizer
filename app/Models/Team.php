<?php

namespace App\Models;

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
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/teams/'.$this->getKey());
    }

    public function users()
    {
        return $this->belongsToMany(AdminUsers::class);
    }

    public function syncUsers($users)
    {
        $usersToRelateCollect = collect($users);
        $usersToRelateWithRoles = $usersToRelateCollect->mapWithKeys(function ($user) {
            return [
                $user['id'] => [
                    'role' => '',
                ],
            ];
        });
        $this->users()->sync(collect($usersToRelateWithRoles->toArray()));
    }
}
