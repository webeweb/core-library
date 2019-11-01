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
 * Plafond autre regime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondAutreRegimeTrait {

    /**
     * Plafond autre regime.
     *
     * @var float
     */
    private $plafondAutreRegime;

    /**
     * Get the plafond autre regime.
     *
     * @return float Returns the plafond autre regime.
     */
    public function getPlafondAutreRegime() {
        return $this->plafondAutreRegime;
    }

    /**
     * Set the plafond autre regime.
     *
     * @param float $plafondAutreRegime The plafond autre regime.
     */
    public function setPlafondAutreRegime($plafondAutreRegime) {
        $this->plafondAutreRegime = $plafondAutreRegime;
        return $this;
    }
}
