<?php

use App\Models\AdminUsers;
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
        factory(AdminUsers::class, 10)->create();
    }
}
