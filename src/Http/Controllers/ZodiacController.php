<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : ZodiacController.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/8 Time:20:58
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Http\Controllers;


use Woisk\User\Service\ZodiacTrait;

class ZodiacController extends BaseController
{
    use ZodiacTrait;

    /**
     * 生肖转换-创建
     * @param $birthday
     * @return mixed
     */
    public function create($birthday)
    {
        $birthdays =  date_format(date_create($birthday),"Ymd");

        //截取生日当中的年份
        $year = substr($birthdays, 0, 4);

        //根据年份-生肖转换
        $zodiac = $this->zodiac_convetr($year);

        return $this->zodiac_Trait_firstOrCreate('zodiac', $zodiac);
    }
}