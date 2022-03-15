<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class Telegram extends Notification
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
        return ["telegram"];
    }
//    public function toTelegram($notifiable)
//    {
//        $url = url('/home/');
//
//        return TelegramMessage::create()
//            // Optional recipient user id.
//
//            // Markdown supported.
//            ->content("Salom Farxod qalay ishlar !!!! ")
//
//            // (Optional) Blade template for the content.
//            // ->view('notification', ['url' => $url])
//
//            // (Optional) Inline Buttons
////            ->button('View Invoice', $url)
//            ->button('Download Invoice', $url);
////            // (Optional) Inline Button with callback. You can handle callback in your bot instance
////            ->buttonWithCallback('Confirm', 'confirm_invoice ');
//    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
