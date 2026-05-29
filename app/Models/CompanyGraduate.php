<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyGraduate extends Model
{
    protected $table = 'companygraduate';
    protected $fillable = ['company_id', 'graduate_id'];
}
