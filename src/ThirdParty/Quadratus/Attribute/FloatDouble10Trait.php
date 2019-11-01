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
 * Double10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDouble10Trait {

    /**
     * Double10.
     *
     * @var float
     */
    private $double10;

    /**
     * Get the double10.
     *
     * @return float Returns the double10.
     */
    public function getDouble10() {
        return $this->double10;
    }

    /**
     * Set the double10.
     *
     * @param float $double10 The double10.
     */
    public function setDouble10($double10) {
        $this->double10 = $double10;
        return $this;
    }
}
