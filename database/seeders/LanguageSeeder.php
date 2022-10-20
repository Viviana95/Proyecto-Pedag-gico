<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class languageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $language_1 = new Language();  
       $language_1 -> name = "HTML";
       $language_1 ->save(); 

       $language_2 = new Language();  
       $language_2 -> name = "PHP";
       $language_2 ->save();
       
       $language_3 = new Language();  
       $language_3 -> name = "JAVA";
       $language_3 ->save();

       $language_4 = new Language();  
       $language_4 -> name = "JAVASCRIPT";
       $language_4 ->save();

       $language_2 = new Language();  
       $language_2 -> name = "PYTHON";
       $language_2 ->save();

       $language = new Language();  
       $language -> name = "OTROS";
       $language ->save();

       /*  DB::table('languages')->insert([
            'name' => $languages,            

        ]); */
    }
}
