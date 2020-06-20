<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyDeport extends Model
{
    protected $fillable = ['name', 'slug'];

    protected $guarded = ['id'];

    public $timestamps = false;

    public function departments()
    {
        return $this
            ->belongsToMany(
                Department::class,
                'department_key_deport',
                'key_deport_id',
                'department_id'
            );
    }
}
