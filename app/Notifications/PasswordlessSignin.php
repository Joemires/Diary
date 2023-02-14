<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Grosv\LaravelPasswordlessLogin\PasswordlessLogin;

class PasswordlessSignin extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        info(PasswordlessLogin::forUser($notifiable)->generate());
        return (new MailMessage)
                    ->subject('Log in to ' . config('app.name'))
                    ->line('Click the button below to securely log in.')
                    ->line('This magic link will expire in 20 minutes.')
                    ->action('Log in to ' . config('app.name'), PasswordlessLogin::forUser($notifiable)->generate())
                    ->line('Confirming this request will securely log you in using ' . $notifiable->email);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
