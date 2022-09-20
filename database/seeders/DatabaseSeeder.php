<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
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
            'image' => 'no',
            'score' => '100',
        ]);

        //rol admin
        $roladmin=Role::create([
            'roles' => 'Admin',
    
        ]);

         //rol User
         $roluser=Role::create([
            'roles' => 'User',
    
        ]);
        
        //table role_user
        $useradmin->roles()->sync([ $roladmin->id ]);
    }
}
