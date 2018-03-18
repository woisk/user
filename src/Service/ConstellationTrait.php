<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : ConstellationTrait.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/7 Time:21:41
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Service;


use Woisk\User\Model\Constellation;

trait ConstellationTrait
{
    /**
     * 取出或创建
     * @param $key
     * @param $val
     * @return mixed
     */
    public function constellation_Trait_firstOrCreate($key,$val)
    {
        $name = Constellation::firstOrCreate([$key=>$val]);
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
    public function constellation_Trait_exists($key,$val)
    {
        return Constellation::where($key,$val)->exists();
    }


    /**
     * 创建
     * @param $birthday
     * @return mixed
     */
    public function constellation_Trait_create($constellation)
    {
        $name =  Constellation::create([
            'constellation' =>$constellation
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
    public function constellation_Trait_add($constellation)
    {
        $name = Constellation::where('constellation',$constellation)->first();
        $name->count ++;
        $name->save();
        return $name;
    }
}