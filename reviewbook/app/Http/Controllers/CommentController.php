<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $books_id)
    {

        $request->validate([
            'content' => 'required'

        ]);

        $userId = Auth::id();

        $comment = new Comment;
        $comment->content = $request->input('content');
        $comment->book_id = $books_id;
        $comment->user_id = $userId;

        $comment->save();

        return redirect('/books/' . $books_id)->with('success', "Berhasil Update");
    }
}
