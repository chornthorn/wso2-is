<?php

namespace Chornthorn\Wso2Is;

use SocialiteProviders\Manager\SocialiteWasCalled;

class Wso2IsExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param  \SocialiteProviders\Manager\SocialiteWasCalled  $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('wso2is', Provider::class);
    }
}
