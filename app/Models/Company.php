<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Graduate;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['name', 'address', 'city_id'];

    public function graduates()
    {
        return $this->belongsToMany(Graduate::class, 'companygraduate');
    }



    public function scopeByCompany($query, $graduateId)
    {

{
    return $query->where('graduate', $graduateId);
}
    }
}

