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
 * Taux h comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHCompTrait {

    /**
     * Taux h comp.
     *
     * @var float
     */
    private $tauxHComp;

    /**
     * Get the taux h comp.
     *
     * @return float Returns the taux h comp.
     */
    public function getTauxHComp() {
        return $this->tauxHComp;
    }

    /**
     * Set the taux h comp.
     *
     * @param float $tauxHComp The taux h comp.
     */
    public function setTauxHComp($tauxHComp) {
        $this->tauxHComp = $tauxHComp;
        return $this;
    }
}
