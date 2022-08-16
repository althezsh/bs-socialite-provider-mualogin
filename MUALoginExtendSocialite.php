<?php

namespace Althezsh\BsSocialiteProviderMUALogin;

use SocialiteProviders\Manager\SocialiteWasCalled;

class MUALoginExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(mualogin', __NAMESPACE__.'\Provider');
    }
}
