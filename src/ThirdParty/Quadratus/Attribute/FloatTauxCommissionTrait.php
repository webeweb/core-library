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
 * Taux commission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxCommissionTrait {

    /**
     * Taux commission.
     *
     * @var float
     */
    private $tauxCommission;

    /**
     * Get the taux commission.
     *
     * @return float Returns the taux commission.
     */
    public function getTauxCommission() {
        return $this->tauxCommission;
    }

    /**
     * Set the taux commission.
     *
     * @param float $tauxCommission The taux commission.
     */
    public function setTauxCommission($tauxCommission) {
        $this->tauxCommission = $tauxCommission;
        return $this;
    }
}
