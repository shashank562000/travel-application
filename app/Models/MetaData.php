<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaData extends Model {
    protected $table='meta_data';
    use HasFactory;
    protected $guarded =[];
    public $timestamps= false;
}
