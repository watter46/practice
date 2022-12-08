<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;
use App\Models\Comment;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task'
    ];

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }
}
