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
 * Taux salarial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxSalarialTrait {

    /**
     * Taux salarial.
     *
     * @var float
     */
    private $tauxSalarial;

    /**
     * Get the taux salarial.
     *
     * @return float Returns the taux salarial.
     */
    public function getTauxSalarial() {
        return $this->tauxSalarial;
    }

    /**
     * Set the taux salarial.
     *
     * @param float $tauxSalarial The taux salarial.
     */
    public function setTauxSalarial($tauxSalarial) {
        $this->tauxSalarial = $tauxSalarial;
        return $this;
    }
}
