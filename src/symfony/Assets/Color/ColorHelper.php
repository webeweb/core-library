<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Color;

use WBW\Library\Symfony\Provider\ColorProviderInterface;

/**
 * Color helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Color
 */
class ColorHelper {

    /**
     * Get an identifier.
     *
     * @param ColorProviderInterface $colorProvider The color provider.
     * @return string Returns the identifier.
     */
    public static function getIdentifier(ColorProviderInterface $colorProvider): string {
        return implode(":", [$colorProvider->getDomain(), $colorProvider->getName()]);
    }
}
