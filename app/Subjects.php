<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
//    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'description',
        'avatar',
        'status',
        'userId',
    ];
    protected $primaryKey = 'id';
    protected $table = 'subjects';
}
