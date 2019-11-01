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
 * Px unit a editer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPxUnitAEditerTrait {

    /**
     * Px unit a editer.
     *
     * @var bool
     */
    private $pxUnitAEditer;

    /**
     * Get the px unit a editer.
     *
     * @return bool Returns the px unit a editer.
     */
    public function getPxUnitAEditer() {
        return $this->pxUnitAEditer;
    }

    /**
     * Set the px unit a editer.
     *
     * @param bool $pxUnitAEditer The px unit a editer.
     */
    public function setPxUnitAEditer($pxUnitAEditer) {
        $this->pxUnitAEditer = $pxUnitAEditer;
        return $this;
    }
}
