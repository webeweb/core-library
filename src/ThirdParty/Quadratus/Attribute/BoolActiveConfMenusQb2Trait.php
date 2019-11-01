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
 * Active conf menus qb2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveConfMenusQb2Trait {

    /**
     * Active conf menus qb2.
     *
     * @var bool
     */
    private $activeConfMenusQb2;

    /**
     * Get the active conf menus qb2.
     *
     * @return bool Returns the active conf menus qb2.
     */
    public function getActiveConfMenusQb2() {
        return $this->activeConfMenusQb2;
    }

    /**
     * Set the active conf menus qb2.
     *
     * @param bool $activeConfMenusQb2 The active conf menus qb2.
     */
    public function setActiveConfMenusQb2($activeConfMenusQb2) {
        $this->activeConfMenusQb2 = $activeConfMenusQb2;
        return $this;
    }
}
