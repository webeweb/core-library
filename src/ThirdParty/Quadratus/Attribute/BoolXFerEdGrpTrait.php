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
 * X fer ed grp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerEdGrpTrait {

    /**
     * X fer ed grp.
     *
     * @var bool
     */
    private $xFerEdGrp;

    /**
     * Get the x fer ed grp.
     *
     * @return bool Returns the x fer ed grp.
     */
    public function getXFerEdGrp() {
        return $this->xFerEdGrp;
    }

    /**
     * Set the x fer ed grp.
     *
     * @param bool $xFerEdGrp The x fer ed grp.
     */
    public function setXFerEdGrp($xFerEdGrp) {
        $this->xFerEdGrp = $xFerEdGrp;
        return $this;
    }
}
