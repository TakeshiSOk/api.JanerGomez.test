<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitleGraduate extends Model
{
    protected $table = 'titlegraduate';
    protected $fillable = ['title_id', 'graduate_id'];
}
