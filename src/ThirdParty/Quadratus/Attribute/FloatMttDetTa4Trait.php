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
 * Mtt det ta4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttDetTa4Trait {

    /**
     * Mtt det ta4.
     *
     * @var float
     */
    private $mttDetTa4;

    /**
     * Get the mtt det ta4.
     *
     * @return float Returns the mtt det ta4.
     */
    public function getMttDetTa4() {
        return $this->mttDetTa4;
    }

    /**
     * Set the mtt det ta4.
     *
     * @param float $mttDetTa4 The mtt det ta4.
     */
    public function setMttDetTa4($mttDetTa4) {
        $this->mttDetTa4 = $mttDetTa4;
        return $this;
    }
}
