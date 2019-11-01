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
 * Nb salarial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbSalarialTrait {

    /**
     * Nb salarial.
     *
     * @var float
     */
    private $nbSalarial;

    /**
     * Get the nb salarial.
     *
     * @return float Returns the nb salarial.
     */
    public function getNbSalarial() {
        return $this->nbSalarial;
    }

    /**
     * Set the nb salarial.
     *
     * @param float $nbSalarial The nb salarial.
     */
    public function setNbSalarial($nbSalarial) {
        $this->nbSalarial = $nbSalarial;
        return $this;
    }
}
