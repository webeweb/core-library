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
 * Az4290 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4290Trait {

    /**
     * Az4290.
     *
     * @var float
     */
    private $az4290;

    /**
     * Get the az4290.
     *
     * @return float Returns the az4290.
     */
    public function getAz4290() {
        return $this->az4290;
    }

    /**
     * Set the az4290.
     *
     * @param float $az4290 The az4290.
     */
    public function setAz4290($az4290) {
        $this->az4290 = $az4290;
        return $this;
    }
}
