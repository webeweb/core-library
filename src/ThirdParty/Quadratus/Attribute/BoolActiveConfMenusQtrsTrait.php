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
 * Active conf menus qtrs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveConfMenusQtrsTrait {

    /**
     * Active conf menus qtrs.
     *
     * @var bool
     */
    private $activeConfMenusQtrs;

    /**
     * Get the active conf menus qtrs.
     *
     * @return bool Returns the active conf menus qtrs.
     */
    public function getActiveConfMenusQtrs() {
        return $this->activeConfMenusQtrs;
    }

    /**
     * Set the active conf menus qtrs.
     *
     * @param bool $activeConfMenusQtrs The active conf menus qtrs.
     */
    public function setActiveConfMenusQtrs($activeConfMenusQtrs) {
        $this->activeConfMenusQtrs = $activeConfMenusQtrs;
        return $this;
    }
}
