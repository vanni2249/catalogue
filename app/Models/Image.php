<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name','path_thumbnail','path_full'];
    
    use HasFactory;

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
