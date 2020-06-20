<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyDeport extends Model
{
    protected $fillable = ['name', 'slug'];

    protected $guarded = ['id'];

    public $timestamps = false;

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
