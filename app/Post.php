<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ 'title', 'body' ];

    protected $guarded = ['id', 'updated_at', 'created_at', 'initiator_id'];

    public function tags()
    {
        return $this
            ->belongsToMany(
                Tag::class,
                'post_tag',
                'post_id',
                'tag_id'
            );
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
