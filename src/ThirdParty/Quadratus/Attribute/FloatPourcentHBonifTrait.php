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
 * Pourcent h bonif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentHBonifTrait {

    /**
     * Pourcent h bonif.
     *
     * @var float
     */
    private $pourcentHBonif;

    /**
     * Get the pourcent h bonif.
     *
     * @return float Returns the pourcent h bonif.
     */
    public function getPourcentHBonif() {
        return $this->pourcentHBonif;
    }

    /**
     * Set the pourcent h bonif.
     *
     * @param float $pourcentHBonif The pourcent h bonif.
     */
    public function setPourcentHBonif($pourcentHBonif) {
        $this->pourcentHBonif = $pourcentHBonif;
        return $this;
    }
}
