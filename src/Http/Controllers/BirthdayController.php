<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : BirthdayController.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/7 Time:20:06
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Http\Controllers;


use Woisk\User\Http\Events\BirthdayEvent;
use Woisk\User\Service\BirthdayTrait;

class BirthdayController extends BaseController
{
    use BirthdayTrait;

    public function create($birthday)
    {
        event(new BirthdayEvent($birthday));
        return $this->birthday_Trait_firstOrCreate('birthday', $birthday);
    }

}