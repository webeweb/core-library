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
 * Prix unit base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixUnitBaseTrait {

    /**
     * Prix unit base.
     *
     * @var float
     */
    private $prixUnitBase;

    /**
     * Get the prix unit base.
     *
     * @return float Returns the prix unit base.
     */
    public function getPrixUnitBase() {
        return $this->prixUnitBase;
    }

    /**
     * Set the prix unit base.
     *
     * @param float $prixUnitBase The prix unit base.
     */
    public function setPrixUnitBase($prixUnitBase) {
        $this->prixUnitBase = $prixUnitBase;
        return $this;
    }
}
