<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Graduate;
class Title extends Model
{
    protected $table = 'titles';
    protected $fillable = ['name']; 

            public function graduates()
    {
        return $this->belongsToMany(Graduate::class, 'titlegraduate');
    }

    
    public function scopeByGraduate($query, $graduateId)
    {
{
    return $query->where('graduate', $graduateId);
}

    

}
}
