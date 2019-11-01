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
 * Charge sal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatChargeSalTrait {

    /**
     * Charge sal.
     *
     * @var float
     */
    private $chargeSal;

    /**
     * Get the charge sal.
     *
     * @return float Returns the charge sal.
     */
    public function getChargeSal() {
        return $this->chargeSal;
    }

    /**
     * Set the charge sal.
     *
     * @param float $chargeSal The charge sal.
     */
    public function setChargeSal($chargeSal) {
        $this->chargeSal = $chargeSal;
        return $this;
    }
}
