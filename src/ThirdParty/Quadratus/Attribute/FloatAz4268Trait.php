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
 * Az4268 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4268Trait {

    /**
     * Az4268.
     *
     * @var float
     */
    private $az4268;

    /**
     * Get the az4268.
     *
     * @return float Returns the az4268.
     */
    public function getAz4268() {
        return $this->az4268;
    }

    /**
     * Set the az4268.
     *
     * @param float $az4268 The az4268.
     */
    public function setAz4268($az4268) {
        $this->az4268 = $az4268;
        return $this;
    }
}
