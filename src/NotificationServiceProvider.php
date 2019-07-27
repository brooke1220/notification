<?php

namespace Brooke\Notification;

use think\App;
use think\Request;


class NotificationServiceProvider
{
    public static function register(App $app, Request $request)
    {
        $app->bindTo(ChannelManager::class, function () use ($app){
            return new ChannelManager($app);
        });

        $app->bindTo([
            Contracts\Dispatcher::class => ChannelManager::class,
            Contracts\Factory::class => ChannelManager::class
        ]);
    }
}
