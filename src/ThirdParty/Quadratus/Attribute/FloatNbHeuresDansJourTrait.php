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
 * Nb heures dans jour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeuresDansJourTrait {

    /**
     * Nb heures dans jour.
     *
     * @var float
     */
    private $nbHeuresDansJour;

    /**
     * Get the nb heures dans jour.
     *
     * @return float Returns the nb heures dans jour.
     */
    public function getNbHeuresDansJour() {
        return $this->nbHeuresDansJour;
    }

    /**
     * Set the nb heures dans jour.
     *
     * @param float $nbHeuresDansJour The nb heures dans jour.
     */
    public function setNbHeuresDansJour($nbHeuresDansJour) {
        $this->nbHeuresDansJour = $nbHeuresDansJour;
        return $this;
    }
}
