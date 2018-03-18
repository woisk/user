<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : ConstellationController.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/8 Time:21:03
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Http\Controllers;


use Woisk\User\Service\ConstellationTrait;

class ConstellationController extends BaseController
{
    use ConstellationTrait;

    /**
     * 根据生日转换星座
     * @param $birthday
     * @return mixed
     */
    public function create($birthday)
    {
        $birthdays =  date_format(date_create($birthday),"Ymd");

        //截取月份
        $month = substr($birthdays, 4, 2);
        //截取天数
        $day = substr($birthdays, 6, 2);

        //星座转换
        $constellation = $this->constellation_convetr($month, $day);
        return $this->constellation_Trait_firstOrCreate('constellation', $constellation);
    }
}