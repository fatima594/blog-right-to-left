<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(CommentRequest $request, $postId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        Comment::create([
            'post_id' => $postId,
            'name' => $request->name,
            'body' => $request->body,
        ]);

        return redirect()->back()->with('success', 'تم إضافة تعليقك بنجاح.');
    }
}
