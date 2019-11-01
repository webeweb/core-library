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
 * Plafond salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondSalaireTrait {

    /**
     * Plafond salaire.
     *
     * @var float
     */
    private $plafondSalaire;

    /**
     * Get the plafond salaire.
     *
     * @return float Returns the plafond salaire.
     */
    public function getPlafondSalaire() {
        return $this->plafondSalaire;
    }

    /**
     * Set the plafond salaire.
     *
     * @param float $plafondSalaire The plafond salaire.
     */
    public function setPlafondSalaire($plafondSalaire) {
        $this->plafondSalaire = $plafondSalaire;
        return $this;
    }
}
