<?php

use App\Models\AdminUsers;
use App\Models\Team;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class AdminUsersTeamSeeder extends Seeder
{
    private $teamsToCreate = 10;

    private $usersToCreatePerTeam = 5;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        $createdTeams = factory(Team::class, $this->teamsToCreate)->create();
        $this->command->info('Teams created!');

        $createdTeams->each(function ($team) use ($faker) {
            $this->command->info("Creating users for team id {$team->id}...");
            $createdAdminUsers = factory(AdminUsers::class, $this->usersToCreatePerTeam)->create();

            $createdAdminUsers->each(function ($adminuser) use ($team, $faker) {
                $this->command->info("User id {$adminuser->id} for team id {$team->id} created!");
                $team->users()->attach($adminuser, [
                    'role' => $faker->jobTitle,
                ]);
            });
        });
    }
}
