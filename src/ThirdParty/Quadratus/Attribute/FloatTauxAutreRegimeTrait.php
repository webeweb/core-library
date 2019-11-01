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
 * Taux autre regime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxAutreRegimeTrait {

    /**
     * Taux autre regime.
     *
     * @var float
     */
    private $tauxAutreRegime;

    /**
     * Get the taux autre regime.
     *
     * @return float Returns the taux autre regime.
     */
    public function getTauxAutreRegime() {
        return $this->tauxAutreRegime;
    }

    /**
     * Set the taux autre regime.
     *
     * @param float $tauxAutreRegime The taux autre regime.
     */
    public function setTauxAutreRegime($tauxAutreRegime) {
        $this->tauxAutreRegime = $tauxAutreRegime;
        return $this;
    }
}
