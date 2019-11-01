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
 * Double2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDouble2Trait {

    /**
     * Double2.
     *
     * @var float
     */
    private $double2;

    /**
     * Get the double2.
     *
     * @return float Returns the double2.
     */
    public function getDouble2() {
        return $this->double2;
    }

    /**
     * Set the double2.
     *
     * @param float $double2 The double2.
     */
    public function setDouble2($double2) {
        $this->double2 = $double2;
        return $this;
    }
}
