<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Text,Card,Image};
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps=false;

    public function texts():HasMany
    {
        return $this->hasMany(Text::class);
    }
    public function cards():HasMany
    {
        return $this->hasMany(Card::class);
    }
    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }
}
