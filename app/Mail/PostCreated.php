<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Post;//Per poter passare come argomento nel costruttore il $post di tipo Post

class PostCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $post = null;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        //Se ci serve una classe dovremmo istanziarla qui dentro per poi utilizzarla all'interno della build con il $this. Fare cioè una iniezione di dipendenza scrivendo:
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $post = $this->post;

        return $this->view('mail.post-created', compact('post'));
    }
}
