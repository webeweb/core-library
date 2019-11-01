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
 * Az4268 base2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4268Base2Trait {

    /**
     * Az4268 base2.
     *
     * @var float
     */
    private $az4268Base2;

    /**
     * Get the az4268 base2.
     *
     * @return float Returns the az4268 base2.
     */
    public function getAz4268Base2() {
        return $this->az4268Base2;
    }

    /**
     * Set the az4268 base2.
     *
     * @param float $az4268Base2 The az4268 base2.
     */
    public function setAz4268Base2($az4268Base2) {
        $this->az4268Base2 = $az4268Base2;
        return $this;
    }
}
