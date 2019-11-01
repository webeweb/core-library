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
 * Active conf menus qgi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveConfMenusQgiTrait {

    /**
     * Active conf menus qgi.
     *
     * @var bool
     */
    private $activeConfMenusQgi;

    /**
     * Get the active conf menus qgi.
     *
     * @return bool Returns the active conf menus qgi.
     */
    public function getActiveConfMenusQgi() {
        return $this->activeConfMenusQgi;
    }

    /**
     * Set the active conf menus qgi.
     *
     * @param bool $activeConfMenusQgi The active conf menus qgi.
     */
    public function setActiveConfMenusQgi($activeConfMenusQgi) {
        $this->activeConfMenusQgi = $activeConfMenusQgi;
        return $this;
    }
}
