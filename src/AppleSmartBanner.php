<?php

declare(strict_types=1);

namespace BbApp\SmartBanner\Apple;

use BbApp\SmartBanner\SmartBanner;

/**
 * Generates Apple App Store smart banner meta tags.
 */
class AppleSmartBanner extends SmartBanner
{
    protected $options;

	/**
	 * Constructs an Apple smart banner with the given options.
	 *
	 * @param AppleSmartBannerOptions $options
	 */
    public function __construct(AppleSmartBannerOptions $options)
    {
        parent::__construct($options);
    }

	/**
	 * Returns the meta tag name for Apple smart banners.
	 *
	 * @return string
	 */
    function name(): string
    {
        return "apple-itunes-app";
    }

	/**
	 * Returns the meta tag content with the App Store ID.
	 *
	 * @return string
	 */
    function content(): string
    {
        return "app-id=" . $this->options->appStoreId;
    }

	/**
	 * Generates an iOS deep link URL.
	 *
	 * @param string $path
	 * @param string|null $base_url
	 * @return string|null
	 */
    function deep_link(string $path, ?string $base_url = null): ?string
    {
        return "ios-app://" . $this->options->appStoreId . $path;
    }
}
