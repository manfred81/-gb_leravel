<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Source extends Model
{
    use HasFactory;

    protected $table = 'sources';

    protected $fillable = ['title', 'url'];

    //relations
    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'source_id', 'id');
    }
}
