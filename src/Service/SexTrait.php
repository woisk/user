<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : SexTraitTrait.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/6 Time:18:46
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Service;


use Woisk\User\Model\Sex;

trait SexTrait
{
    /**
     * 是否存在
     * @param $key
     * @param $val
     * @return mixed
     */
    public function sex_Trait_exists($key,$val)
    {
        return Sex::where($key, '=', $val)->exists();

    }

    /**
     * 性别统计增加 加加
     * @param $id
     * @return mixed
     */
    public function sex_Trait_find($sexID)
    {
        $sex = Sex::find($sexID);
        $sex->count++;
        $sex->save();
        return $sex;
    }

    /**
     * 性别软删除 减减
     * @param $id
     * @return mixed
     */
    public function sex_Trait_del($id)
    {
        $sex = Sex::find($id);
        $sex->count++;
        $sex->save();
        return $sex;
    }



}