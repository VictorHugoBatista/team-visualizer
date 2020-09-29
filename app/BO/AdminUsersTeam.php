<?php

namespace App\BO;

class AdminUsersTeam {
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
