<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : BirthdayYear.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/8 Time:20:27
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Http\Listeners;


use Woisk\User\Http\Events\BirthdayEvent;
use Woisk\User\Service\BirthdayYearTrait;

class BirthdayYear
{
    use BirthdayYearTrait;

    public function handle(BirthdayEvent $event)
    {
        //格式化日期
        $birthdays =  date_format(date_create($event->birthday),"Ymd");

        $year = substr($birthdays, 0, 4);
        return $this->birthdayYear_Trait_firstOrCreate('year', $year);
    }
}