<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Graduate;

class Area extends Model
{
    use HasFactory;

    public function graduates()
    {
        return $this->belongsToMany(Graduate::class, 'areagraduate');
    }

    public function scopeBygraduate($query, $graduateId)
    {
{
    return $query->where('graduate', $graduateId);
}
    }
}
