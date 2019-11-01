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
 * Cum base tr c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseTrCTrait {

    /**
     * Cum base tr c.
     *
     * @var float
     */
    private $cumBaseTrC;

    /**
     * Get the cum base tr c.
     *
     * @return float Returns the cum base tr c.
     */
    public function getCumBaseTrC() {
        return $this->cumBaseTrC;
    }

    /**
     * Set the cum base tr c.
     *
     * @param float $cumBaseTrC The cum base tr c.
     */
    public function setCumBaseTrC($cumBaseTrC) {
        $this->cumBaseTrC = $cumBaseTrC;
        return $this;
    }
}
