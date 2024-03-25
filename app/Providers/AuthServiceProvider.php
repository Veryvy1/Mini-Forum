<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // VerifyEmail::toMailUsing(function ( $url) {
        //     return (new MailMessage)
        //     ->subject('Email Verification')
        //     ->greeting('Hello GetForums User')
        //     ->line('Thank you for joining GetForums.')
        //     ->line('Please click the button below to verify your email address.')
        //     ->action('Verify Email', $url)
        //     ->line('If you did not register, please ignore this message.')
        //     ->line('Thank you for using our website services.')
        //     ->salutation('From, GetForums');

        // });
    }
}
