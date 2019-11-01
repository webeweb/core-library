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
 * Double6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDouble6Trait {

    /**
     * Double6.
     *
     * @var float
     */
    private $double6;

    /**
     * Get the double6.
     *
     * @return float Returns the double6.
     */
    public function getDouble6() {
        return $this->double6;
    }

    /**
     * Set the double6.
     *
     * @param float $double6 The double6.
     */
    public function setDouble6($double6) {
        $this->double6 = $double6;
        return $this;
    }
}
