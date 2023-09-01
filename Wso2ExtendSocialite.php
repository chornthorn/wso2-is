<?php

namespace SocialiteProviders\wso2is;

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
