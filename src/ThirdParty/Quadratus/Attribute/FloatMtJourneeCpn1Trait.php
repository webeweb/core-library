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
 * Mt journee cpn1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtJourneeCpn1Trait {

    /**
     * Mt journee cpn1.
     *
     * @var float
     */
    private $mtJourneeCpn1;

    /**
     * Get the mt journee cpn1.
     *
     * @return float Returns the mt journee cpn1.
     */
    public function getMtJourneeCpn1() {
        return $this->mtJourneeCpn1;
    }

    /**
     * Set the mt journee cpn1.
     *
     * @param float $mtJourneeCpn1 The mt journee cpn1.
     */
    public function setMtJourneeCpn1($mtJourneeCpn1) {
        $this->mtJourneeCpn1 = $mtJourneeCpn1;
        return $this;
    }
}
