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
 * Az4281 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4281BaseTrait {

    /**
     * Az4281 base.
     *
     * @var float
     */
    private $az4281Base;

    /**
     * Get the az4281 base.
     *
     * @return float Returns the az4281 base.
     */
    public function getAz4281Base() {
        return $this->az4281Base;
    }

    /**
     * Set the az4281 base.
     *
     * @param float $az4281Base The az4281 base.
     */
    public function setAz4281Base($az4281Base) {
        $this->az4281Base = $az4281Base;
        return $this;
    }
}
