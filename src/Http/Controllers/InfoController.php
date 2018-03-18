<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : InfoController.php
 *----------------------------------------------------------------------
 *| 描 述 :用户信息创建
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/6 Time:15:56
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Woisk\User\Service\UserTrait;

class InfoController extends BaseController
{
    use UserTrait;

    /**
     * 用户信息验证
     * @param array $data
     * @return mixed
     */
    public function info_validator(array $data)
    {
        return Validator::make($data, [
            'realname' => 'required|string|min:2|max:20',
            'birthday' => 'required|date',
            'sex' => 'required|numeric|between:1,2'
        ]);
    }

    /**
     * 用户信息 创建
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function create(Request $request)
    {
        //参数验证
        $validator = $this->info_validator($request->all());
        if ($validator->fails()) {
            return $this->res(422, $validator->errors()->first());
        }

        //用户信息是否存在
        $sex_exists = $this->user_Trait_exists('uid', auth()->user()->uid);
        if ($sex_exists) {
            return $this->res(401, '已经创建了');
        }

        //真实姓名
        $realname = app()->make(RealnameController::class)->create($request->input('realname'));

        //性别
        $sex = app()->make(SexController::class)->create($request->input('sex'));

        //生日
        $birthday = app()->make(BirthdayController::class)->create($request->input('birthday'));

        //生肖转换
        $zodiac = app()->make(ZodiacController::class)->create($request->input('birthday'));

        //星座转换
        $constrllation = app()->make(ConstellationController::class)->create($request->input('birthday'));

        return $this->user_Trait_create(json_encode([
            'realname_id' => $realname->id,
            'sex_id' => $sex->id,
            'bithday_id' => $birthday->id,
            'zodiac_id' => $zodiac->id,
            'constrllation_id' => $constrllation->id,
        ]));
    }

}