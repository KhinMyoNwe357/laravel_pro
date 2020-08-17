<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CategoriesStored extends Mailable
{
    use Queueable, SerializesModels;

    public $category;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($category)
    {
        $this->category = $category;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('category.category');
    }
}
