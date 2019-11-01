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
 * Double4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDouble4Trait {

    /**
     * Double4.
     *
     * @var float
     */
    private $double4;

    /**
     * Get the double4.
     *
     * @return float Returns the double4.
     */
    public function getDouble4() {
        return $this->double4;
    }

    /**
     * Set the double4.
     *
     * @param float $double4 The double4.
     */
    public function setDouble4($double4) {
        $this->double4 = $double4;
        return $this;
    }
}
