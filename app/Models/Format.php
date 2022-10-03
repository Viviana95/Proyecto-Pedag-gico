<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Format extends Model
{
    use HasFactory;

    protected $fillable = [
        'format',
        'file',
    ];

        public function images(): BelongsTo
        {
            return $this->belongsTo(Format::class);
        }

        public function means(){
            return $this->belongsToMany(Mean::class);
    
        }
    }
