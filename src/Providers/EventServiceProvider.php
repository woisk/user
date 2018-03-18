<?php
/**
 *----------------------------------------------------------------------
 *| 文件名 : EventServiceProvider.php
 *----------------------------------------------------------------------
 *| 描 述 :
 *----------------------------------------------------------------------
 *| Author: 栗枫林  Date:2018/3/8 Time:20:01
 *----------------------------------------------------------------------
 *| Email : bolelin@126.com  QQ: 364956690
 *----------------------------------------------------------------------
 */

namespace Woisk\User\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Woisk\User\Http\Events\BirthdayEvent' =>[
            'Woisk\User\Http\Listeners\BirthdayYear',
            'Woisk\User\Http\Listeners\BirthdayMonth',
            'Woisk\User\Http\Listeners\BirthdayDay'
        ]
    ];

    public function boot()
    {
        parent::boot();
    }

}