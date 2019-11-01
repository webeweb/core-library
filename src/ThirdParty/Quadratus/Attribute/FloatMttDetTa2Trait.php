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
 * Mtt det ta2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttDetTa2Trait {

    /**
     * Mtt det ta2.
     *
     * @var float
     */
    private $mttDetTa2;

    /**
     * Get the mtt det ta2.
     *
     * @return float Returns the mtt det ta2.
     */
    public function getMttDetTa2() {
        return $this->mttDetTa2;
    }

    /**
     * Set the mtt det ta2.
     *
     * @param float $mttDetTa2 The mtt det ta2.
     */
    public function setMttDetTa2($mttDetTa2) {
        $this->mttDetTa2 = $mttDetTa2;
        return $this;
    }
}
