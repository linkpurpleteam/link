<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NuevaSolicitud extends Notification
{
    use Queueable;

    
    public $id_oferta;
    public $nombre_oferta;
    public $usuario_id;
    public $usuario_numero;

    public function __construct($id_oferta, $nombre_oferta, $usuario_id, $user_numero)
    {
        $this->id_oferta = $id_oferta;
        $this->nombre_oferta = $nombre_oferta;
        $this->usuario_id = $usuario_id;
        $this->usuario_numero = $user_numero;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    /*public function toMail(object $notifiable): MailMessage
    {
        $url = url('/notificaciones/' . $this->id_oferta);

        return (new MailMessage)
                    ->line('has recibido una nueva solicitud.')
                    ->line('La Solicitud es:' . $this->nombre_oferta)
                    ->action('Ver notificaciones', $url)
                    ->line('Gracias por utilizar Link');
    }*/


    //Almacena las notificaciones en la DB  
   public function toDatabase($notifiable)
   {
        return [
            'id_oferta' => $this->id_oferta,
            'nombre_oferta' => $this->nombre_oferta,
            'usuario_id' => $this->usuario_id,
            'usuario_numero' => $this->usuario_numero

        ];
   }
}
