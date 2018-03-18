<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : SexController.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/18 Time:17:37
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Http\Controllers;


use Woisk\User\Service\SexTrait;

class SexController extends BaseController
{
    use SexTrait;

    /**
     * 创建性别
     * @param $sexID
     * @return mixed
     */
    public function create($sexID)
    {
        return $this->sex_Trait_find($sexID);
    }
}