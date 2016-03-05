<?php

namespace App\Mailers;

use App\User;
use Illuminate\Contracts\Mail\Mailer;

class AppMailer
{
    /**
     * The Laravel Mailer Instance
     * @var Mailer
     */
    protected $mailer;

    /**
     * The sender of The email
     * @var string
     */
    protected $from = "yuginim@gmail.com";

    /**
     * The recepient of the email
     * @var string
     */
    protected $to;

    /**
     * The view of the email
     * @var String
     */
    protected $view;

    /**
     * The data associated with the view for the email.
     * @var array
     */
    protected $data = [];

    /**
     * Create a new app mailer instance.
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Deliver the email confirmation
     * @param  User   $user
     * @return void
     */
    public function sendEmailConfirmationTo(User $user)
    {
        $this->to = $user->email;
        $this->view = 'auth.emails.confirm';
        $this->data = compact('user');

        $this->deliver();
    }

    /**
     * Deliver the email
     * @return void
     */
    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message){
            $message->from($this->from, 'Administrator')
                    ->to($this->to);
        });
    }

}
