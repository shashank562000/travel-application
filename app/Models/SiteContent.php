<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps=false;
    public function casts()
    {
        return [
            'data'=>'array'
        ];
    }
}
