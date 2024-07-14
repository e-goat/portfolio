<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'comment_id',
        'user_id',
        'content',
        'approved',
        'approved_at',
        'approved_by',
    ];

    /**
     * Get the comment that owns the reply.
     */
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function isApproved(): bool
    {
        return $this->approved;
    }

    public function post()
    {
        return $this->comment->post();
    }
}
