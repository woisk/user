<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : RealnameController.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/7 Time:15:59
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Http\Controllers;


use Woisk\User\Service\RealnameTrait;

class RealnameController extends BaseController
{
    use RealnameTrait;

    /**
     * 真实姓名创建
     * @param $realname
     * @return mixed
     */
    public function create($realname)
    {
       return  $this->realname_Trait_firstOrCreate('realname',$realname);
    }
}