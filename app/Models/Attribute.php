<?php

namespace App\Models;

use App\Models\AttributeName;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    
}
