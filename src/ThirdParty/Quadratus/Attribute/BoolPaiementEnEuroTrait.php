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
 * Paiement en euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPaiementEnEuroTrait {

    /**
     * Paiement en euro.
     *
     * @var bool
     */
    private $paiementEnEuro;

    /**
     * Get the paiement en euro.
     *
     * @return bool Returns the paiement en euro.
     */
    public function getPaiementEnEuro() {
        return $this->paiementEnEuro;
    }

    /**
     * Set the paiement en euro.
     *
     * @param bool $paiementEnEuro The paiement en euro.
     */
    public function setPaiementEnEuro($paiementEnEuro) {
        $this->paiementEnEuro = $paiementEnEuro;
        return $this;
    }
}
