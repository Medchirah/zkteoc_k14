<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

       $user1= User::factory()->create([
             'name' => 'Time ',
             'email' => 'time@time.com',
         ]);
         $user2= User::factory()->create([
            'name' => 'employe ',
            'email' => 'employe@employe.com',
        ]);
        $user3= User::factory()->create([
            'name' => 'user ',
            'email' => 'user@user.com',
        ]);
        $user4= User::factory()->create([
            'name' => 'report ',
            'email' => 'report@report.com',
        ]);
        $user5= User::factory()->create([
            'name' => 'device ',
            'email' => 'device@device.com',
        ]);
         
         $role1 = Role::create(['name' => 'shifttime']);
         $user1->assignRole($role1);
         $role2= Role::create(['name' => 'gestionEmploye']);
         $user2->assignRole($role2);
         $role3= Role::create(['name' => 'gestionUser']);
         $user3->assignRole($role3);
         $role4= Role::create(['name' => 'Repport']);
         $user4->assignRole($role4);
         $role5= Role::create(['name' => 'Device']);
         $user5->assignRole($role5);


    }
}
