<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AreaGraduate extends Model
{
    protected $table = 'areagraduate';
    protected $fillable = ['area_id', 'graduate_id'];
}
