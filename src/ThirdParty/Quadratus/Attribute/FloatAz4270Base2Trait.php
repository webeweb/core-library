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
 * Az4270 base2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4270Base2Trait {

    /**
     * Az4270 base2.
     *
     * @var float
     */
    private $az4270Base2;

    /**
     * Get the az4270 base2.
     *
     * @return float Returns the az4270 base2.
     */
    public function getAz4270Base2() {
        return $this->az4270Base2;
    }

    /**
     * Set the az4270 base2.
     *
     * @param float $az4270Base2 The az4270 base2.
     */
    public function setAz4270Base2($az4270Base2) {
        $this->az4270Base2 = $az4270Base2;
        return $this;
    }
}
