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
 * Taux interet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxInteretTrait {

    /**
     * Taux interet.
     *
     * @var float
     */
    private $tauxInteret;

    /**
     * Get the taux interet.
     *
     * @return float Returns the taux interet.
     */
    public function getTauxInteret() {
        return $this->tauxInteret;
    }

    /**
     * Set the taux interet.
     *
     * @param float $tauxInteret The taux interet.
     */
    public function setTauxInteret($tauxInteret) {
        $this->tauxInteret = $tauxInteret;
        return $this;
    }
}
