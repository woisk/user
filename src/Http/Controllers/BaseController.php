<?php
/**
 * Created by PhpStorm.
 * AuthUser: woisk
 * Date: 2018/1/6
 * Time: 13:33
 */

namespace Woisk\User\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 全局相应函数
     * @param int $code
     * @param string $msg
     * @param string $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected  function res($code=200,$msg='ok',$data='')
    {
        return response()->json(['code'=>$code,'msg'=>$msg,'data'=>$data],200);
    }


    /**
     * 星座转换
     * @param $month
     * @param $day
     * @return string
     */
    protected function constellation_convetr($month, $day)
    {
        $data = array('摩羯', '宝瓶', '双鱼', '白羊', '金牛', '双子', '巨蟹', '狮子', '处女', '天秤', '天蝎', '射手');
        $zone = array(1222, 122, 222, 321, 421, 522, 622, 722, 822, 922, 1022, 1122, 1222);
        if ((100 * $month + $day) >= $zone[0] || (100 * $month + $day) < $zone[1]) {
            $i = 0;
        } else {
            for ($i = 1; $i < 12; $i++) {
                if ((100 * $month + $day) >= $zone[$i] && (100 * $month + $day) < $zone[$i + 1]) break;
            }
        }
        return $data[$i] . '座';
    }

    /**
     * 生肖转换
     * @param $year
     * @return mixed
     */
    protected function zodiac_convetr($year){
        $animals = array(
            '鼠', '牛', '虎', '兔', '龙', '蛇',
            '马', '羊', '猴', '鸡', '狗', '猪'
        );
        $key = ($year - 4) % 12;

        return $animals[$key];
    }

}