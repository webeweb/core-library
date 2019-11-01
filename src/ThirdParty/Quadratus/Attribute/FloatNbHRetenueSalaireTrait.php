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
 * Nb h retenue salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHRetenueSalaireTrait {

    /**
     * Nb h retenue salaire.
     *
     * @var float
     */
    private $nbHRetenueSalaire;

    /**
     * Get the nb h retenue salaire.
     *
     * @return float Returns the nb h retenue salaire.
     */
    public function getNbHRetenueSalaire() {
        return $this->nbHRetenueSalaire;
    }

    /**
     * Set the nb h retenue salaire.
     *
     * @param float $nbHRetenueSalaire The nb h retenue salaire.
     */
    public function setNbHRetenueSalaire($nbHRetenueSalaire) {
        $this->nbHRetenueSalaire = $nbHRetenueSalaire;
        return $this;
    }
}
