<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : UserTrait.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/7 Time:20:22
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Service;


use Woisk\User\Model\User;

trait UserTrait
{

    /**
     * 是否存在
     * @param $key
     * @param $val
     * @return mixed
     */
    public function user_Trait_exists($key,$val)
    {
        return User::where($key,$val)->exists();
    }
    /**
     *用户信息创建
     * @param $data
     * @return mixed
     */
    public function user_Trait_create($data)
    {
        return User::create([
            'uid' => auth()->user()->uid,
            'data' => $data
        ]);
    }
}

