<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['id','first_name','last_name','email','address','standard','gender','hobbies','date_of_birth','updated_at',
    'created_at','deleted_at',];
}
