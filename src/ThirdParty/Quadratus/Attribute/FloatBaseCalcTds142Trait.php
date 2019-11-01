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
 * Base calc tds142 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseCalcTds142Trait {

    /**
     * Base calc tds142.
     *
     * @var float
     */
    private $baseCalcTds142;

    /**
     * Get the base calc tds142.
     *
     * @return float Returns the base calc tds142.
     */
    public function getBaseCalcTds142() {
        return $this->baseCalcTds142;
    }

    /**
     * Set the base calc tds142.
     *
     * @param float $baseCalcTds142 The base calc tds142.
     */
    public function setBaseCalcTds142($baseCalcTds142) {
        $this->baseCalcTds142 = $baseCalcTds142;
        return $this;
    }
}
