<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myTasks extends Model
{
    protected $fillable = ['title', 'description', 'img_url', 'due_date_time', 'completed', 'standard_order', 'pinned_order', 'pinned'];
}
