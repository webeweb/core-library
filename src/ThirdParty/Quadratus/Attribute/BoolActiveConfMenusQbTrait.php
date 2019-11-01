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
 * Active conf menus qb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveConfMenusQbTrait {

    /**
     * Active conf menus qb.
     *
     * @var bool
     */
    private $activeConfMenusQb;

    /**
     * Get the active conf menus qb.
     *
     * @return bool Returns the active conf menus qb.
     */
    public function getActiveConfMenusQb() {
        return $this->activeConfMenusQb;
    }

    /**
     * Set the active conf menus qb.
     *
     * @param bool $activeConfMenusQb The active conf menus qb.
     */
    public function setActiveConfMenusQb($activeConfMenusQb) {
        $this->activeConfMenusQb = $activeConfMenusQb;
        return $this;
    }
}
