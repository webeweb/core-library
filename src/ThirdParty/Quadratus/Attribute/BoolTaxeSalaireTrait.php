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
trait BoolTaxeSalaireTrait {

    /**
     * Taxe salaire.
     *
     * @var bool
     */
    private $taxeSalaire;

    /**
     * Get the taxe salaire.
     *
     * @return bool Returns the taxe salaire.
     */
    public function getTaxeSalaire() {
        return $this->taxeSalaire;
    }

    /**
     * Set the taxe salaire.
     *
     * @param bool $taxeSalaire The taxe salaire.
     */
    public function setTaxeSalaire($taxeSalaire) {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }
}
