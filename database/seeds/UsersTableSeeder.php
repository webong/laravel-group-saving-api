<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many users you need, defaulting to 10
        $count = (int) $this->command->ask('How many users do you need ?', 10);

        $this->command->info("Creating {$count} users.");

        // Create the Genre
        $users = factory(User::class, $count)->create();

        $this->command->info('users Created!');
    }
}
