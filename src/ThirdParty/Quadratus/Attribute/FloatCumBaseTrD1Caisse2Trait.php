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
 * Cum base tr d1 caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrD1Caisse2Trait {

    /**
     * Cum base tr d1 caisse2.
     *
     * @var float
     */
    private $cumBaseTrD1Caisse2;

    /**
     * Get the cum base tr d1 caisse2.
     *
     * @return float Returns the cum base tr d1 caisse2.
     */
    public function getCumBaseTrD1Caisse2() {
        return $this->cumBaseTrD1Caisse2;
    }

    /**
     * Set the cum base tr d1 caisse2.
     *
     * @param float $cumBaseTrD1Caisse2 The cum base tr d1 caisse2.
     */
    public function setCumBaseTrD1Caisse2($cumBaseTrD1Caisse2) {
        $this->cumBaseTrD1Caisse2 = $cumBaseTrD1Caisse2;
        return $this;
    }
}
