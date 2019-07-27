<?php

/**
 * @Author: brooke
 * @Date:   2019-04-02 18:18:32
 * @Last Modified by:   brooke
 * @Last Modified time: 2019-04-02 18:25:31
 */
namespace Brooke\Notification\Channels;

use Brooke\Notification\Notification;

class SmsChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        list($temp_id, $temp_data) = $notification->toSms($notifiable);

        $notification->pushedEnd($notifiable);
    }
}
