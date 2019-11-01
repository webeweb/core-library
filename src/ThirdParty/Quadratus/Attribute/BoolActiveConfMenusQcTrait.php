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
 * Active conf menus qc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveConfMenusQcTrait {

    /**
     * Active conf menus qc.
     *
     * @var bool
     */
    private $activeConfMenusQc;

    /**
     * Get the active conf menus qc.
     *
     * @return bool Returns the active conf menus qc.
     */
    public function getActiveConfMenusQc() {
        return $this->activeConfMenusQc;
    }

    /**
     * Set the active conf menus qc.
     *
     * @param bool $activeConfMenusQc The active conf menus qc.
     */
    public function setActiveConfMenusQc($activeConfMenusQc) {
        $this->activeConfMenusQc = $activeConfMenusQc;
        return $this;
    }
}
