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
 * Double9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDouble9Trait {

    /**
     * Double9.
     *
     * @var float
     */
    private $double9;

    /**
     * Get the double9.
     *
     * @return float Returns the double9.
     */
    public function getDouble9() {
        return $this->double9;
    }

    /**
     * Set the double9.
     *
     * @param float $double9 The double9.
     */
    public function setDouble9($double9) {
        $this->double9 = $double9;
        return $this;
    }
}
