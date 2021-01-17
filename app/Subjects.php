<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static join(string $string, string $string1, string $string2, string $string3)
 * @method static create(array $array)
 */
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
