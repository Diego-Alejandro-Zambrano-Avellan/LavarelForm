<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $table= 'productos';
    public $timestamps= false;
    protected $fillable = ['producto','precio','cantidad'];
}
