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
 * Active conf menus qp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveConfMenusQpTrait {

    /**
     * Active conf menus qp.
     *
     * @var bool
     */
    private $activeConfMenusQp;

    /**
     * Get the active conf menus qp.
     *
     * @return bool Returns the active conf menus qp.
     */
    public function getActiveConfMenusQp() {
        return $this->activeConfMenusQp;
    }

    /**
     * Set the active conf menus qp.
     *
     * @param bool $activeConfMenusQp The active conf menus qp.
     */
    public function setActiveConfMenusQp($activeConfMenusQp) {
        $this->activeConfMenusQp = $activeConfMenusQp;
        return $this;
    }
}
