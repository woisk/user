<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : Zodiac.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/6 Time:16:42
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Model;


use Illuminate\Database\Eloquent\Model;

class Zodiac extends Model
{
    protected $connection = 'user';
    protected $table = 'user_data_zodiac';
    public $timestamps = false;
    protected $fillable = [
        'zodiac',
        'count'
    ];

}