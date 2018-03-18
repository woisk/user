<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : AuthUser.php.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/6 Time:16:28
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Model;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'user';
    protected $table = 'user';
    protected $fillable = [
        'uid',
        'data',
        'data_v'
    ];

}