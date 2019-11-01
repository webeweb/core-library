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
 * Base tot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseTotTrait {

    /**
     * Base tot.
     *
     * @var float
     */
    private $baseTot;

    /**
     * Get the base tot.
     *
     * @return float Returns the base tot.
     */
    public function getBaseTot() {
        return $this->baseTot;
    }

    /**
     * Set the base tot.
     *
     * @param float $baseTot The base tot.
     */
    public function setBaseTot($baseTot) {
        $this->baseTot = $baseTot;
        return $this;
    }
}
