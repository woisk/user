<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : RealnameTrait.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/7 Time:16:00
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Service;

use Overtrue\Pinyin\Pinyin;
use Woisk\User\Model\Realname;

Trait RealnameTrait
{
    /**
     * 取出或创建
     * @param $key
     * @param $val
     * @return mixed
     */
    public function realname_Trait_firstOrCreate($key,$val)
    {
        $name =  Realname::firstOrCreate([$key=>$val]);
        $name->int_one = strtoupper(substr(pinyin_abbr($val),0,1));
        $name->count ++;
        $name->save();
        return $name;
    }


    /**
     * 获取当前ID真实姓名
     * @param $realnameID
     * @return mixed
     */
    public function realname_Trait_find($realnameID)
    {
        return Realname::find($realnameID);
    }

    /**
     * 存在 加加
     * @param $realname
     * @return mixed
     */
    public function realname_Trait_add($realname)
    {
        $name = Realname::where('realname',$realname)->first();
        $name->count ++;
        $name->save();
        return $name;
    }

    /**
     * 软删除 统计字段 减减
     * @param $realnameID
     * @return mixed
     */
    public function realname_Trait_del($realnameID)
    {
        $name = Realname::find($realnameID);
        $name->count --;
        $name->save();
        return $name;
    }

    /**
     * 真实姓名创建
     * @param $realname
     * @return mixed
     */
    public function realname_Trait_create($realname)
    {
        $name =  Realname::create([
            'realname' => $realname,
            'int_one' =>strtoupper(substr(pinyin_abbr($realname),0,1))
        ]);
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
    public function realname_Trait_exists($key,$val)
    {
        return Realname::where($key,$val)->exists();
    }


}