<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @method static join(string $string, string $string1, string $string2, string $string3)
 */
class Classes extends Model
{
//    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'avatar',
        'status',
        'userId',
        'subjectId',
    ];
    protected $primaryKey = 'id';
    protected $table = 'classes';
}
