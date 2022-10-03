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
        $imagelink->save();

        $imagefile = new Image();
        $imagefile->image = './assets/archivo.png';
        $imagefile->save();

        $imagevideo = new Image();
        $imagevideo->image = './assets/play.png';
        $imagevideo->save();

        // $imagelink->formats()->sync([ $formatlink->id = '1']);
        // $imagefile->formats()->sync([ $formatfile->id = '2']);
        // $imagevideo->formats()->sync([ $formatvideo->id = '3']);
    }
}
