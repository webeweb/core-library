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
 * Mt journee cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtJourneeCpTrait {

    /**
     * Mt journee cp.
     *
     * @var float
     */
    private $mtJourneeCp;

    /**
     * Get the mt journee cp.
     *
     * @return float Returns the mt journee cp.
     */
    public function getMtJourneeCp() {
        return $this->mtJourneeCp;
    }

    /**
     * Set the mt journee cp.
     *
     * @param float $mtJourneeCp The mt journee cp.
     */
    public function setMtJourneeCp($mtJourneeCp) {
        $this->mtJourneeCp = $mtJourneeCp;
        return $this;
    }
}
