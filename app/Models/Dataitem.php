<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataitem extends Model
{
    use HasFactory;

    protected $fillable = ['value1', 'value2', 'inaccuracy'];
}
