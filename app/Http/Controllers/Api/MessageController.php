<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function getMessage()
    {
        $message = Message::where('is_read', 0)->get();
        return response()->json($message);
    }

    public function markAsRead($id)
    {
        $message = Message::where('id', $id)->update([
            'is_read' => 1
        ]);
        return response()->json($message);
    }

    public function markAllAsRead()
    {
        $message = Message::where('is_read', 0)->update([
            'is_read' => 1
        ]);
        return response()->json($message);
    }
}
