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
 * Mt journee cpn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtJourneeCpnTrait {

    /**
     * Mt journee cpn.
     *
     * @var float
     */
    private $mtJourneeCpn;

    /**
     * Get the mt journee cpn.
     *
     * @return float Returns the mt journee cpn.
     */
    public function getMtJourneeCpn() {
        return $this->mtJourneeCpn;
    }

    /**
     * Set the mt journee cpn.
     *
     * @param float $mtJourneeCpn The mt journee cpn.
     */
    public function setMtJourneeCpn($mtJourneeCpn) {
        $this->mtJourneeCpn = $mtJourneeCpn;
        return $this;
    }
}
