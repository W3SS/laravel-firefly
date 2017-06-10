<?php

namespace AndreasElia\Forum\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discussion extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'posts_count',
        'participants_count',
        'start_post_id',
        'last_post_id',
    ];

    public function group()
    {
        return $this->belongsTo('AndreasElia\Forum\Models\Group');
    }

    public function posts()
    {
        return $this->hasMany('AndreasElia\Forum\Models\Post');
    }
}
