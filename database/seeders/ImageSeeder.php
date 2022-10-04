<?php

namespace Database\Seeders;

use App\Models\Format;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formatlink = new Format();
        $formatlink->format = 'link';
        $formatlink->save();

        $formatfile = new Format();
        $formatfile->format = 'file';
        $formatfile->save();

        $formatvideo = new Format();
        $formatvideo->format = 'video';
        $formatvideo->save();

        $imagelink = new Image();
        $imagelink->image = './assets/enlace.png';
        $imagelink->format_id = $formatlink->id;
        $imagelink->save();

        $imagefile = new Image();
        $imagefile->image = './assets/archivo.png';
        $imagefile->format_id = $formatfile->id;
        $imagefile->save();

        $imagevideo = new Image();
        $imagevideo->image = './assets/play.png';
        $imagevideo->format_id = $formatvideo->id;
        $imagevideo->save();

    }
}
