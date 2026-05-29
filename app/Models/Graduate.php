<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Area;
use App\Models\Title;

class Graduate extends Model
{
    public function companies()
    {
        return $this->belongsToMany(Company::class, 'companygraduate');
    }

    public function areas()
    {
        return $this->belongsToMany(Area::class, 'areagraduate');
    }

    public function scopeByCompany($query, $companyId)
    {
        return $query->where('company_id', $companyId);
    }

    public function scopeByArea($query, $areaId)
    {
        return $query->where('area_id', $areaId);
    }

    public function scopeByTitle($query, $titleId)
    {
        return $query->where('title_id', $titleId);
    }
    }





