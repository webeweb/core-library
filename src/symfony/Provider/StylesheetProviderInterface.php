<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider;

/**
 * Stylesheet provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider
 */
interface StylesheetProviderInterface extends ProviderInterface {

    /**
     * Tag name.
     *
     * @var string
     */
    const STYLESHEET_PROVIDER_TAG_NAME = "wbw.core.provider.stylesheet";

    /**
     * Get the stylesheets.
     *
     * @return array Returns the stylesheets.
     */
    public function getStylesheets(): array;
}
