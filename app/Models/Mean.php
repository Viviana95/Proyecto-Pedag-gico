<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mean extends Model
{
    use HasFactory;
    protected $fillable = ['title','image','lenguage', 'format', 'file'];
    
    public function users(){
        return $this->belongsToMany(User::class);
        
    }

    public function formats($id, Format $format){
        Mean::find($id)->formats()->sync([ $format->id]);
        return $this->belongsToMany(Format::class);

    }
}
