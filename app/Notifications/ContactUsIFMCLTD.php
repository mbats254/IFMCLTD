<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class ContactUsIFMCLTD extends Notification
{
    use Queueable;
    protected $admin;
    protected $contact_us;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($admin, $contact_us)
    {
        $this->contact_us = $contact_us;
        $this->admin = $admin;
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
        return (new MailMessage)
                    ->greeting('Hello '.$this->admin->name)
                    ->line(new HtmlString('A contact notification from <a href=mailto:'.$this->contact_us->email.'>'.$this->contact_us->name.'</a>'))
                    ->line(new HtmlString('Subject: <b>'.$this->contact_us->subject.'</b>'))
                    ->line(new HtmlString('Message: <b>'.$this->contact_us->message.'</b>'))
                    // ->action('Notification Action', url('/'))
                    ->line('Thank you for contacting me.!');
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
