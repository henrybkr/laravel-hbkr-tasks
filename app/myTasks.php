<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myTasks extends Model
{
    protected $fillable = ['title', 'completed', 'user_order', 'pinned', 'added_at', 'last_edit_at'];
}
