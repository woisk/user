<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : BirthdayDay.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/8 Time:20:29
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Http\Listeners;


use Woisk\User\Http\Events\BirthdayEvent;
use Woisk\User\Service\BirthdayDayTrait;

class BirthdayDay
{
    use BirthdayDayTrait;

    public function handle(BirthdayEvent $event)
    {
        //格式化日期
        $birthdays =  date_format(date_create($event->birthday),"Ymd");

        $day = substr($birthdays,6,2);
        return $this->birthdayDay_Trait_firstOrCreate('day', $day);
    }

}