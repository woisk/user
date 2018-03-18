<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : BirthdayDayTrait.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/8 Time:20:32
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Service;


use Woisk\User\Model\BirthdayDay;

trait BirthdayDayTrait
{
    /**
     * 取出或创建
     * @param $key
     * @param $val
     * @return mixed
     */
    public function birthdayDay_Trait_firstOrCreate($key,$val)
    {
        $name = BirthdayDay::firstOrCreate([$key=>$val]);
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
    public function birthdayDay_Trait_exists($key,$val)
    {
        return BirthdayDay::where($key,$val)->exists();
    }


    /**
     * 创建
     * @param $birthday
     * @return mixed
     */
    public function birthdayDay_Trait_create($day)
    {
        $name =  BirthdayDay::create([
            'day' =>$day
        ]);
        $name->count ++;
        $name->save();
        return $name;
    }


    /**
     * 增加
     * @param $birthday
     * @return mixed
     */
    public function birthdayDay_Trait_add($day)
    {
        $name = BirthdayDay::where('day',$day)->first();
        $name->count ++;
        $name->save();
        return $name;
    }
}