<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : BirthdayMonthTrait.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/8 Time:20:32
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Service;


use Woisk\User\Model\BirthdayMonth;

trait BirthdayMonthTrait
{
    /**
     * 取出或创建
     * @param $key
     * @param $val
     * @return mixed
     */
    public function birthdayMonth_Trait_firstOrCreate($key,$val)
    {
        $name = BirthdayMonth::firstOrCreate([$key=>$val]);
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
    public function birthdayMonth_Trait_exists($key,$val)
    {
        return BirthdayMonth::where($key,$val)->exists();
    }


    /**
     * 创建
     * @param $birthday
     * @return mixed
     */
    public function birthdayMonth_Trait_create($month)
    {
        $name =  BirthdayMonth::create([
            'month' =>$month
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
    public function birthdayMonth_Trait_add($month)
    {
        $name = BirthdayMonth::where('month',$month)->first();
        $name->count ++;
        $name->save();
        return $name;
    }
}