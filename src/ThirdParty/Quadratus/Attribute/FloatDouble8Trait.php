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
 * Double8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDouble8Trait {

    /**
     * Double8.
     *
     * @var float
     */
    private $double8;

    /**
     * Get the double8.
     *
     * @return float Returns the double8.
     */
    public function getDouble8() {
        return $this->double8;
    }

    /**
     * Set the double8.
     *
     * @param float $double8 The double8.
     */
    public function setDouble8($double8) {
        $this->double8 = $double8;
        return $this;
    }
}
