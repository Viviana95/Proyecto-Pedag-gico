<?php

namespace Database\Seeders;

use App\Models\Lenguage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LenguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $lenguage_1 = new Lenguage();  
       $lenguage_1 -> name = "HTML";
       $lenguage_1 ->save(); 

       $lenguage_2 = new Lenguage();  
       $lenguage_2 -> name = "PHP";
       $lenguage_2 ->save();
       
       $lenguage_2 = new Lenguage();  
       $lenguage_2 -> name = "JAVA";
       $lenguage_2 ->save();

       /*  DB::table('lenguages')->insert([
            'name' => $lenguages,            

        ]); */
    }
}
