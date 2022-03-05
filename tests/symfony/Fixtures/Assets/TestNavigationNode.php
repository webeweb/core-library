<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Assets;

use WBW\Library\Symfony\Assets\AbstractNavigationNode;

/**
 * Test navigation node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Assets
 */
class TestNavigationNode extends AbstractNavigationNode {

    /**
     * Constructor.
     *
     * @param string $label The name.
     * @param string|null $icon The icon.
     * @param string|null $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct(string $label, string $icon = null, string $uri = null, string $matcher = self::MATCHER_URL) {
        parent::__construct($label, $icon, $uri, $matcher);
    }
}
