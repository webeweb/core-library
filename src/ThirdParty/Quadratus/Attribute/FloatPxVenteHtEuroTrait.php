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
 * Px vente ht euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPxVenteHtEuroTrait {

    /**
     * Px vente ht euro.
     *
     * @var float
     */
    private $pxVenteHtEuro;

    /**
     * Get the px vente ht euro.
     *
     * @return float Returns the px vente ht euro.
     */
    public function getPxVenteHtEuro() {
        return $this->pxVenteHtEuro;
    }

    /**
     * Set the px vente ht euro.
     *
     * @param float $pxVenteHtEuro The px vente ht euro.
     */
    public function setPxVenteHtEuro($pxVenteHtEuro) {
        $this->pxVenteHtEuro = $pxVenteHtEuro;
        return $this;
    }
}
