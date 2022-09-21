<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
            DB::table('role_user')->truncate();
            Role::truncate();
        DB::statement("SET foreign_key_checks=1");



        //user admin
        $useradmin= User::where('email','admin@admin.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin= User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin'),
        ]);

        //rol admin
        $roladmin= Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrator',
            'full-access' => 'yes'
    
        ]);

         //rol Registered User
         $roluser= Role::create([
            'name' => 'Registered User',
            'slug' => 'registereduser',
            'description' => 'Registered User',
            'full-access' => 'no'
    
        ]);
        
        //table role_user
        $useradmin->roles()->sync([ $roladmin->id ]);
        /* Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrador',
            'full-access' => 'yes',
            
        ]);
            
        Role::create([
            'name' => 'User',
            'slug' => 'user',
            'description' => 'Usuario',
            'full-access' => 'no',
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '12345678',
        ]); */
        
        /* User::factory(50)->create();
        $roles = ['user', 'admin'];
        foreach ($roles as $role){
            Role::create(['role' => $role]);
        }

            foreach (User::all() as $user){
                $roles = Role::take(1)->pluck('id');
                $user->roles()->attach($roles);
            }
            
        $events = [];
        foreach ($events as $event){
            Event::create(['event' => $event]);
        } */
    }
}
