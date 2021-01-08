<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_rqs extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'frequency',
        'durationTime',
        'targetTop',
        'wishJob',
        'completeExercise',
        'outCondition',
        'nowSkill',
        'mission',
        'userId',
        'classesId',
        'status',
    ];
    protected $primaryKey = 'id';
    protected $table = 'course_rqs';
}

