<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Menu visible trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMenuVisibleTrait {

    /**
     * Menu visible.
     *
     * @var bool
     */
    private $menuVisible;

    /**
     * Get the menu visible.
     *
     * @return bool Returns the menu visible.
     */
    public function getMenuVisible() {
        return $this->menuVisible;
    }

    /**
     * Set the menu visible.
     *
     * @param bool $menuVisible The menu visible.
     */
    public function setMenuVisible($menuVisible) {
        $this->menuVisible = $menuVisible;
        return $this;
    }
}
