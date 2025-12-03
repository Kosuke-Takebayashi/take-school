<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Lesson;
use App\Policies\LessonPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Lesson::class => LessonPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
