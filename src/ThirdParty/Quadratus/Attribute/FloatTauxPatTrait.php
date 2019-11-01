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
 * Taux pat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPatTrait {

    /**
     * Taux pat.
     *
     * @var float
     */
    private $tauxPat;

    /**
     * Get the taux pat.
     *
     * @return float Returns the taux pat.
     */
    public function getTauxPat() {
        return $this->tauxPat;
    }

    /**
     * Set the taux pat.
     *
     * @param float $tauxPat The taux pat.
     */
    public function setTauxPat($tauxPat) {
        $this->tauxPat = $tauxPat;
        return $this;
    }
}
