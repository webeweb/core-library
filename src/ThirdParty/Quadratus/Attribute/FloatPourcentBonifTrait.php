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
 * Pourcent bonif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentBonifTrait {

    /**
     * Pourcent bonif.
     *
     * @var float
     */
    private $pourcentBonif;

    /**
     * Get the pourcent bonif.
     *
     * @return float Returns the pourcent bonif.
     */
    public function getPourcentBonif() {
        return $this->pourcentBonif;
    }

    /**
     * Set the pourcent bonif.
     *
     * @param float $pourcentBonif The pourcent bonif.
     */
    public function setPourcentBonif($pourcentBonif) {
        $this->pourcentBonif = $pourcentBonif;
        return $this;
    }
}
