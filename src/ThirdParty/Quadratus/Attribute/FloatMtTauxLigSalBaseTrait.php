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
 * Mt taux lig sal base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtTauxLigSalBaseTrait {

    /**
     * Mt taux lig sal base.
     *
     * @var float
     */
    private $mtTauxLigSalBase;

    /**
     * Get the mt taux lig sal base.
     *
     * @return float Returns the mt taux lig sal base.
     */
    public function getMtTauxLigSalBase() {
        return $this->mtTauxLigSalBase;
    }

    /**
     * Set the mt taux lig sal base.
     *
     * @param float $mtTauxLigSalBase The mt taux lig sal base.
     */
    public function setMtTauxLigSalBase($mtTauxLigSalBase) {
        $this->mtTauxLigSalBase = $mtTauxLigSalBase;
        return $this;
    }
}
