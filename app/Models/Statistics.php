<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'task_count'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class, 'user_id', 'user_id');
    }
    public function getTaskCountAttribute()
    {
        return Task::where('assigned_to_id', $this->user_id)->count();
    }
}
