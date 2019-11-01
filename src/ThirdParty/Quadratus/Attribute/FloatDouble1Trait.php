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
 * Double1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDouble1Trait {

    /**
     * Double1.
     *
     * @var float
     */
    private $double1;

    /**
     * Get the double1.
     *
     * @return float Returns the double1.
     */
    public function getDouble1() {
        return $this->double1;
    }

    /**
     * Set the double1.
     *
     * @param float $double1 The double1.
     */
    public function setDouble1($double1) {
        $this->double1 = $double1;
        return $this;
    }
}
