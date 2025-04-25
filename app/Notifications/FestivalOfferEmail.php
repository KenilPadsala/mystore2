<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FestivalOfferEmail extends Notification
{
    use Queueable;

    public $hobbies;
    public $products;
    public $totalAmount;
    public $discount;
    public $shippingAddress;
    public $deliveryTime;
    public $orderStatus;

    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->hobbies = $data['hobbies'];
        $this->products = $data['products'];
        $this->totalAmount = $data['totalAmount'];
        $this->discount = $data['discount'];
        $this->shippingAddress = $data['shippingAddress'];
        $this->deliveryTime = $data['deliveryTime'];
        $this->orderStatus = $data['orderStatus'];
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->view('emails.demo-email2', [
                'hobbies' => $this->hobbies,
                'products' => $this->products,
                'totalAmount' => $this->totalAmount,
                'discount' => $this->discount,
                'shippingAddress' => $this->shippingAddress,
                'deliveryTime' => $this->deliveryTime,
                'orderStatus' => $this->orderStatus,
            ])
            ->line('This is a festival offer email.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
