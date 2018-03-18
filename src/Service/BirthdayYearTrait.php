<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : BirthdayYearTrait.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/8 Time:20:32
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Service;


use Woisk\User\Model\BirthdayYear;

trait BirthdayYearTrait
{
    /**
     * 取出或创建
     * @param $key
     * @param $val
     * @return mixed
     */
    public function birthdayYear_Trait_firstOrCreate($key,$val)
    {
        $name = BirthdayYear::firstOrCreate([$key=>$val]);
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
    public function birthdayYear_Trait_exists($key,$val)
    {
        return BirthdayYear::where($key,$val)->exists();
    }


    /**
     * 创建
     * @param $birthday
     * @return mixed
     */
    public function birthdayYear_Trait_create($year)
    {
        $name = BirthdayYear::create([
            'year' =>$year
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
    public function birthdayYear_Trait_add($year)
    {
        $name = BirthdayYear::where('year',$year)->first();
        $name->count ++;
        $name->save();
        return $name;
    }
}