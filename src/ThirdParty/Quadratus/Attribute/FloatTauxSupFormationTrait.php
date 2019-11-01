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
 * Taux sup formation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxSupFormationTrait {

    /**
     * Taux sup formation.
     *
     * @var float
     */
    private $tauxSupFormation;

    /**
     * Get the taux sup formation.
     *
     * @return float Returns the taux sup formation.
     */
    public function getTauxSupFormation() {
        return $this->tauxSupFormation;
    }

    /**
     * Set the taux sup formation.
     *
     * @param float $tauxSupFormation The taux sup formation.
     */
    public function setTauxSupFormation($tauxSupFormation) {
        $this->tauxSupFormation = $tauxSupFormation;
        return $this;
    }
}
