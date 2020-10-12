<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AdminUsersTeam extends Pivot
{
    public static function get($modelObjectFrom, $modelClassTo)
    {
        return $modelObjectFrom->belongsToMany($modelClassTo)
            ->using(self::class)
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
                    'role' => isset($data['role']) && $data['role'] ? $data['role'] : '',
                ],
            ];
        });
        $modelRelationshipToSync->sync($dataToSyncToRelateWithRoles->toArray());
    }
}
