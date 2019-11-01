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
 * Cum base tr d trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrDTrait {

    /**
     * Cum base tr d.
     *
     * @var float
     */
    private $cumBaseTrD;

    /**
     * Get the cum base tr d.
     *
     * @return float Returns the cum base tr d.
     */
    public function getCumBaseTrD() {
        return $this->cumBaseTrD;
    }

    /**
     * Set the cum base tr d.
     *
     * @param float $cumBaseTrD The cum base tr d.
     */
    public function setCumBaseTrD($cumBaseTrD) {
        $this->cumBaseTrD = $cumBaseTrD;
        return $this;
    }
}
