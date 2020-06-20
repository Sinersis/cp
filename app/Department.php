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
        return $this
            ->belongsToMany(
                KeyDeport::class,
                'department_key_deport',
                'department_id',
                'key_deport_id'
            );
    }
}
