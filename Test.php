<?php

use Brooke\Notification\Notification;


class Test extends Notification
{
    /**
     * Resource.
     *
     * @return void
     */
    protected $resource;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['template'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toTemplate($notifiable)
    {
        return [];
    }

    public function pushedEnd($notifiable)
    {

    }
}
