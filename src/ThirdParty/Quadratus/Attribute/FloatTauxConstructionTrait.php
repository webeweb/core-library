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
 * Taux construction trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxConstructionTrait {

    /**
     * Taux construction.
     *
     * @var float
     */
    private $tauxConstruction;

    /**
     * Get the taux construction.
     *
     * @return float Returns the taux construction.
     */
    public function getTauxConstruction() {
        return $this->tauxConstruction;
    }

    /**
     * Set the taux construction.
     *
     * @param float $tauxConstruction The taux construction.
     */
    public function setTauxConstruction($tauxConstruction) {
        $this->tauxConstruction = $tauxConstruction;
        return $this;
    }
}
