<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'staff']);
        Role::create(['name'=>'client']);
        $users = \App\Models\User::factory(10)->create();

        foreach($users as $user){
        $user->assignRole('client');
        }

        $userAdmin = \App\Models\User::factory()->create([
            'name' =>'Bernardo',
            'email' => 'matabernardo2@gmail.com',
            'password' => '2016870Laravel'
        ]);
        $userAdmin->assignRole('admin');

        $userStaff = \App\Models\User::factory()->create([
            'name' =>'Bernardo1',
            'email' => 'matabernardo02@gmail.com',
            'password' => 'Laravel2016870'
        ]);
        $userStaff->assignRole('staff');

    $this->call(OpeningHoursSeeder::class);
    $this->call(ServicesSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
