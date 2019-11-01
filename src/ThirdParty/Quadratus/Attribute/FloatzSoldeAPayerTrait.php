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
 * z solde a payer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatzSoldeAPayerTrait {

    /**
     * z solde a payer.
     *
     * @var float
     */
    private $zSoldeAPayer;

    /**
     * Get the z solde a payer.
     *
     * @return float Returns the z solde a payer.
     */
    public function getzSoldeAPayer() {
        return $this->zSoldeAPayer;
    }

    /**
     * Set the z solde a payer.
     *
     * @param float $zSoldeAPayer The z solde a payer.
     */
    public function setzSoldeAPayer($zSoldeAPayer) {
        $this->zSoldeAPayer = $zSoldeAPayer;
        return $this;
    }
}
