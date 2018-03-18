<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : BirthdayMonth.php
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
use Woisk\User\Service\BirthdayMonthTrait;

class BirthdayMonth
{
    use BirthdayMonthTrait;

    public function handle(BirthdayEvent $event)
    {
        //格式化日期
        $birthdays =  date_format(date_create($event->birthday),"Ymd");

        $month = substr($birthdays, 4, 2);
        return $this->birthdayMonth_Trait_firstOrCreate('month', $month);
    }
}