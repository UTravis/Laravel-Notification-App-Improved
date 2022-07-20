<?php

namespace App\Http\Controllers;

use App\Events\PostMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $message = new Message();
        $message->message = Random::generate(20);
        $message->user_id = 1;
        $message->save();

        event(new PostMessage($message));
    }
}
