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
 * Nb h bonifie prises trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHBonifiePrisesTrait {

    /**
     * Nb h bonifie prises.
     *
     * @var float
     */
    private $nbHBonifiePrises;

    /**
     * Get the nb h bonifie prises.
     *
     * @return float Returns the nb h bonifie prises.
     */
    public function getNbHBonifiePrises() {
        return $this->nbHBonifiePrises;
    }

    /**
     * Set the nb h bonifie prises.
     *
     * @param float $nbHBonifiePrises The nb h bonifie prises.
     */
    public function setNbHBonifiePrises($nbHBonifiePrises) {
        $this->nbHBonifiePrises = $nbHBonifiePrises;
        return $this;
    }
}
