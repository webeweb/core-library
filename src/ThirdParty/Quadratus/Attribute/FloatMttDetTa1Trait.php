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
 * Mtt det ta1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttDetTa1Trait {

    /**
     * Mtt det ta1.
     *
     * @var float
     */
    private $mttDetTa1;

    /**
     * Get the mtt det ta1.
     *
     * @return float Returns the mtt det ta1.
     */
    public function getMttDetTa1() {
        return $this->mttDetTa1;
    }

    /**
     * Set the mtt det ta1.
     *
     * @param float $mttDetTa1 The mtt det ta1.
     */
    public function setMttDetTa1($mttDetTa1) {
        $this->mttDetTa1 = $mttDetTa1;
        return $this;
    }
}
