<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'slug'];

    protected $guarded = ['id'];

    public $timestamps = false;

    public function keys()
    {
        return $this->hasMany(KeyDeport::class);
    }
}
