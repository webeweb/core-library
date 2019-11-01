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
 * Prix unit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixUnitTrait {

    /**
     * Prix unit.
     *
     * @var float
     */
    private $prixUnit;

    /**
     * Get the prix unit.
     *
     * @return float Returns the prix unit.
     */
    public function getPrixUnit() {
        return $this->prixUnit;
    }

    /**
     * Set the prix unit.
     *
     * @param float $prixUnit The prix unit.
     */
    public function setPrixUnit($prixUnit) {
        $this->prixUnit = $prixUnit;
        return $this;
    }
}
