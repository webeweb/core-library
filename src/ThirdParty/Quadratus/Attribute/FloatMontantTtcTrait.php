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
 * Montant ttc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantTtcTrait {

    /**
     * Montant ttc.
     *
     * @var float
     */
    private $montantTtc;

    /**
     * Get the montant ttc.
     *
     * @return float Returns the montant ttc.
     */
    public function getMontantTtc() {
        return $this->montantTtc;
    }

    /**
     * Set the montant ttc.
     *
     * @param float $montantTtc The montant ttc.
     */
    public function setMontantTtc($montantTtc) {
        $this->montantTtc = $montantTtc;
        return $this;
    }
}
