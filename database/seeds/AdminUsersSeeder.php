<?php

use App\Models\AdminUsers;
use App\Models\Team;
use Illuminate\Database\Seeder;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AdminUsers::class, 10)->create()->each(function ($adminUser) {
            factory(Team::class, 5)->create()->each(function ($team) use ($adminUser) {
                $adminUser->teams()->attach($team, [
                    'role' => 'test',
                ]);
            });
        });
    }
}
