<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ComplainQuestionSuggestionNotification extends Notification
{
    use Queueable;
    protected $admin;
    protected $message;
    protected $field;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($admin,$message,$field)
    {
        $this->admin = $admin;
        $this->message = $message;
        $this->field = $field;
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
        // $message = $this->message;
        return (new MailMessage)
                    ->greeting('Hello '.$this->admin->name)
                    ->line('A '.$this->field. ' has been sent from the Home Page.')
                    ->line( $this->message)                    
                    // ->action('Notification Action', url('/'))
                    ->line('Thank you');
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
