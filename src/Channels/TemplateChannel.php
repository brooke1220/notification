<?php

namespace Brooke\Notification\Channels;

use Brooke\Notification\Notification;

class TemplateChannel
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
        list($temp_id, $temp_data) = $notification->toTemplate($notifiable);

        $notification->pushedEnd($notifiable);
    }
}
