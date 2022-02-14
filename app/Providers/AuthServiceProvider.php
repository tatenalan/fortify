<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->registerPolicies();

        // VerifyEmail::toMailUsing(function ($notifiable, $url) {
        //     // dd($notifiable, $url);
        //     return (new MailMessage)
        //         ->subject('Verifica tu cuenta')
        //         ->line('Haz click en el botón de abajo para verificar tu cuenta.')
        //         ->action('Activa tu cuenta', $url);
        // });
    }
}
