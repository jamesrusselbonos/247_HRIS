<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([RolesTableSeeder::class, UsersTableSeeder::class, RoleUsersTableSeeder::class, DepartmentsTableSeeder::class, StatusTableSeeder::class, 
            PositionsTableSeeder::class, LevelTableSeeder::class, JobsTableSeeder::class, LeaveTypeTableSeeder::class]);
    }
}
