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
 * Active conf menus qprop trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveConfMenusQpropTrait {

    /**
     * Active conf menus qprop.
     *
     * @var bool
     */
    private $activeConfMenusQprop;

    /**
     * Get the active conf menus qprop.
     *
     * @return bool Returns the active conf menus qprop.
     */
    public function getActiveConfMenusQprop() {
        return $this->activeConfMenusQprop;
    }

    /**
     * Set the active conf menus qprop.
     *
     * @param bool $activeConfMenusQprop The active conf menus qprop.
     */
    public function setActiveConfMenusQprop($activeConfMenusQprop) {
        $this->activeConfMenusQprop = $activeConfMenusQprop;
        return $this;
    }
}
