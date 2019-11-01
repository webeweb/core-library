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
 * Az4251 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4251Trait {

    /**
     * Az4251.
     *
     * @var float
     */
    private $az4251;

    /**
     * Get the az4251.
     *
     * @return float Returns the az4251.
     */
    public function getAz4251() {
        return $this->az4251;
    }

    /**
     * Set the az4251.
     *
     * @param float $az4251 The az4251.
     */
    public function setAz4251($az4251) {
        $this->az4251 = $az4251;
        return $this;
    }
}
