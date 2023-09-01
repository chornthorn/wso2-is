# WSO2 Identity Server for Laravel Socialite

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chornthorn/wso2-is.svg?style=flat-square)](https://packagist.org/packages/chornthorn/wso2-is)
[![GitHub issues-closed](https://img.shields.io/github/issues-closed/chornthorn/wso2-is.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/chornthorn/wso2-is.svg?style=flat-square)](https://packagist.org/packages/chornthorn/wso2-is)


```bash
composer require chornthorn/wso2-is
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/), then follow the provider specific instructions below.

### Add configuration to `config/services.php`

```php
'wso2is' => [
  'client_id' => env('WSO2IS_CLIENT_ID'),
  'client_secret' => env('WSO2IS_CLIENT_SECRET'),
  'redirect' => env('WSO2IS_REDIRECT_URI'),
  'base_url' => env('WSO2IS_BASE_URL'),
],
```

### Add configuration to `.env`

Login to your WSO2 Identity Server and create a new OAuth2 application. And then add the following configuration to your `.env` file.

```dotenv
WSO2IS_CLIENT_ID=your-client-id
WSO2IS_CLIENT_SECRET=your-client-secret
WSO2IS_REDIRECT_URI=https://your-callback-url
WSO2IS_BASE_URL=https://your-identity-server.com/oauth2
```

### Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

```php
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
         \Chornthorn\Wso2Is\Wso2IsExtendSocialite::class . '@handle',
    ],
];
```

### Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('wso2is')->redirect();
```

### Returned User fields

- ``id``
- ``nickname``
- ``name``
- ``email``
