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
 * Montant plein trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantPleinTrait {

    /**
     * Montant plein.
     *
     * @var float
     */
    private $montantPlein;

    /**
     * Get the montant plein.
     *
     * @return float Returns the montant plein.
     */
    public function getMontantPlein() {
        return $this->montantPlein;
    }

    /**
     * Set the montant plein.
     *
     * @param float $montantPlein The montant plein.
     */
    public function setMontantPlein($montantPlein) {
        $this->montantPlein = $montantPlein;
        return $this;
    }
}
