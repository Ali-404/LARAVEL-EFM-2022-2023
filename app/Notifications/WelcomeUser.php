<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
class WelcomeUser extends Notification
{
    public function via($notifiable)
    {
     return ['mail', 'database'];
    }
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Bienvenue !')
            ->line('Merci de votre inscription sur notre site.')
            ->action('Visitez le site', url('/'));
    }
    public function toDatabase($notifiable)
    {
        return [
        'message' => 'Bienvenue ' . $notifiable->name . ' !',
         ];
 }
}
