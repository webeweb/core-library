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
 * Taux formation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxFormationTrait {

    /**
     * Taux formation.
     *
     * @var float
     */
    private $tauxFormation;

    /**
     * Get the taux formation.
     *
     * @return float Returns the taux formation.
     */
    public function getTauxFormation() {
        return $this->tauxFormation;
    }

    /**
     * Set the taux formation.
     *
     * @param float $tauxFormation The taux formation.
     */
    public function setTauxFormation($tauxFormation) {
        $this->tauxFormation = $tauxFormation;
        return $this;
    }
}
