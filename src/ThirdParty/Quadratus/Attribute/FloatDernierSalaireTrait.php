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
 * Dernier salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDernierSalaireTrait {

    /**
     * Dernier salaire.
     *
     * @var float
     */
    private $dernierSalaire;

    /**
     * Get the dernier salaire.
     *
     * @return float Returns the dernier salaire.
     */
    public function getDernierSalaire() {
        return $this->dernierSalaire;
    }

    /**
     * Set the dernier salaire.
     *
     * @param float $dernierSalaire The dernier salaire.
     */
    public function setDernierSalaire($dernierSalaire) {
        $this->dernierSalaire = $dernierSalaire;
        return $this;
    }
}
