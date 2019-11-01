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
 * Az4255 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4255BaseTrait {

    /**
     * Az4255 base.
     *
     * @var float
     */
    private $az4255Base;

    /**
     * Get the az4255 base.
     *
     * @return float Returns the az4255 base.
     */
    public function getAz4255Base() {
        return $this->az4255Base;
    }

    /**
     * Set the az4255 base.
     *
     * @param float $az4255Base The az4255 base.
     */
    public function setAz4255Base($az4255Base) {
        $this->az4255Base = $az4255Base;
        return $this;
    }
}
