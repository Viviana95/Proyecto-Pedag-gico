<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

        public function means($id , Mean $mean){
            Format::find($id)->means()->sync([ $mean->id]);
            return $this->belongsToMany(Mean::class)->withPivot('format_id');
        }

    }
