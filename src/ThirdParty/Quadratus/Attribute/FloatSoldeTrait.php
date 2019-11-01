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
 * Solde trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSoldeTrait {

    /**
     * Solde.
     *
     * @var float
     */
    private $solde;

    /**
     * Get the solde.
     *
     * @return float Returns the solde.
     */
    public function getSolde() {
        return $this->solde;
    }

    /**
     * Set the solde.
     *
     * @param float $solde The solde.
     */
    public function setSolde($solde) {
        $this->solde = $solde;
        return $this;
    }
}
