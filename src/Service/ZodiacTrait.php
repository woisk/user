<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : ZodiacTrait.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/7 Time:20:35
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Service;


use Woisk\User\Model\Zodiac;

trait ZodiacTrait
{
    /**
     * 取出或创建
     * @param $key
     * @param $val
     * @return mixed
     */
    public function zodiac_Trait_firstOrCreate($key,$val)
    {
        $name = Zodiac::firstOrCreate([$key=>$val]);
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
    public function zodiac_Trait_exists($key,$val)
    {
        return Zodiac::where($key,$val)->exists();
    }


    /**
     * 创建
     * @param $birthday
     * @return mixed
     */
    public function zodiac_Trait_create($zodiac)
    {
        $name =  Zodiac::create([
            'zodiac' =>$zodiac
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
    public function zodiac_Trait_add($zodiac)
    {
        $name = Zodiac::where('zodiac',$zodiac)->first();
        $name->count ++;
        $name->save();
        return $name;
    }
}