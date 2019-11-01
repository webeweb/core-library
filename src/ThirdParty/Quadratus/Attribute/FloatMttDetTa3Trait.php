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
 * Mtt det ta3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttDetTa3Trait {

    /**
     * Mtt det ta3.
     *
     * @var float
     */
    private $mttDetTa3;

    /**
     * Get the mtt det ta3.
     *
     * @return float Returns the mtt det ta3.
     */
    public function getMttDetTa3() {
        return $this->mttDetTa3;
    }

    /**
     * Set the mtt det ta3.
     *
     * @param float $mttDetTa3 The mtt det ta3.
     */
    public function setMttDetTa3($mttDetTa3) {
        $this->mttDetTa3 = $mttDetTa3;
        return $this;
    }
}
