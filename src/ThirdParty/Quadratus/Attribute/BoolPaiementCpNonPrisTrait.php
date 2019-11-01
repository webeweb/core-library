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
 * Paiement cp non pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPaiementCpNonPrisTrait {

    /**
     * Paiement cp non pris.
     *
     * @var bool
     */
    private $paiementCpNonPris;

    /**
     * Get the paiement cp non pris.
     *
     * @return bool Returns the paiement cp non pris.
     */
    public function getPaiementCpNonPris() {
        return $this->paiementCpNonPris;
    }

    /**
     * Set the paiement cp non pris.
     *
     * @param bool $paiementCpNonPris The paiement cp non pris.
     */
    public function setPaiementCpNonPris($paiementCpNonPris) {
        $this->paiementCpNonPris = $paiementCpNonPris;
        return $this;
    }
}
