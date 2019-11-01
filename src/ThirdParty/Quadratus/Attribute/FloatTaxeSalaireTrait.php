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
 * Taxe salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTaxeSalaireTrait {

    /**
     * Taxe salaire.
     *
     * @var float
     */
    private $taxeSalaire;

    /**
     * Get the taxe salaire.
     *
     * @return float Returns the taxe salaire.
     */
    public function getTaxeSalaire() {
        return $this->taxeSalaire;
    }

    /**
     * Set the taxe salaire.
     *
     * @param float $taxeSalaire The taxe salaire.
     */
    public function setTaxeSalaire($taxeSalaire) {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }
}
