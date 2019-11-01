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
 * Charge sal tot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatChargeSalTotTrait {

    /**
     * Charge sal tot.
     *
     * @var float
     */
    private $chargeSalTot;

    /**
     * Get the charge sal tot.
     *
     * @return float Returns the charge sal tot.
     */
    public function getChargeSalTot() {
        return $this->chargeSalTot;
    }

    /**
     * Set the charge sal tot.
     *
     * @param float $chargeSalTot The charge sal tot.
     */
    public function setChargeSalTot($chargeSalTot) {
        $this->chargeSalTot = $chargeSalTot;
        return $this;
    }
}
