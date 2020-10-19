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
        $createdAdminUsers = factory(AdminUsers::class, 10)->create();
        $this->command->info('Admin Users created!');
        $createdAdminUsers->each(function ($adminUser) {
            $this->command->info("Creating Teams for user {$adminUser->id}...");
            $createdAdminUserTeams = factory(Team::class, 5)->create();
            $createdAdminUserTeams->each(function ($team) use ($adminUser) {
                $this->command->info("Team {$team->id} for user {$adminUser->id} created!");
                $adminUser->teams()->attach($team, [
                    'role' => 'test',
                ]);
            });
        });
    }
}
