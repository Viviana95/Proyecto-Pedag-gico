<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Format extends Model
{
    use HasFactory;

    protected $fillable = [
        'format',
    ];

        public function images(): HasOne
        {
            return $this->hasOne(Image::class);
        }

        public function means(){
            return $this->belongsToMany(Mean::class);
        }

    }
