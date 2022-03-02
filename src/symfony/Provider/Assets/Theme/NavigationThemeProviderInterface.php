<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Provider\Assets\Theme;

use WBW\Library\Symfony\Provider\Assets\ThemeProviderInterface;
use WBW\Library\Symfony\Assets\Navigation\NavigationTree;

/**
 * Navigation theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Provider\Assets\Theme
 */
interface NavigationThemeProviderInterface extends ThemeProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.provider.assets.theme.navigation";

    /**
     * Get the tree.
     *
     * @return NavigationTree Returns the tree.
     */
    public function getTree(): NavigationTree;
}
