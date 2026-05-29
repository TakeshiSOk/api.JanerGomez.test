<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = ['name'];

    public function states()
    {
        return $this->hasMany(State::class, 'country_id');
    }

    public function scopeByState($query, $stateId)
    {

    return $query->where('state', $stateId);
}
    }


