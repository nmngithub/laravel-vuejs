<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = "Companies";
    public $timestamps = false;
    protected $fillable = [
        'id','name','email','logo','website'
    ];
    protected $primaryKey = 'id';
}
