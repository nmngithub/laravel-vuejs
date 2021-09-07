<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "Employees";
    public $timestamps = false;
    protected $fillable = [
        'id','firstname','lastname','company_id','email','phone'
    ];
    protected $primaryKey = 'id';
}
