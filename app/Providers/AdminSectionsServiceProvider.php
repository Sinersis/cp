<?php

namespace App\Providers;

use App\Comments;
use App\Department;
use App\KeyDeport;
use App\Post;
use App\Tag;
use App\User;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        User::class => 'App\Admin\Sections\User',
        Department::class => 'App\Admin\Sections\Department',
        Post::class => 'App\Admin\Sections\Post',
        Tag::class => 'App\Admin\Sections\Tag',
        KeyDeport::class => 'App\Admin\Sections\KeyDeport',
        Comments::class => 'App\Admin\Sections\Comments',
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
