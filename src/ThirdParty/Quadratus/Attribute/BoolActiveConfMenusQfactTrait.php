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
 * Active conf menus qfact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveConfMenusQfactTrait {

    /**
     * Active conf menus qfact.
     *
     * @var bool
     */
    private $activeConfMenusQfact;

    /**
     * Get the active conf menus qfact.
     *
     * @return bool Returns the active conf menus qfact.
     */
    public function getActiveConfMenusQfact() {
        return $this->activeConfMenusQfact;
    }

    /**
     * Set the active conf menus qfact.
     *
     * @param bool $activeConfMenusQfact The active conf menus qfact.
     */
    public function setActiveConfMenusQfact($activeConfMenusQfact) {
        $this->activeConfMenusQfact = $activeConfMenusQfact;
        return $this;
    }
}
