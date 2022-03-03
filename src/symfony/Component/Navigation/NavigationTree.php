<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Component\Navigation;

use WBW\Library\Symfony\Component\AbstractNavigationNode;

/**
 * Navigation tree.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Component\Navigation
 */
class NavigationTree extends AbstractNavigationNode {

    /**
     * Constructor.
     *
     * @param string $label The label.
     */
    public function __construct(string $label) {
        parent::__construct($label);
    }
}