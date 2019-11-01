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
 * Cum base tr d1 caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrD1Caisse1Trait {

    /**
     * Cum base tr d1 caisse1.
     *
     * @var float
     */
    private $cumBaseTrD1Caisse1;

    /**
     * Get the cum base tr d1 caisse1.
     *
     * @return float Returns the cum base tr d1 caisse1.
     */
    public function getCumBaseTrD1Caisse1() {
        return $this->cumBaseTrD1Caisse1;
    }

    /**
     * Set the cum base tr d1 caisse1.
     *
     * @param float $cumBaseTrD1Caisse1 The cum base tr d1 caisse1.
     */
    public function setCumBaseTrD1Caisse1($cumBaseTrD1Caisse1) {
        $this->cumBaseTrD1Caisse1 = $cumBaseTrD1Caisse1;
        return $this;
    }
}
