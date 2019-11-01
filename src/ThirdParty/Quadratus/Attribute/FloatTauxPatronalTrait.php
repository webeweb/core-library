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
 * Taux patronal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPatronalTrait {

    /**
     * Taux patronal.
     *
     * @var float
     */
    private $tauxPatronal;

    /**
     * Get the taux patronal.
     *
     * @return float Returns the taux patronal.
     */
    public function getTauxPatronal() {
        return $this->tauxPatronal;
    }

    /**
     * Set the taux patronal.
     *
     * @param float $tauxPatronal The taux patronal.
     */
    public function setTauxPatronal($tauxPatronal) {
        $this->tauxPatronal = $tauxPatronal;
        return $this;
    }
}
