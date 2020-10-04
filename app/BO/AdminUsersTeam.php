<?php

namespace App\BO;

use App\Models\AdminUsersTeam as AdminUsersTeamModel;

class AdminUsersTeam {
    public static function get($modelObjectFrom, $modelClassTo)
    {
        return $modelObjectFrom->belongsToMany($modelClassTo)
            ->using(AdminUsersTeamModel::class)
            ->withPivot([
                'role',
            ]);
    }

    public static function sync($dataToSync, $modelRelationshipToSync)
    {
        $dataToSyncToRelateCollect = collect($dataToSync);
        $dataToSyncToRelateWithRoles = $dataToSyncToRelateCollect->mapWithKeys(function ($data) {
            return [
                $data['id'] => [
                    'role' => '',
                ],
            ];
        });
        $modelRelationshipToSync->sync(collect($dataToSyncToRelateWithRoles->toArray()));
    }
}
