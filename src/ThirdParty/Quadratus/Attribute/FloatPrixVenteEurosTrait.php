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
 * Prix vente euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixVenteEurosTrait {

    /**
     * Prix vente euros.
     *
     * @var float
     */
    private $prixVenteEuros;

    /**
     * Get the prix vente euros.
     *
     * @return float Returns the prix vente euros.
     */
    public function getPrixVenteEuros() {
        return $this->prixVenteEuros;
    }

    /**
     * Set the prix vente euros.
     *
     * @param float $prixVenteEuros The prix vente euros.
     */
    public function setPrixVenteEuros($prixVenteEuros) {
        $this->prixVenteEuros = $prixVenteEuros;
        return $this;
    }
}
