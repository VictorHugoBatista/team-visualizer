<?php

use App\Models\AdminUsers;
use App\Models\Team;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class AdminUsersTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        $createdAdminUsers = factory(AdminUsers::class, 10)->create();
        $this->command->info('Admin Users created!');

        $createdAdminUsers->each(function ($adminUser) use ($faker) {
            $this->command->info("Creating Teams for user {$adminUser->id}...");
            $createdAdminUserTeams = factory(Team::class, $faker->randomDigit)->create();

            $createdAdminUserTeams->each(function ($team) use ($adminUser, $faker) {
                $this->command->info("Team {$team->id} for user {$adminUser->id} created!");
                $adminUser->teams()->attach($team, [
                    'role' => $faker->jobTitle,
                ]);
            });
        });
    }
}
