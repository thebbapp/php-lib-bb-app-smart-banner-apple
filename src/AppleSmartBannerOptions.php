<?php

declare(strict_types=1);

namespace BbApp\SmartBanner\Apple;

use BbApp\SmartBanner\SmartBannerOptions;

/**
 * Configuration options for Apple smart banner.
 */
class AppleSmartBannerOptions extends SmartBannerOptions
{
    public $appStoreId;

	/**
	 * Constructs Apple smart banner options with the App Store ID.
	 *
	 * @param string $appStoreId
	 */
    public function __construct(string $appStoreId)
    {
        $this->appStoreId = $appStoreId;
        parent::__construct();
    }
}
