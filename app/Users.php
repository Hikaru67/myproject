<?php

namespace App;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed fullName
 * @property mixed birthday
 * @property mixed email
 * @property mixed phoneNumber
 * @property mixed job
 * @property mixed avatar
 * @property mixed facebook
 * @property mixed gender
 * @property mixed country
 * @property mixed role
 * @property mixed status
 * @method static create(array $array)
 */
class Users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true;
    protected $fillable = [
        'fullName',
        'birthday',
        'email',
        'phoneNumber',
        'job',
        'avatar',
        'facebook',
        'gender',
        'country',
        'role',
        'status',
    ];
    protected $primaryKey = 'id';
    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password',
//        'remember_token',
//    ];
//
//    /**
//     * The attributes that should be cast to native types.
//     *
//     * @var array
//     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];

}
