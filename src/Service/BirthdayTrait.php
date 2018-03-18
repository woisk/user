<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : BirthdayTrait.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/7 Time:20:30
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Service;


use Woisk\User\Model\Birthday;

trait BirthdayTrait
{
    /**
     * 取出或创建
     * @param $key
     * @param $val
     * @return mixed
     */
    public function birthday_Trait_firstOrCreate($key,$val)
    {
       $name = Birthday::firstOrCreate([$key=>$val]);
        $name->count ++;
        $name->save();
        return $name;
    }

    /**
     * 是否存在
     * @param $key
     * @param $val
     * @return mixed
     */
    public function birthday_Trait_exists($key,$val)
    {
       return Birthday::where($key,$val)->exists();
    }


    /**
     * 增加
     * @param $birthday
     * @return mixed
     */
    public function birthday_Trait_add($birthday)
    {
        $name = Birthday::where('birthday',$birthday)->first();
        $name->count ++;
        $name->save();
        return $name;
    }
}