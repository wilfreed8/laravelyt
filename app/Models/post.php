<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{

    protected $fillable = [
        'title',
        'slug',
        'Content'
    ];
    use HasFactory;
    //
    public function categorie():BelongsTo{
        return $this->belongsTo(categorie::class);
    }
}
