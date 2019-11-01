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
 * Taux ded sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxDedSupTrait {

    /**
     * Taux ded sup.
     *
     * @var float
     */
    private $tauxDedSup;

    /**
     * Get the taux ded sup.
     *
     * @return float Returns the taux ded sup.
     */
    public function getTauxDedSup() {
        return $this->tauxDedSup;
    }

    /**
     * Set the taux ded sup.
     *
     * @param float $tauxDedSup The taux ded sup.
     */
    public function setTauxDedSup($tauxDedSup) {
        $this->tauxDedSup = $tauxDedSup;
        return $this;
    }
}
