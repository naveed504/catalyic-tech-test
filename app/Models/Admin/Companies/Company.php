<?php

namespace App\Models\Admin\Companies;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'logo',
        'website',
    ];
}
